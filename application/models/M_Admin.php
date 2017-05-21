
<?php
	// class M_Admin extends CI_ModeL{
	// 	//insert data pendaftar ke dalam database
	// 	public function getcountpeserta(){
	// 		$count=$this->db->query("SELECT * from peserta");
	// 		return $count;
	// 	}

	// 	public function getallpeserta($limit,$start){
	// 		// $data = $this->db->query("SELECT * from peserta");
	// 		// return $data;
	// 		$this->db->limit($limit);
	// 		//$this->db->where('id', $id);
	// 		$query = $this->db->get("peserta");
	// 		if ($query->num_rows() > 0) {
	// 		foreach ($query->result() as $row) {
	// 		$data[] = $row;
	// 		}

	// 		return $data;
	// 		}
	// 		return false;
	// 	}
	// }
	
	class M_Admin extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		// Count all record of table "contact_info" in database.
		public function getcountpeserta() {
			return $this->db->count_all("siswa");
		}

		// Fetch data according to per_page limit.
		public function getallpeserta($limit, $id) {
			// $this->db->limit($limit);
			//$this->db->where('id', $id);
			// $query = $this->db->get("peserta");
			$query=$this->db->query("SELECT * FROM siswa ORDER BY NAMA ASC limit $id,$limit ");
			if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
			$data[] = $row;
			}

			return $data;
			}
			return false;
		}

		public function getemail(){
			$query=$this->db->query("SELECT email from siswa");
			return $query;
		}


		public function getcountbymaestro(){
			$maestro=$this->db->query("SELECT MAESTRO,COUNT(MAESTRO) FROM siswa GROUP BY MAESTRO");
			return $maestro;
		}


		public function getkontak(){
			$kontak = $this->db->query("SELECT * FROM kontak");
			return $kontak;
		}
	}