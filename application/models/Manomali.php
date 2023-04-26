<?php 
	/**
	* 
	*/
	class Manomali extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_anomali',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_anomali');

			return $this->db->get();
		}

		public function update($mahasiswa_tanpaaktivitas,$data)
		{
			$this->db->where('mahasiswa_tanpaaktivitas',$mahasiswa_tanpaaktivitas);
			$this->db->update('data_anomali',$data);
		}

		public function delete($mahasiswa_tanpaaktivitas)
		{
			$this->db->where('mahasiswa_tanpaaktivitas',$mahasiswa_tanpaaktivitas);
			$this->db->delete('data_anomali');

			return TRUE;
		}

		public function total_dataanomali()
		{
			$this->db->from('data_anomali');
			
			return $this->db->count_all_results();
		}

		public function select_kopi($mahasiswa_tanpaaktivitas)
		{
			$this->db->select('*');
			$this->db->from('data_anomali');
			$this->db->where('mahasiswa_tanpaaktivitas',$mahasiswa_tanpaaktivitas);

			return $this->db->get();
		}
		function search($keyword)
    	{
	        $this->db->like('mahasiswa_tanpaaktivitas',$keyword);
	        $query  =  $this->db->get('data_anomali');
	        return $query->result();
    	}

    	public function viewByid($dugaan_insert){    

    	  	$this->db->where('dugaan_insert', $dugaan_insert);    
    	  	$result = $this->db->get('data_anomali')->row(); // Tampilkan data siswa berdasarkan NIS        return $result;   }
    	}



		function getkodeunik() { 

			$table = 'data_anomali';
	        $q = $this->db->query("SELECT MAX(RIGHT(dugaan_insert,4)) AS idmax FROM ".$table);
	        $kd = ""; //kode awal
	        if($q->num_rows()>0){ //jika data ada
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
	                $kd = sprintf("%04s", $tmp); //kode ambil 4 karakter terakhir
	            }
	        }else{ //jika data kosong diset ke kode awal
	            $kd = "0001";
	        }
	        $kar = "0000"; //karakter depan kodenya
	        //gabungkan string dengan kode yang telah dibuat tadi
	        return $kar.$kd;
   		}  

	

		
		
	}