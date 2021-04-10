<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Stand extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		tidak_login();
		$this->load->model('Exhibitor_m');
	}

	public function index()
	{
		$id = $_GET['id'];
		$data['row'] = $this->Exhibitor_m->get($id)->row();
		$data['prestasi'] = $this->Exhibitor_m->prestasi($id)->result();
		$data['exhibition'] = $this->Exhibitor_m->exhibition($id)->result();
		$data['karya'] = $this->Exhibitor_m->karya($id)->result();
		$this->template->load('template', 'stand/stand', $data);
	}
}
