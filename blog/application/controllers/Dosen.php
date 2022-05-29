<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model+ Bikin objek
        $this->load->model('dosen_model', 'dsn1');

        //Pake class model + Isi datanya
        $this->dsn1->id = 1;
        $this->dsn1->nidn = "112810501";
        $this->dsn1->nama =  "Sirojul Munir" ;
        $this->dsn1->gender =  "L" ;
        $this->dsn1->pendidikan ="S2";

        //Buat objek 2
        // Load model+ Bikin objek
        $this->load->model('dosen_model', 'dsn2');

        //Pake class model + Isi datanya
        $this->dsn2->id = 2;
        $this->dsn2->nidn = "0629077202";
        $this->dsn2->nama = "Siti Azizatun Wardah";
        $this->dsn2->gender = "P";
        $this->dsn2->pendidikan ="S1";

        //simpen objek kedalam array
        $list_dsn = [$this->dsn1, $this->dsn2];

        //siapin data untuk dikirim ke view
        $data["list_dsn"] = $list_dsn;

        //Untuk ngirim datanya + nampilinke viewnya
        //$this->load->view('header');
        //$this->load->view('dosen/index', $data);
        //$this->load->view('footer');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
 }

 public function create(){
     $data["judul"] = "Form Kelola Dosen";
     $this->load->view('layout/header');
     $this->load->view('layout/sidebar');
     $this->load->view('dosen/create', $data);
     $this->load->view('layout/footer');
 }
 public function save(){
     // Load model+ Bikin objek
     $this->load->model('dosen_model', 'dsn');

     $this->dsn->nidn = $this->input->post('nidn');
     $this->dsn->nama = $this->input->post('nama');
     $this->dsn->gender = $this->input->post('gender');
     $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
     $this->dsn->tgl_lahir= $this->input->post('tgl_lahir');
     $this->dsn->pendidikan = $this->input->post('pendidikan');

     $data['dsn'] = $this->dsn;
     $this->load->view('layout/header');
     $this->load->view('layout/sidebar');
     $this->load->view('dosen/view', $data);
     $this->load->view('layout/footer');

     
 }
}
