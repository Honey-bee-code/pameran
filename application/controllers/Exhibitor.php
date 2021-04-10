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
	// public function edit($id)
	// {
	// 	$data['detail'] = $this->Exhibitor_m->get();
	// 	$this->template->load('template', 'exhibitor');
	// }
}
