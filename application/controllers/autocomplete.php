<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('siswa')->like('NAMA',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->NAMA,
				'NISN'	=>$row->NISN,
				'MAESTRO'	=>$row->MAESTRO

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
?>