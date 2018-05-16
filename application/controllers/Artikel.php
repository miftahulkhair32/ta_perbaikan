<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_artikel');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     => 'Form',
            'subjudul'  => 'Artikel',
            'konten'    => 'artikel/tamp_inp-art',
            'bulan'     => bulan_indo(date('d-m-Y', time()-60*60*24*5))
        ];
        $this->load->view('standar',$isi);
    }

    public function proses_input(){
        if($this->m_artikel->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Artikel <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Artikel <strong> GAGAL !! </strong> </div>');
            redirect('artikel');
        }
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Artikel';
        $isi['konten']      =   'artikel/tamp_cek-art';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Artikel';
        $isi['konten']      =   'artikel/tamp_get-art';
        $isi['data']        =   $this->m_artikel->get_data();
        $this->load->view('standar',$isi);
    }

    public function down(){
        $this->load->helper('download');
        $id     = $this->uri->segment(3);
        $p      = $this->db->get_where('artikel',['id'=>$id])->row_array();
        $data   = file_get_contents($p['artikel']); 
        force_download('/artikel/'.$p['artikel'],$data);
    }

    public function hapus(){
        $this->keamanan->cek_santri();
        if($this->m_artikel->hapus() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Hapus Artikel <strong> GAGAL !! </strong></div>');
            redirect('artikel/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Hapus Artikel <strong> SUKSES !!</strong></div>');
            redirect('artikel/cek');
        }
    }
}
