
<?php
	class M_Peserta extends CI_ModeL{
		//insert data pendaftar ke dalam database
		public function create($data_siswa){
			$result=$this->db->insert('siswa',$data_siswa);
			// $emailinsert=$data['email'];
			
			// $path = 'data/'.$data['username'];
			if ($result) {
				//$query=$this->db->query("insert INTO portofolio (email,jenis,path) VALUES('$emailinsert','profpict', $path),('$emailinsert','sks', $path),('$emailinsert','drh', $path),('$emailinsert','video', $path)");
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function create2($data_siswa){
			$result=$this->db->insert('siswa',$data_siswa);
			// $emailinsert=$data['email'];
			
			// $path = 'data/'.$data['username'];
			if ($result) {
				//$query=$this->db->query("insert INTO portofolio (email,jenis,path) VALUES('$emailinsert','profpict', $path),('$emailinsert','sks', $path),('$emailinsert','drh', $path),('$emailinsert','video', $path)");
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function contact($data_siswa){
			$result=$this->db->insert('kontak',$data_siswa);
			// $emailinsert=$data['email'];
			
			// $path = 'data/'.$data['username'];
			if ($result) {
				//$query=$this->db->query("insert INTO portofolio (email,jenis,path) VALUES('$emailinsert','profpict', $path),('$emailinsert','sks', $path),('$emailinsert','drh', $path),('$emailinsert','video', $path)");
				return TRUE;
			} else {
				return FALSE;
			}
			
		}
		//get konten pendaftar
		public function getdetailsiswa($nisn){
			// $detail = $this->db->query("SELECT * FROM `peserta`
			// 							left join portofolio
			// 							on peserta.email=portofolio.email
			// 							where peserta.email='$email_seniman'");
			$detail = $this->db->query("SELECT * from siswa where NISN='$nisn'");
			return $detail;
		}
		public function getkontensiswa($nisn,$jeniskonten){
			$konten = $this->db->query("SELECT * from konten where NISN= '$nisn' && JENIS='$jeniskonten' ");
			return $konten;
		}
		
		public function getfoto($nisn_siswa){
			$foto = $this->db->query("SELECT * from foto where NISN= '$nisn_siswa' ");
			return $foto;
		}

		public function getpiagam($nisn_siswa){
			$piagam = $this->db->query("SELECT * from piagam where NISN= '$nisn_siswa' ");
			return $piagam;
		}

		public function getvideo($nisn_siswa){
			$video = $this->db->query("SELECT * from video where NISN= '$nisn_siswa' ");
			return $video;
		}

		public function uploadkonten($konten){
			$inputkonten=$this->db->insert('konten', $konten);
			if ($inputkonten) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function uploadpiagam($konten){
			$inputkonten=$this->db->insert('piagam', $konten);
			if ($inputkonten) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function uploadfk($konten){
			$inputkonten=$this->db->insert('foto', $konten);
			if ($inputkonten) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function uploadvideo($konten){
			$inputkonten=$this->db->insert('video', $konten);
			if ($inputkonten) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function updatevideo($konten){
			$nisn=$konten['nisn'];
			$sequence=$konten['sequence_video'];
			$path = $konten['path_video'];
			$query= $this->db->query ("UPDATE video SET path_video = '$path', upload_video = current_timestamp where nisn = '$nisn' and sequence_video=$sequence");
			if ($query) {
				return TRUE;
			} else {
				return FALSE;
			}
			
		}

		public function directory(){
			$dir=$this->db->query("SELECT distinct username from peserta group by email");
			return $dir;
		}

		public function forgot($forgot){
			$nisn = $forgot['nisnsiswa'];
			$email = $forgot['email'];
			$result = $this->db->query("SELECT PASSWORD,NAMA FROM siswa WHERE NISN = '$nisn' AND EMAIl = '$email' ");
			if($result){
				return $result;
			}else {
				return FALSE;
			}
		}


		public function updatepiagam($konten){
			$nisn=$konten['nisn'];
			$sequence_piagam=$konten['sequence_piagam'];
			$path_piagam = $konten['path_piagam'];
			$query= $this->db->query ("UPDATE piagam SET path_piagam = '$path_piagam', upload_piagam = current_timestamp where nisn = '$nisn' and sequence_piagam=$sequence_piagam");
			if ($query) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function updatefk($konten){
			$nisn=$konten['nisn'];
			$sequence_foto=$konten['sequence_foto'];
			$path_foto = $konten['path_foto'];
			$query= $this->db->query ("UPDATE foto SET path_foto = '$path_foto', upload_foto = current_timestamp where nisn = '$nisn' and sequence_foto=$sequence_foto");
			if ($query) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		public function updatesurat($konten){
			$nisn=$konten['nisn'];
			$jenis=$konten['jenis'];
			$path = $konten['path'];
			$query= $this->db->query ("UPDATE konten SET PATH = '$path', upload_time = current_timestamp where nisn = '$nisn' and JENIS='$jenis'");
			if ($query) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
