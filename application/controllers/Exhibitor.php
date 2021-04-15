<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibitor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		tidak_login();
		$this->load->model('Exhibitor_m');
	}
	public function index()
	{
		$data['row'] = $this->Exhibitor_m->get()->row();
		$this->template->load('template', 'exhibitor', $data);
	}
	public function edit()
	{
		$post = $this->input->post(null, TRUE);
		$this->Exhibitor_m->edit($post);
		echo "<script>window.location='".site_url('exhibitor')."'</script>";
	}
}
