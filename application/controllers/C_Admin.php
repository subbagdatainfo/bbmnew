<?php
	class C_Admin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('M_Admin');
			$this->load->library('pagination');
		}
		public function admin(){
			
			if ($this->session->userdata('logged')['logged'] ) {
				
				$data['count']=$this->getcount();
				$config = array();
				$config["base_url"] = base_url() . "C_Admin/admin";
				$total_row = $this->M_Admin->getcountpeserta();
				$config["total_rows"] = $total_row;
				$config["per_page"] = 25;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row;
				$config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        		$config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
         
        		$config['cur_tag_open'] = '<li class="active"><span><b>';
       			$config['cur_tag_close'] = '</b></span></li>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';

				$this->pagination->initialize($config);
				// if($this->uri->segment(3)){
				// 	$page = ($this->uri->segment(3)) ;
				// }else{
				// 	$page = 1;
				// }
				$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        		$offset = $page == 0 ? 0 : ($page - 1) * $config["per_page"];
				$data['peserta'] = $this->M_Admin->getallpeserta($config["per_page"], $offset);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
				$data['page'] = $page==0? 1:$page;
				// View data according to array.
				$this->load->view('navigation');
				$this->load->view("v_admin", $data);
				// $this->load->view("image", $data);
			} else {
				$this->load->view('v_loginadmin');
			}
		}

		
		public function detailpeserta($nama,$jenis){
			$nama=urldecode($nama);
			

			$this->load->helper('directory');
			$dirname="data/" . $nama;
			//echo $dirname.'<br>';
			
			
	        $maps = directory_map('./data/'.$nama.'/');

	        $nama_file = $nama ."_" . $jenis;
	        //echo $nama_file.'<br>';
	        
	        $file_names = preg_grep('/'.$nama_file.'/', $maps);

	        foreach ($file_names as $key => $value) {
	            $file_name = $value;
	        }
	        //echo $file_name;
	        $file_path=realpath($dirname);
	        
	        // $file_name=$registration_no ."_" . strtolower($lampiran_name) . ".jpg"; 				 				 
	        $myfile=$dirname . "/" . $file_name;
	        echo $myfile;
	        ob_clean(); 		 
	        header('Content-Type: image/jpeg');
	        header('Content-Disposition: inline; filename="' . $file_name .'"');			 		 

	        if (file_exists($myfile)) {
	            header("Content-Length: " . filesize($myfile))	;	 
	            readfile($myfile);
	        } else {			 
	            $canvas = imagecreatetruecolor(100, 150);
	            $pink = imagecolorallocate($canvas, 255, 105, 180);
	            $white = imagecolorallocate($canvas, 255, 255, 255);
	            $green = imagecolorallocate($canvas, 132, 135, 28); 
	            $grey = imagecolorallocate($canvas, 128, 128, 128);
	            $black = imagecolorallocate($canvas, 0, 0, 0);
	            $font = 'arialn.ttf';		
	         
	            imagestring ( $canvas , 3 , 25 , 25 , "Not Found" , $grey );
	            imagestring ( $canvas , 3 , 30 , 30 , "Not Found" , $black );
	            //imagettftext($canvas, 20, 0, 25,  25, $grey,$font, 12);     
	            //imagettftext($canvas, 20, 0, 30,  30, $black,$font , 12);			 

	            imagejpeg($canvas);
	            imagedestroy($canvas);
	        }
	        exit;
		}

		public function maestro(){
			
			if ($this->session->userdata('logged')['logged'] ) {
				
				$data['count']=$this->getcount();
				$data['maestro']=$this->M_Admin->getcountbymaestro();
				// View data according to array.
				$this->load->view('navigation');
				$this->load->view("v_maestro", $data);
			} else {
				$this->load->view('v_loginadmin');
			}
		}

		public function kontak(){
			if ($this->session->userdata('logged')['logged'] ) {
				
				//$data['count']=$this->getcount();
				$data['kontak']=$this->M_Admin->getkontak();
				// View data according to array.
				$this->load->view('navigation');
				$this->load->view("v_kontak", $data);
			} else {
				$this->load->view('v_loginadmin');
			}
		}

		public function getcount(){
			$countpeserta = $this->M_Admin->getcountpeserta();
			// foreach ($countpeserta as $key ) {
			// 	$count = 
			// }
			return $countpeserta;
		}

		public function authadmin(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			if ($username == 'admin_bbm' && $password=='c1kur4y') {
				$sess_array = array('username' => $username, 'logged' => TRUE );
				$this->session->set_userdata('logged',$sess_array);
				redirect(base_url().'C_Admin/admin','refresh');
			} else {
				$this->session->set_flashdata('message', 'Username atau Password Salah');
				redirect(base_url().'C_Admin/loginadmin','refresh');
			}	
		}

		public function loginadmin(){
			// $this->load->view('template/header');
			$this->load->view('v_loginadmin');
		}

		public function adminlogout(){
			$this->session->sess_destroy();
			$this->loginadmin();
		}

		public function sendmail(){
			$this->load->view('navigation');
			$this->load->view('sendmail');
		}

		public function send(){
			$detail_email['message'] = $this->input->post('pesan');
			//echo 'message : '.$detail_email['message'].'<br>';
			$detail_email['subject'] = $this->input->post('subject');
			//echo 'subject : '.$detail_email['subject'].'<br>';
			if (NULL !== ($this->input->post('all'))) {
				$emailaddress=array();
				$email=$this->M_Admin->getemail();
				foreach ($email->result_array() as $key ) {
					$detail_email['address']=$key['email'];
					//echo 'address : '.$detail_email['address'].'<br>';
					$status=$this->sendtoaddress($detail_email);
				}
			} else {
				$detail_email['address']=$this->input->post('address');
				//echo 'address : '.$detail_email['address'].'<br>';
				$status=$this->sendtoaddress($detail_email);
			}
			if ($status) {
				$message1=$this->session->set_flashdata('message','Email berhasil dikirm');
				$message2=$this->session->set_flashdata('status', 'success');
				redirect(base_url().'C_Admin/sendmail','refresh');
			} else {
				$message1=$this->session->set_flashdata('message',show_error($this->email->print_debugger()));
				$message2=$this->session->set_flashdata('status', 'danger');
				redirect(base_url().'C_Admin/sendmail','refresh');
			}
		}

		public function sendtoaddress($detail_email){
			$this->load->library('email');
			
			$this->email->from('pembinaantenaga.kesenian', 'Panitia Seniman Mengajar');
			$this->email->to($detail_email['address']);
			$this->email->set_newline("\r\n");
			$this->email->subject($detail_email['subject']);
			$this->email->message($detail_email['message']);
			
			//$this->email->send();
			if ($this->email->send()) {
				return TRUE;
			} else {
				return FALSE;
			}
			
			
			// echo $this->email->print_debugger();
			// echo smtp_user();
		}


		public function download($nisn)
	    {
	    	$name = $this->M_Admin->getdirdownload($nisn);
	    	foreach ($name->result_array() as $key ) {
	    		$dirname='data/'.$key['NAMA'];
	    		$name=$key['NAMA'];
	    	}
	        // $dirmain="upload/data/" . $registration_no ;			
	        // $dirname=$dirmain . "/lampiran";
	        // $dirthumb=$dirmain . "/thumbnail" ;	
	    	echo $dirname;
	    	$this->zip->read_dir($dirname, FALSE);
	    	// $this->zip->clear_data();
	    	$archieve=$this->zip->archive('zip/'.$name.'.zip');
	    	$this->zip->clear_data();
	    	

	        $file_path=realpath($dirmain);
	        $file_zip=  $name . ".zip";

	        $myfile =  "zip/" .$file_zip;           
	        header("Content-Type: application/zip");
	        header("Content-Disposition: attachment; filename=$file_zip");
	        header("Content-Length: " . filesize($myfile));

	        readfile($myfile);
	        exit;		  		  
		}

		public function download_zip_all()
	    {
	        $namafile = date('Ymd').'_lampiran_semua_peserta.zip';
	        $path="data/";
	        
	        $this->zip->read_dir($path, FALSE);

	        $this->zip->download($namafile);
	    }

	}