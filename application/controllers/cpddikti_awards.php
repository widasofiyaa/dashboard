<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cpddikti_awards extends CI_Controller {

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
		$this->load->Model('Mpddikti_awards');
	}
	public function index()
	{
		// $sess = $this->session->userdata('status');
		// if (isset($sess)) {
		$data['data_pddikti_awards'] = $this->Mpddikti_awards->get_all()->result();
		// $data['data_barang_kosong'] = $this->Mdata->
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('pddikti_awards',$data);
		// }else{
		// 	$this->load->view('404');
		// }
	

	}
	public function input_pddikti_awards(){
	
		$persentase_kelas_terisi = $this->input->post('persentase_kelas_terisi');
		$persentase_data_pokok_sesuai = $this->input->post('persentase_data_pokok_sesuai');
		$persentase_pelaporan_sesuai = $this->input->post('persentase_pelaporan_sesuai');
		$persentase_checkpoint = $this->input->post('persentase_checkpoint');
		$persentase_pelaporan = $this->input->post('persentase_pelaporan');
		$data = array(
							'persentase_kelas_terisi' => $persentase_kelas_terisi,
							'persentase_data_pokok_sesuai' => $persentase_data_pokok_sesuai,
	 						'persentase_pelaporan_sesuai' => $persentase_pelaporan_sesuai,
	 						'persentase_checkpoint' => $persentase_checkpoint,
	 						'persentase_pelaporan' => $persentase_pelaporan
	 			);
	 	$this->Mpddikti_awards->input_data($data);
	 	redirect('Cpddikti_awards');
	}
	public function hapus($persentase_kelas_terisi)
	{
		$this->Mpddikti_awards->delete($persentase_kelas_terisi);
		redirect('cpddikti_awards');
	}
	public function update_pddikti_awards(){

		$persentase_kelas_terisi = $this->input->post('persentase_kelas_terisi');
		$persentase_data_pokok_sesuai = $this->input->post('persentase_data_pokok_sesuai');
		$persentase_pelaporan_sesuai = $this->input->post('persentase_pelaporan_sesuai');
		$persentase_checkpoint = $this->input->post('persentase_checkpoint');
		$persentase_pelaporan = $this->input->post('persentase_pelaporan');

		$data = array(

			'persentase_kelas_terisi' => $persentase_kelas_terisi,
			'persentase_data_pokok_sesuai' => $persentase_data_pokok_sesuai,
			 'persentase_pelaporan_sesuai' => $persentase_pelaporan_sesuai,
			 'persentase_checkpoint' => $persentase_checkpoint,
			 'persentase_pelaporan' => $persentase_pelaporan
				);
		$this->Mpddikti_awards->update($persentase_kelas_terisi,$data);
		redirect('cpddikti_awards');
	}
}
