<?php
	class C_Peserta extends CI_Controller{
		public $kontenarray = array();
        public $piagam=array();
        public $fk=array();
        public $video=array();
		public function __construct(){
			parent::__construct();
		}
		public function createsiswa(){
			$data_siswa = array();
			$e=array();
			$data_siswa['NISN'] = $this->input->post('nisn');
			$data_siswa['NAMA'] = $this->input->post('nama_siswa');
			$data_siswa['ALAMAT']= $this->input->post('alamat');
			$data_siswa['PASSWORD'] = $this->input->post('password');
			$data_siswa['NAMA_IBU'] = $this->input->post('nama_ibu');
			$data_siswa['TTL'] = $this->input->post('ttl');
			$data_siswa['SEKOLAH'] = $this->input->post('sekolah');
			$data_siswa['ALAMAT_SEKOLAH']=$this->input->post('alamat_sekolah');
			$data_siswa['email'] = $this->input->post('email');
			$data_siswa['NO_TELP'] = $this->input->post('no_telpon');
			$data_siswa['MAESTRO'] = $this->input->post('maestro');
			//insert data to database
			$result=$this->M_Peserta->create($data_siswa);
			$e = $this->db->error(); // Gets the last error that has occured
			$num = $e['code'];
			if ($num==1062) {
				$message1=$this->session->set_flashdata('message','NISN Sudah Terdaftar');
				$message2=$this->session->set_flashdata('status', 'danger');
			} elseif ($result) {
				$message1=$this->session->set_flashdata('message','Pendaftaran Anda Berhasil');
				$message2=$this->session->set_flashdata('status', 'success');
				mkdir('data/'.$data_siswa['NAMA'],0775);
			}
				
			

			// if ($result) {
			// 	$message1=$this->session->set_flashdata('message','Pendaftaran Anda Berhasil');
			// 	$message2=$this->session->set_flashdata('status', 'success');
			// 	mkdir('data/'.$data['NAMA'],0775);
			// } //else {
			// 	$message1=$this->session->set_flashdata('message','Email Yang Anda Masukan Sudah Terdaftar');
			// 	$message2=$this->session->set_flashdata('status', 'danger');
			// }
			// //redirect to landing page with a message
			redirect(base_url().'Page/pendaftaran','refresh');

		}
		function upload() {
			$data = array();
			//$id_siswa = $this->session->userdata('id_siswa');
			$this->m_Peserta->id_peserta = $id_peserta;
			$jenis = $this->input->post('jenis');
			if ($jenis != 'youtube'){
				$config['file_name'] =  $id_siswa.'_'. $jenis.'_'.$time_upload;
	            $config['upload_path'] = './assets/'.$data['nama_seniman'];
	            $config['allowed_types'] = 'pdf|jpg';
	            $this->upload->initialize($config);
	            if ($this->upload->do_upload())
	            {
	            	$data_file = $this->upload->data();
	            	$file_ext = $data_file['file_ext'];
	            	$this->Konten->jenis = $jenis;
	            	$this->Konten->url = $id_siswa.'_'.$jenis.''.$file_ext; 
	            }
				
			} else {
				$this->Konten->jenis = 'youtube';
				$this->Konten->url = $this->input->post('link');	
	        }
	        $this->m_Peserta->save(); 
	        redirect('c_Peserta/detail');
		}

		/*-----------------------------------------------------------------------------------------------*/
		//fungsi untuk mendapatkan detail siswa dari tabel siswa dan tabel konten
		//data siswa dan data konten siswa di masukan kedalam variable $kontenarray 
		//tiap konten siswa merupakan array tersendiri yang dimasukan ke dalam array $kontenarray
		//hal ini dilakukan karena setiap siswa bisa memiliki lebih dari 1 konten dalam 1 jenis konten
		/*-------------------------------------------------------------------------------------------------*/
		public function detail(){
			/*------------------------------------------------------------------------------*/
			/*memeriksa apakah user sudha memiliki session untuk melihat page ini 	  		*/
			/*jika user tidak memiliki session maka akan dilaihkan ke page login 	  		*/
			/*jika user memiliki session maka user akan masuk ke dalam page detail siswa 	*/
			/*------------------------------------------------------------------------------*/
			if ($this->session->userdata('logged')['logged'] ) {
				//iinisialisasi array yang akan memuat data siswa
                // $kontenarray = array();
                // $piagam=array();
                // $fk=array();
                // $video=array();

                //inisialisasi konten
                $kontenarray['profpict']=NULL;
                $kontenarray['sr']=NULL;
                $kontenarray['drh']=NULL;
                $kontenarray['sks']=NULL;
                $kontenarray['spot']=NULL;
                $kontenarray['piagam']=NULL;
                $kontenarray['fk']=NULL;
                $kontenarray['video']=NULL;
                $kontenarray['essai']=NULL;

                //query yang dilakukan terhadap tabel konten dan tabel siswa yang dilakukan melalui model getdetailsiswa dan getkontensiswa
                $nisn_siswa=$this->session->userdata('nisn');
                $data=$this->M_Peserta->getdetailsiswa($nisn_siswa);
                //$jeniskonten='fk';
                //$datakonten=$this->M_Peserta->getkontensiswa($nisn_siswa,$jeniskonten);

                /*-------------memasukan data siswa dan data konten yang didapat dari query ke dalam session data-----------*/

                //memasukan data siswa ke dalam session
                foreach ($data->result_array() as $key) {
                    $this->session->set_userdata('nisn', $key['NISN']);
                    $this->session->set_userdata('nama_siswa', $key['NAMA']);
                    $this->session->set_userdata('alamat', $key['ALAMAT']);
                    
                    $this->session->set_userdata('sekolah', $key['SEKOLAH']);
                    $this->session->set_userdata('alamat_sekolah', $key['ALAMAT_SEKOLAH']);
                    $this->session->set_userdata('email', $key['EMAIL']);
                    $this->session->set_userdata('no_telpon', $key['NO_TELP']);
                    $this->session->set_userdata('maestro', $key['MAESTRO']);
                    $this->session->set_userdata('password', $key['PASSWORD']);

                }


                //memasukan data surat siswa ke dalam session
                $jeniskonten=array();
                $jeniskonten[0]='profpict';
                $jeniskonten[1]='sr';
                $jeniskonten[2]='sks';
                $jeniskonten[3]='spot';
                $jeniskonten[4]='essai'	;
	            
	            foreach ($jeniskonten as $key ) {
	            	//echo $key."<br>";
	            	// echo $nisn_siswa.'<br>';
	                $datakonten=$this->M_Peserta->getkontensiswa($nisn_siswa,$key);
	                // echo $datakonten.'<br>';
	                foreach ($datakonten->result_array() as  $keykonten) {
	                	$kontenarray[$key]=$keykonten['PATH'];
	                	 //echo $kontenarray;
	                    //$kontenarray[$key][$keykonten['SEQUENCE']]=$keykonten['PATH'];
	                    // /echo $kontenarray[$key][$keykonten['SEQUENCE']].'<br>';
	                    
	                }
	                
	            }
	            $piagamkey = $this->M_Peserta->getpiagam($nisn_siswa);
	            foreach ($piagamkey->result_array() as $keypiagam ) {
	            	$piagam[$keypiagam['sequence_piagam']]['path_piagam'] = $keypiagam['path_piagam'];
	            }
	            $piagam['row']=$piagamkey->num_rows() ;
	            $kontenarray['piagam']=$piagam;


	            $fkkey = $this->M_Peserta->getfoto($nisn_siswa);
	            foreach ($fkkey->result_array() as $keyfk ) {
	            	$fk[$keyfk['sequence_foto']]['path_foto'] = $keyfk['path_foto'];
	            }
	            $fk['row']=$fkkey->num_rows() ;
	            $kontenarray['fk']=$fk;


	            $videokey = $this->M_Peserta->getvideo($nisn_siswa);
	            foreach ($videokey->result_array() as $keyvideo ) {
	            	$video[$keyvideo['sequence_video']]['path_video'] = $keyvideo['path_video'];
	            }
	            $video['row']=$videokey->num_rows() ;
	            $kontenarray['video']=$video;

	            //$kontenarray=$piagamrow;
                // foreach ($datakonten->result_array() as $keykonten ) {
                //     if ($keykonten['jenis']=='profpict') {
                //         $kontenarray['profpict']=$keykonten['PATH'];
                //         $this->session->set_userdata('profpict', $kontenarray['profpict']);
                //     }
                //     if ($keykonten['jenis']=='sr') {
                    
                //         $kontenarray['sr']=$keykonten['PATH'];
                //         $this->session->set_userdata('sr', $kontenarray['sr']);
                //     }
                //     if ($keykonten['jenis']=='sks') {
                //         $kontenarray['sks']=$keykonten['PATH'];
                //         $this->session->set_userdata('sks', $kontenarray['sks']);
                //     }
                //     if ($keykonten['jenis']=='drh') {
                //         $kontenarray['drh']=$keykonten['PATH'];
                //         $this->session->userdata('drh', $kontenarray['drh']);
                //     }
                //     if ($keykonten['jenis']=='spot') {
                //         $kontenarray['spot']=$keykonten['PATH'];
                //     }
                //     if ($keykonten['jenis']=='piagam') {
                //     	$piagam[$keykonten['SEQUENCE']] = $keykonten['PATH'];
                //         $kontenarray['piagam']=$piagam;
                //     }
                //     if ($keykonten['jenis']=='fk') {
                //     	$fk[$keykonten[$SEQUENCE]] = $keykonten['PATH'];
                //         $kontenarray['fk']=$fk;
                //     }
                //     if ($keykonten['jenis']=='video') {
                //     	$video[$keykonten[$SEQUENCE]] = $keykonten['PATH'];
                //         $kontenarray['video']=$video;
                //     }
                // }

                $this->load->view('detail', $kontenarray);
                    //$this->loadform($kontenarray);
            } else {
                redirect(base_url().'Page/login','refresh');
            }
			 	 	
			
		}
		public function loadform($kontenarray){
			$this->load->view('forms', $kontenarray);
		}
		// public function login(){
		// 	redirect(base_url().'Page/login','refresh');

		// }

		public function auth(){
			// $data_peserta = array();
			$nisn=$this->input->post('nisn');
			$password=$this->input->post('password');
			$auth=$this->M_System->auth_peserta($nisn,$password);
			if ($auth->num_rows() > 0) {
				$sess_array = array('nisn' => $nisn, 'logged' => TRUE );
				$this->session->set_userdata('logged',$sess_array);
				foreach ($auth->result_array() as $key ) {
					$this->session->set_userdata('nisn', $key['nisn']);
				}
				redirect(base_url().'C_Peserta/detail','refresh');
			} else {
				$this->session->set_flashdata('message', 'Data yang dimasukan tidak sesuai');
				redirect(base_url().'Page/login','refresh');
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url(),'refresh');
		}

		public function update (){
			$this->load->view('v_update');
		}

		public function uploadkonten($konten){
			// $konten['email'] = $this->session->userdata('email');
			// $konten['jenis'] = $this->input->post('jenis');

			$pathdirectory='data/'.$this->session->userdata('nama_siswa');
			$namaupload=trim($this->session->userdata('nama_siswa'));
			$config['file_name'] =  $namaupload.'_'. $konten;
	        $config['upload_path'] = $pathdirectory;
	        $config['allowed_types'] = 'pdf|jpg|doc|docx';
	        $config['overwrite'] = TRUE;
	        $config['remove_spaces']=FALSE;

	        $this->upload->initialize($config);
	        if ($this->upload->do_upload()){
	            	$data_file = $this->upload->data();
	            	$file_ext = $data_file['file_ext'];
	            	$pathdir=$config['upload_path'].'/'.$config['file_name'].$file_ext;
	            	return $pathdir;
	   //          $result=$this->M_Peserta->uploadkonten($konten);
	            
				// if ($result) {
				// 	$message1=$this->session->set_flashdata('message','Upload Berhasil');
				// 	$message2=$this->session->set_flashdata('status', 'success');
				// 	redirect(base_url().'C_Peserta/detail','refresh');
				// } else {
				// 	$message1=$this->session->set_flashdata('message','Gagal Mengakses Database');
				// 	$message2=$this->session->set_flashdata('status', 'danger');
				// 	redirect(base_url().'C_Peserta/detail','refresh');
				// } 
	        } else{
	   //      	$message1=$this->session->set_flashdata('message','Upload Gagal');
				// $message2=$this->session->set_flashdata('status', 'danger'); 
	   //      	redirect(base_url().'C_Peserta/detail','refresh');
	        	return NULL;
	    	}
		}

		public function cretaedirectory(){
			$dirmake = $this->M_Peserta->directory();
			foreach ($dirmake->result_array() as $key) {
				mkdir('data/'.$key['username'],0775);
			}
		}

		function get_nisn($Nisn){
			$data=array();
			$json = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdKebudayaan.svc/siswa/nisn='.$Nisn);
			$data['siswa'] = json_decode($json,true);
			return $data['siswa'];
		}

		function get_npsn($Npsn) {
			$data = array();
			$json = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdss.svc/sekolah/npsn='.$Npsn);
			$data['sekolah'] = json_decode($json, true);
			return $data['sekolah'];
		}

		public function view_daftar(){
			$siswa=array();
			$sekolah=array();
			//get data dari form
			$nisn=$this->input->post('nisn');
			//$siswa=$this->get_nisn($nisn);
			if (NULL !== $siswa=$this->get_nisn($nisn)) {
				// $nisn=$this->input->post('nisn');
				// echo $siswa['username'];
				//get data siswa berdasarkan nisn
				// $siswa=$this->get_nisn($nisn);
				// $siswa['username']=$this->input->post('username');
				$siswa['password']=$this->input->post('password');
				$siswa['email']=$this->input->post('email');
				$siswa['no_telpon']=$this->input->post('no_telpon');
				$siswa['tanggal_lahir']=$this->get_tgl($siswa['tanggal_lahir']);
				$siswa['maestro']=$this->input->post('maestro');
				//get data sekolah berdasarkan nisn
				$sekolah=$this->get_npsn($siswa['npsn']);
				$data['siswa']=$siswa;
				$data['sekolah']=$sekolah;
				//$this->load->view('template/header');
				$this->load->view('confirm', $data);
				$this->load->view('template/footer');
			} else {
				$message1=$this->session->set_flashdata('message','NISN yang Anda masukan tidak terdaftar di DAPODIK, silakan verifikasi NISN Anda');
				$message2=$this->session->set_flashdata('status', 'danger');
				redirect(base_url().'Page/pendaftaran','refresh');
			}
		}

		function get_tgl($tgl){
			date_default_timezone_set( 'Asia/Jakarta' );
			preg_match( '/([\d]{9})/', $tgl, $matches ); 
			$tgl = date( 'd-m-Y', $matches[0]);

			return $tgl;
		}

		function batal(){
			
			unset( $siswa );
			unset( $sekolah );
			redirect(base_url().'Page/pendaftaran','refresh');
		}

		function daftar2(){
			$data_siswa = array();
			$e=array();
			$data_siswa['NISN'] = $this->input->post('nisn');
			$data_siswa['NAMA'] = $this->input->post('nama_siswa');
			$data_siswa['ALAMAT']= $this->input->post('alamat');
			$data_siswa['PASSWORD'] = $this->input->post('password');
			$data_siswa['SEKOLAH'] = $this->input->post('sekolah');
			$data_siswa['ALAMAT_SEKOLAH']=$this->input->post('alamat_sekolah');
			$data_siswa['email'] = $this->input->post('email');
			$data_siswa['NO_TELP'] = $this->input->post('no_telpon');
			$data_siswa['MAESTRO'] = $this->input->post('maestro');

			//insert data to database
			$result=$this->M_Peserta->create2($data_siswa);
			$e = $this->db->error(); // Gets the last error that has occured
			$num = $e['code'];
			if ($num==1062) {
				$message1=$this->session->set_flashdata('message','NISN Sudah Terdaftar');
				$message2=$this->session->set_flashdata('status', 'danger');
			} elseif ($result) {
				$message1=$this->session->set_flashdata('message','Pendaftaran Anda Berhasil');
				$message2=$this->session->set_flashdata('status', 'success');

				$this->email_confirm($data_siswa['email']);
				mkdir('data/'.$data_siswa['NAMA'],0775);
				
			}
				
			

			// if ($result) {
			// 	$message1=$this->session->set_flashdata('message','Pendaftaran Anda Berhasil');
			// 	$message2=$this->session->set_flashdata('status', 'success');
			// 	mkdir('data/'.$data['NAMA'],0775);
			// } //else {
			// 	$message1=$this->session->set_flashdata('message','Email Yang Anda Masukan Sudah Terdaftar');
			// 	$message2=$this->session->set_flashdata('status', 'danger');
			// }
			// //redirect to landing page with a message
			redirect(base_url().'Page/pendaftaran','refresh');
		}

		function contact(){
			$data_siswa['email_contact'] = $this->input->post('email_contact');
			$data_siswa['nama_contact'] = $this->input->post('nama_contact');
			$data_siswa['message']= $this->input->post('message');
			$data_siswa['telp_contact'] = $this->input->post('telp_contact');
			$result=$this->M_Peserta->contact($data_siswa);
			if ($result) {
				$message1=$this->session->set_flashdata('message','Pertanyaan berhasil dikirim');
				$message2=$this->session->set_flashdata('status', 'success');
				
			} else {
				$message1=$this->session->set_flashdata('message','Pertanyaan gagal dikirim');
				$message2=$this->session->set_flashdata('status', 'danger');
			}
			// //redirect to landing page with a message
			redirect(base_url().'Page/contact','refresh');
		}

		function email_confirm($alamat_email){
			$this->load->library('email');
			
			$this->email->from('bbm', 'Panitia BBM 2017');
			$this->email->to($alamat_email);
			$this->email->set_newline("\r\n");
			$this->email->subject("Selamat Anda Telah Berhasil Mendaftar");
			$this->email->message("Selamat Anda telah berhasil mendaftar untuk jadi calon peserta BBM 2017. Silakan login dengan menggunakan NISN dan Password yang telah Anda daftarkan untuk melengkapi persyaratan selanjut nya.Setelah Anda login Anda di harapkan untuk mengupload :
				1. Surat Keterangan Sehat
				2. Surat Persetujuan Dari Orang Tua
				3. Surat Rekomendasi dari Kepala Sekolah
				4. Piagam atau Sertifikat penghargaan di bidang seni
				5. foto karya Anda
				6. link Video Youtube yang menggambarkan Karya Anda (harap deskripsikan dengan jelas mana diri Anda pada video tersebut)
				");
			$this->email->send();
			//$this->email->send();
			// if ($this->email->send()) {
			// 	return TRUE;
			// } else {
			// 	return FALSE;
			// }
		}

		function addsurat(){
			$konten['nisn'] = $this->session->userdata('nisn');
			$konten['jenis'] = $this->input->post('jenis');
			$konten['path']=$this->uploadkonten($konten['jenis']);
			//$konten['upload_time']=date("d-m-Y H:i:s");
			if (NULL !== $konten['path']) {
					// $data_file = $this->upload->data();
	    //         	$file_ext = $data_file['file_ext'];
	            	// $konten['path']=$config['upload_path'].'/'.$config['file_name'].$file_ext;
				if (NULL == $this->input->post('update')) {
					$result=$this->M_Peserta->uploadkonten($konten);
	            
					if ($result) {
						$message1=$this->session->set_flashdata('message','Upload Berhasil');
						$message2=$this->session->set_flashdata('status', 'success');
						redirect(base_url().'C_Peserta/detail','refresh');
					} else {
						$message1=$this->session->set_flashdata('message','Gagal Mengakses Database');
						$message2=$this->session->set_flashdata('status', 'danger');

						redirect(base_url().'C_Peserta/detail','refresh');
					}
				} else{
					$message1=$this->session->set_flashdata('message','Upload Berhasil');
					$message2=$this->session->set_flashdata('status', 'success');
					redirect(base_url().'C_Peserta/detail','refresh');
				}
				
				
			} else {
				$message1=$this->session->set_flashdata('message','Upload Gagal');
				$message2=$this->session->set_flashdata('status', 'danger'); 
	        	redirect(base_url().'C_Peserta/detail','refresh');
			}
			
		}

		function addpiagam(){
			$konten['nisn'] = $this->session->userdata('nisn');
			$name = "piagam-".$this->input->post('piagamrow');
			$konten['path_piagam']=$this->uploadkonten($name);
			$konten['sequence_piagam'] = $this->input->post('piagamrow');
			// echo $konten['path_piagam']."<br>";
			// echo $konten['sequence_piagam'];
			//$konten['upload_time']=date("d-m-Y H:i:s");
			if (NULL !== $konten['path_piagam']) {
					// $data_file = $this->upload->data();
	    //         	$file_ext = $data_file['file_ext'];
	            	// $konten['path']=$config['upload_path'].'/'.$config['file_name'].$file_ext;
				if (NULL == $this->input->post('update')) {
					$result=$this->M_Peserta->uploadpiagam($konten);
	            
					if ($result) {
						$message1=$this->session->set_flashdata('message','Upload Berhasil');
						$message2=$this->session->set_flashdata('status', 'success');
						redirect(base_url().'C_Peserta/detail','refresh');
					} else {
						$message1=$this->session->set_flashdata('message','Gagal Mengakses Database');
						$message2=$this->session->set_flashdata('status', 'danger');

						redirect(base_url().'C_Peserta/detail','refresh');
					}
				} else{
					//$result=$this->M_Peserta->updatepiagam($konten);
					$message1=$this->session->set_flashdata('message','Upload Berhasil');
					$message2=$this->session->set_flashdata('status', 'success');
					redirect(base_url().'C_Peserta/detail','refresh');
				}
				
				
			} else {
				$message1=$this->session->set_flashdata('message','Upload Gagal');
				$message2=$this->session->set_flashdata('status', 'danger'); 
	        	redirect(base_url().'C_Peserta/detail','refresh');
			}
			
		}

		function addfk(){
			$konten['nisn'] = $this->session->userdata('nisn');
			$name = "fk-".$this->input->post('fkrow');
			$konten['path_foto']=$this->uploadkonten($name);
			$konten['sequence_foto'] = $this->input->post('fkrow');
			// echo $konten['path_piagam']."<br>";
			// echo $konten['sequence_piagam'];
			//$konten['upload_time']=date("d-m-Y H:i:s");
			if (NULL !== $konten['path_foto']) {
					// $data_file = $this->upload->data();
	    //         	$file_ext = $data_file['file_ext'];
	            	// $konten['path']=$config['upload_path'].'/'.$config['file_name'].$file_ext;
				if (NULL == $this->input->post('update')) {
					$result=$this->M_Peserta->uploadfk($konten);
	            
					if ($result) {
						$message1=$this->session->set_flashdata('message','Upload Berhasil');
						$message2=$this->session->set_flashdata('status', 'success');
						redirect(base_url().'C_Peserta/detail','refresh');
					} else {
						$message1=$this->session->set_flashdata('message','Gagal Mengakses Database');
						$message2=$this->session->set_flashdata('status', 'danger');

						redirect(base_url().'C_Peserta/detail','refresh');
					}
				} else{
					//$result=$this->M_Peserta->updatepiagam($konten);
					$message1=$this->session->set_flashdata('message','Upload Berhasil');
					$message2=$this->session->set_flashdata('status', 'success');
					redirect(base_url().'C_Peserta/detail','refresh');
				}
				
				
			} else {
				$message1=$this->session->set_flashdata('message','Upload Gagal');
				$message2=$this->session->set_flashdata('status', 'danger'); 
	        	redirect(base_url().'C_Peserta/detail','refresh');
			}
			
		}

		function addvideo(){
			$konten['nisn'] = $this->session->userdata('nisn');
			//$name = "fk-".$this->input->post('fkrow');
			$konten['path_video']=$this->input->post('link');
			$konten['sequence_video'] = $this->input->post('videorow');
			// echo $konten['path_piagam']."<br>";
			// echo $konten['sequence_piagam'];
			//$konten['upload_time']=date("d-m-Y H:i:s");
				if (NULL == $this->input->post('update')) {
					$result=$this->M_Peserta->uploadvideo($konten);
	            
					if ($result) {
						$message1=$this->session->set_flashdata('message','Tautan berhasil ditambahkan');
						$message2=$this->session->set_flashdata('status', 'success');
						redirect(base_url().'C_Peserta/detail','refresh');
					} else {
						$message1=$this->session->set_flashdata('message','Gagal Mengakses Database');
						$message2=$this->session->set_flashdata('status', 'danger');

						redirect(base_url().'C_Peserta/detail','refresh');
					}
				} else{
					$result=$this->M_Peserta->updatevideo($konten);
					$message1=$this->session->set_flashdata('message','Tautan berhasil ditambahkan');
					$message2=$this->session->set_flashdata('status', 'success');
					redirect(base_url().'C_Peserta/detail','refresh');
				}	
			
		}

		function forgotpassword(){
			$forgot['nisnsiswa'] = $this->input->post('nisn');
			$forgot['email'] = $this->input->post('email');
			$result=$this->M_Peserta->forgot($forgot);
			foreach ($result->result_array() as $key ) {
				$password= $key['PASSWORD'];
				$nama=$key['NAMA'];
			}

			$config['mailtype'] = 'html';
			$this->email->from('bbm', 'Panitia BBM 2017');
			$this->email->to($forgot['email']);
			$this->email->set_newline("\r\n");
			$this->email->subject("Password Recovery ");
			$this->email->message("Salam ".$nama."<br>Berikut adalah Password Anda : ".$password);
			//$this->email->send();
			//$this->email->send();
			if ($this->email->send()) {
				$message1=$this->session->set_flashdata('message','Pasword Anda telah dikirimakan ke email Anda, silakan cek email Anda');
				$message2=$this->session->set_flashdata('status', 'success');
				redirect(base_url().'Page/login','refresh');
			} else {
				$message1=$this->session->set_flashdata('message','Data yang dimasukan tidak sesuai');
				$message2=$this->session->set_flashdata('status', 'danger');
				redirect(base_url().'Page/forgot','refresh');
			}

		}

		

		
	}