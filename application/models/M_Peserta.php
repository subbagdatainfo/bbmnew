
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

		public function directory(){
			$dir=$this->db->query("SELECT distinct username from peserta group by email");
			return $dir;
		}
	}
