<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Manomali');
		$this->load->Model('Mpddikti_awards');
	}
	public function index()
	{
		$sess = $this->session->userdata('status');
		if (isset($sess)) {
			$data['total_dataanomali'] = $this->Manomali->total_dataanomali();
			$data['total_data_pddikti_awards'] = $this->Mpddikti_awards->total_data_pddikti_awards();

		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('home',$data);
		$this->load->view('foot');
		}else{
			$this->load->view('404');
		}
	

	}
}
