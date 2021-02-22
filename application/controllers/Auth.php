<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		// sudah_login();
		$this->load->view('login');
	}
	
	public function register()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules('Nama', 'Namanya', 'required');
		$this->form_validation->set_rules('Email', 'Emailnya', 'required');
        $this->form_validation->set_rules('Username', 'Usernamenya', 'required|min_length[4]|is_unique[users.username]');
        $this->form_validation->set_rules('Password', 'Passwordnya', 'required|min_length[4]');
        $this->form_validation->set_rules('Passconf', 'Konfirmasi Password', 'required|matches[Password]',
            array('matches' =>'%s tidak sesuai dengan Password')
        );

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 4 karakter');
        $this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan coba yang lain');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$this->load->model('user_m');
			$post = $this->input->post(null, TRUE);
			if(isset($_POST['daftar'])){
				$email = $post['Email'];
				$password = $post['Password'];
				$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
				if ($query->num_rows() > 0)  {
					echo "<script>alert('Email anda sudah pernah terdaftar!')</script>";
					echo "<script>window.location='" .site_url('auth/register'). "'</script>";
				} else {

					$this->load->library('email');
					$config = array();
					$config['charset'] = 'utf-8';
					$config['useragent'] = 'Codeigniter';
					$config['protocol']= "smtp";
					$config['mailtype']= "html";
					$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
					$config['smtp_port']= "465";
					$config['smtp_timeout']= "400";
					$config['smtp_user']= "honeybeecode@gmail.com"; // isi dengan email kamu
					$config['smtp_pass']= "aspire4752z"; // isi dengan password kamu
					$config['crlf']="\r\n"; 
					$config['newline']="\r\n"; 
					$config['wordwrap'] = TRUE;
					//memanggil library email dan set konfigurasi untuk pengiriman email
				
					$this->email->initialize($config);
					//konfigurasi pengiriman
					$this->email->from($config['smtp_user']);
					$this->email->to($email);
					$this->email->subject("Verifikasi Akun");
					$this->email->message(
					" <html>
					<head>
					<title>Verification Code</title>
					</head>
					<body>
					<h2>Terima Kasih atas Pendaftarannya.</h2>
					<p>Detail akun kamu:</p>
					<p>Email: ".$email."</p>
					<p>Password: ".$password."</p>
					<p>Silahkan klik aktivasi akun dibawah ini untuk mengaktifkan.</p>
					<h4><a href='".base_url()."user/activate/".$id."/".$code."'>Aktifkan Akun</a></h4>
					</body>
					</html>"
					);

					if($this->email->send())
					{
					echo "<script>alert('Berhasil melakukan registrasi, silahkan cek email kamu')</script>";
					}else
					{
					echo "<script>alert('Berhasil melakukan registrasi, namun gagal mengirim verifikasi email')</script>";
					}

					$this->user_m->tambah($post);
					if($this->db->affected_rows() > 0){
					echo "<script>alert('Data berhasil disimpan')</script>";
				}
					echo "<script>window.location='" .site_url('auth/login'). "'</script>";
				}

				echo "<script>window.location='" .site_url('auth/login'). "'</script>"; 
			} 
		}
	}


// 	public function proses()
// 	{
// 		$post = $this->input->post(null, TRUE);
// 		if(isset($post['login'])){
// 			$this->load->model('user_m');
// 			$query = $this->user_m->login($post);
// 			if($query->num_rows() > 0){
// 				$row = $query->row();
// 				$param = array(
// 					'userid' => $row->id_user,
// 					'level' => $row->level,
// 					'nama' => addslashes($row->nama),
// 				);
// 				$this->session->set_userdata($param);
// 				echo "<script>
// 					alert('Selamat datang ".$this->session->userdata('nama').", login berhasil');
// 					window.location='" .site_url('penjualan'). "'
// 					</script>";
// 			} else {
// 				echo "<script>
// 					alert('Maaf, login gagal. Username / password salah');
// 					window.location='" .site_url('auth/login'). "'
// 					</script>";
// 			}
// 		}
// 	}

// 	public function logout()
// 	{
// 		$param = array('userid', 'level');
// 		$this->session->unset_userdata($param);
// 		redirect('auth/login');
// 	}
}
