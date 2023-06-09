<?php 
	/**
	* 
	*/
	class Mdata_kelengkapan_pddikti extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_kelengkapan_pddikti',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_kelengkapan_pddikti');

			return $this->db->get();
		}

		public function updateID($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('data_kelengkapan_pddikti',$data);
		}
		public function update($profile,$data)
		{
			$this->db->where('profile',$profile);
			$this->db->update('data_kelengkapan_pddikti',$data);
		}

		public function delete($id_data)
		{
			$this->db->where('id',$id_data);
			$this->db->delete('data_kelengkapan_pddikti');

			return TRUE;
		}
		
		function search($keyword)
    	{
	        $this->db->like('id',$keyword);
	        $query  =  $this->db->get('data_kelengkapan_pddikti');
	        return $query->result();
    	}

    	public function viewByid($id){    

    	  	$this->db->where('id', $id);    
    	  	$result = $this->db->get('data_kelengkapan_pddikti')->row();
    	}


		public function total_data_kelengkapan_pddikti()
		{
			
			$this->db->from('data_kelengkapan_pddikti');
			
			return $this->db->count_all_results();
		}

		public function data_anomali_()
		{
			$this->db->select('*');
			$this->db->from('data_anomali');

			return $this->db->get();
		}

		public function total_anomali($mahasiswa_tanpaaktivitas)
		{
			$this->db->select('*');
			$this->db->from('data_anomali');
			$this->db->where('mahasiswa_tanpaaktivitas',$mahasiswa_tanpaaktivitas);
			return $this->db->get();
		}

		function getkodeunik() { 

			$table = 'data_kelengkapan_pddikti';
	        $q = $this->db->query("SELECT MAX(RIGHT(id,4)) AS idmax FROM ".$table);
	        $kd = ""; //kode awal
	        if($q->num_rows()>0){ //jika data ada
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
	                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
	            }
	        }else{ //jika data kosong diset ke kode awal
	            $kd = "0001";
	        }
	        $kar = "ID."; //karakter depan kodenya
	        //gabungkan string dengan kode yang telah dibuat tadi
	        return $kar.$kd;
   		}  





		
	}