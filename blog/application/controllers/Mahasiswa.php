<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model+ Bikin objek
        $this->load->model('mahasiswa_model', 'mhs1');

        //Pake class model + Isi datanya
        $this->mhs1->id = 1;
        $this->mhs1->nim = "010001";
        $this->mhs1->nama =  "Faiz Fikri" ;
        $this->mhs1->gender =  "L" ;
        $this->mhs1->ipk =3.85;

        //Buat objek 2
        // Load model+ Bikin objek
        $this->load->model('mahasiswa_model', 'mhs2');

        //Pake class model + Isi datanya
        $this->mhs2->id = 2;
        $this->mhs2->nim = "020001";
        $this->mhs2->nama = "Pandan Wangi";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk =3.35;

        //simpen objek kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2];

        //siapin data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        //Untuk ngirim datanya + nampilinke viewnya
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');


	}
}
