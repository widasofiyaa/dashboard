<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinput_anomali extends CI_Controller {

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
		$this->load->Model('Mdata');
	}
	public function index()
	{
		$data['data_anomali'] = $this->Mdata->get_all()->result();
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('input_anomali');
		$this->load->view('foot');
		// $this->load->view('coba');

	}
	public function input_anomali(){
	
		$mahasiswa_tanpaaktivitas = $this->input->post('mahasiswa_tanpaaktivitas'); 
		$sks_lebih = $this->input->post('sks_lebih'); 
		$tanpa_ipk_noijazah= $this->input->post('tanpa_ipk_noijazah'); 
		$domisili_mahasiswa = $this->input->post('domisili_mahasiswa'); 
		$tanpa_namaibu = $this->input->post('tanpa_namaibu');
		$mahasiswa_lulus = $this->input->post('mahasiswa_lulus');
		$dugaan_insert = $this->input->post('dugaan_insert');
		$data = array(
	 						'mahasiswa_tanpaaktivitas' => $mahasiswa_tanpaaktivitas,
							'sks_lebih' => $sks_lebih,
							'tanpa_ipk_noijazah' => $tanpa_ipk_noijazah,
	 						'tanpa_namaibu' => $tanpa_namaibu,
	 						'domisili_mahasiswa' => $domisili_mahasiswa,
							'mahasiswa_lulus'=>$mahasiswa_lulus,
	 						'dugaan_insert' => $dugaan_insert
	 			);
	 	$this->Mdata->input_data($data);
	 	redirect('Cdata_anomali');

	}
	public function update_anomali(){

		$mahasiswa_tanpaaktivitas = $this->input->post('mahasiswa_tanpaaktivitas'); 
		$sks_lebih = $this->input->post('sks_lebih'); 
		$tanpa_ipk_noijazah= $this->input->post('tanpa_ipk_noijazah'); 
		$domisili_mahasiswa = $this->input->post('domisili_mahasiswa'); 
		$tanpa_namaibu = $this->input->post('tanpa_namaibu');
		$mahasiswa_lulus = $this->input->post('mahasiswa_lulus');
		$dugaan_insert = $this->input->post('dugaan_insert');

		$data = array(
						'mahasiswa_tanpaaktivitas' => $mahasiswa_tanpaaktivitas,
						'sks_lebih' => $sks_lebih,
						'tanpa_ipk_noijazah' => $tanpa_ipk_noijazah,
						'tanpa_namaibu' => $tanpa_namaibu,
						'domisili_mahasiswa' => $domisili_mahasiswa,
						'mahasiswa_lulus'=>$mahasiswa_lulus,
						'dugaan_insert' => $dugaan_insert
				);
		$this->Mdata->update($mahasiswa_tanpaaktivitas,$data);

		redirect('Cdata_anomali');
	}
}
