<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Tes extends CI_Controller {
    
        public function index()
        {
            $jenis[0]= 'fk';
            $jenis[2]= 'piagam';
            $jenis[3]= 'video';
            $seq=0;
            foreach ($jenis as $key ) {
                $datakonten=$this->M_Peserta->getkontensiswa($nisn,$jenis);
                $seq2=0;
                foreach ($datakonten as $result_array() => $keykonten) {
                    $kontenarray[$jenis][$seq2]=$keykonten['path'];
                    echo $kontenarray[$jenis][$seq2].'<br>';
                }
                $seq=$seq+1;
            }
        }
    
    }
    
    /* End of file Tes.php */
    /* Location: ./application/controllers/Tes.php */
    