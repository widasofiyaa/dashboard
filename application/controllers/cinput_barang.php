<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinput_barang extends CI_Controller {

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
		$data['data_barang'] = $this->Mdata->get_all()->result();
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('input_barang');
		$this->load->view('foot');
		// $this->load->view('coba');

	}
	public function input_barang(){

		$id = $this->Mdata->getkodeunik();		
		$profile = $this->input->post('profile'); //profile
		$pendidikan_dosen_tidak_sesuai_uu = $this->input->post('pendidikan_dosen_tidak_sesuai_uu'); //Pendidikan Dosen TIdak Sesuai UU
		$jumlah_prodi_merah = $this->input->post('jumlah_prodi_merah'); //Jumlah Prodi Merah
		$rasio_dosen = $this->input->post('rasio_dosen'); //Rasio Dosen
		$akreditas = $this->input->post('akreditas');//Akreditas
		$kesesuaian_alamat_pts_dengan_sk = $this->input->post('kesesuaian_alamat_pts_dengan_sk');
		$pelaporan_pddikti = $this->input->post('pelaporan_pddikti');
		$data = array(
							'id' => $id,
	 						'profile' => $profile,
							'pendidikan_dosen_tidak_sesuai_uu' => $pendidikan_dosen_tidak_sesuai_uu,
							'jumlah_prodi_merah' => $jumlah_prodi_merah,
	 						'akreditas' => $akreditas,
	 						'rasio_dosen' => $rasio_dosen,
							'kesesuaian_alamat_pts_dengan_sk'=>$kesesuaian_alamat_pts_dengan_sk,
	 						'pelaporan_pddikti' => $pelaporan_pddikti
	 			);
	 	$this->Mdata->input_data($data);
	 	redirect('Cdata_barang');

	}
	public function update_barang(){

		$id = $this->input->post('id');
		$profile = $this->input->post('profile'); //profile
		$pendidikan_dosen_tidak_sesuai_uu = $this->input->post('pendidikan_dosen_tidak_sesuai_uu'); //Pendidikan Dosen TIdak Sesuai UU
		$jumlah_prodi_merah = $this->input->post('jumlah_prodi_merah'); //Jumlah Prodi Merah
		$rasio_dosen = $this->input->post('rasio_dosen'); //Rasio Dosen
		$akreditas = $this->input->post('akreditas');//Akreditas
		$kesesuaian_alamat_pts_dengan_sk = $this->input->post('kesesuaian_alamat_pts_dengan_sk');
		$pelaporan_pddikti = $this->input->post('pelaporan_pddikti');

		$data = array(	//'id' => $id,
						'profile' => $profile,
						'pendidikan_dosen_tidak_sesuai_uu' => $pendidikan_dosen_tidak_sesuai_uu,
						'jumlah_prodi_merah' => $jumlah_prodi_merah,
						'akreditas' => $akreditas,
						'rasio_dosen' => $rasio_dosen,
						'kesesuaian_alamat_pts_dengan_sk'=>$kesesuaian_alamat_pts_dengan_sk,
						'pelaporan_pddikti' => $pelaporan_pddikti
				);
		$this->Mdata->update($id,$data);

		redirect('Cdata_barang');
	}
}
