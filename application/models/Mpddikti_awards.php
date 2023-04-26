<?php 
	/**
	* 
	*/
	class Mpddikti_awards extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function input_data($data)
		{
			$this->db->insert('data_pddikti_awards',$data);
		}

		public function get_all()
		{
			$this->db->select('*');
			$this->db->from('data_pddikti_awards');

			return $this->db->get();
		}

		public function update($persentase_kelas_terisi,$data)
		{
			$this->db->where('persentase_kelas_terisi',$persentase_kelas_terisi);
			$this->db->update('data_pddikti_awards',$data);
		}

		public function delete($persentase_kelas_terisi)
		{
			$this->db->where('persentase_kelas_terisi',$persentase_kelas_terisi);
			$this->db->delete('data_pddikti_awards');

			return TRUE;
		}

		public function select_tanggal($tanggal)
		{
			$this->db->select('*');
			$this->db->from('data_pddikti_awards');
			$this->db->where('tanggal',$tanggal);

			return $this->db->get();
		}

		public function select_kopi($persentase_kelas_terisi)
		{
			$this->db->select('*');
			$this->db->from('data_pddikti_awards');
			$this->db->where('persentase_kelas_terisi',$persentase_kelas_terisi);

			return $this->db->get();
		}
		function search($keyword)
    	{
	        $this->db->like('persentase_kelas_terisi',$keyword);
	        $query  =  $this->db->get('data_pddikti_awards');
	        return $query->result();
    	}

    	public function viewByid($persentase_kelas_terisi){    

    	  	$this->db->where('persentase_kelas_terisi', $persentase_kelas_terisi);    
    	  	$result = $this->db->get('data_pddikti_awards')->row(); // Tampilkan data siswa berdasarkan NIS        return $result;   }
    	}

    	public function ambil_id($persentase_kelas_terisi)
		{
			$this->db->select('*');
			$this->db->from('data_pddikti_awards');
			$this->db->where('persentase_kelas_terisi',$persentase_kelas_terisi);

			return $this->db->get();
		}

		public function total_data_pddikti_awards()
		{
			$this->db->from('data_pddikti_awards');
			
			return $this->db->count_all_results();
		}

		public function jumlah_untung()
		{	
			$this->db->select('SUM(untung) as total');
			$this->db->from('data_pddikti_awards');
			return $this->db->get()->row()->total;
		}

		function getkodeunik() { 

			$table = 'data_pddikti_awards';
	        $q = $this->db->query("SELECT MAX(RIGHT(id,4)) AS idmax FROM ".$table);
	        $kd = ""; 
	        if($q->num_rows()>0){ 
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->idmax)+1; 
	                $kd = sprintf("%04s", $tmp); 
	            }
	        }else{ 
	            $kd = "00001";
	        }
	        $kar = "DISPORAPAR."; 
	        return $kar.$kd;
   		}  

	

		
		
	}