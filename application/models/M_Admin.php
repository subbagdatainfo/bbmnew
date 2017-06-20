
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

		public function getkonten($nisn,$jenis){
			$query=$this->db->query("SELECT * FROM konten where NISN = '$nisn' and JENIS = '$jenis' ");
			return $query;
		}


		public function getdirdownload($nisn){
			$query=$this->db->query("SELECT NAMA FROM siswa WHERE NISN = '$nisn'");
			return $query;
		}


		public function getstatusprofpict($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'profpict')");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'profpict')"];
			}
		}

		public function getstatussks($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'sks')");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'sks')"];
			}
		}

		public function getstatussr($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'sr')");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'sr')"];
			}
		}

		public function getstatusspot($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'spot')");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from konten where NISN = '$nisn' and JENIS = 'spot')"];
			}
		}

		public function getstatusfk($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from foto where NISN = '$nisn' )");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from foto where NISN = '$nisn' )"];
			}
		}

		public function getstatuspiagam($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from piagam where NISN = '$nisn' )");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from piagam where NISN = '$nisn' )"];
			}
		}

		public function getstatusvideo($nisn){
			$query = $this->db->query("SELECT EXISTS (SELECT NISN from video where NISN = '$nisn' )");
			foreach ($query->result_array() as $key ) {
				return $key["EXISTS (SELECT NISN from video where NISN = '$nisn' )"];
			}
		}
		public function getlink($limit, $id){
			$query = $this->db->query("SELECT  siswa.NISN, siswa.NAMA, video.path_video , video.upload_video FROM siswa JOIN video on siswa.NISN=video.nisn limit $id,$limit ");
			return $query;
		}

		public function getcountvideo() {
			return $this->db->count_all("video");
		}

		public function searchpeserta($nama){
			$query = $this->db->query("SELECT * FROM siswa WHERE NAMA like '%$nama%' ");
			if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
			$data[] = $row;
			}

			return $data;
			}
			return NULL;
		}


	}