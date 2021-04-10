<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		tidak_login();
		$this->load->model('Exhibitor_m');
	}

	public function index()
	{
		$data['row'] = $this->Exhibitor_m->get();
		$this->template->load('template', 'dashboard', $data);
	}
}
