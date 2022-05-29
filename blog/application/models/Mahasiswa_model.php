<?php

//Buat Class
class Mahasiswa_model extends CI_Model{
    //Buat Struktur Datanya
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //Buat Method
    public function predikat(){
        // (Kondisi) ? True : False
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Bagus";
        return $predikat;
        
        
    }
}
?>