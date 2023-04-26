<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdata_anomali extends CI_Controller {

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
		$this->load->Model('Mdata');
	}
	public function index()
	{
		// $this->template->load('template','dashboard');
		$data['data_anomali'] = $this->Manomali->get_all()->result();
		///$data['data_pddikti_awards'] = $this->Mpddikti_awards->get_all()->result();

		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('data_anomali',$data);
	
		// $this->load->view('foot');
		// $this->load->view('coba');

	}

	public function hapus($mahasiswa_tanpaaktivitas)
	{
		$this->Manomali->delete($mahasiswa_tanpaaktivitas);
		redirect('cdata_anomali');
	}
}
