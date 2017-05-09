<?php 
	class M_System extends CI_Model{
		public function __construct(){
			$table = 'siswa';
			parent::__construct();
		} 
		public function auth_peserta($nisn,$password){
			$data = $this->db->query("SELECT nisn FROM siswa WHERE NISN='$nisn' and PASSWORD='$password'");
			// foreach ($auth->result() as $row)
			// 	{
			// 	        echo $this->encrypt->decode($row->password)."<br>";
				        
			// 	}
			// if($data->num_rows()>0){
				return $data;
			// }else{
			// 	return $data;
			// }
		}

	}