<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Observasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_observasi');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
        $this->keamanan->cek_santri();
    }

	public function index(){
		$isi['judul']       =   'Form';
        $isi['subjudul']    =   'Observasi';
        $isi['konten']      =   'observasi/tamp_inp-obs';
        $isi['santri']      =   $this->m_observasi->santri();
		$this->load->view('standar',$isi);
    }
    
    public function proses_input(){
        $rt = $this->input->post('bulan');
        if($rt == 'pilih'){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Belum Mengatur Pilihan Bulan</div>');
            redirect('observasi');
        } else if($this->m_observasi->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Observasi <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Observasi <strong> GAGAL !! </strong> </div>');
            redirect('observasi');
        } 
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Observasi';
        $isi['konten']      =   'observasi/tamp_cek-obs';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Observasi';
        $isi['konten']      =   'observasi/tamp_get-obs';
        $isi['mene']        =   $this->m_observasi->menej();
        $isi['data']        =   $this->m_observasi->get();
        $this->load->view('standar',$isi);
    }

    public function edit(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        $e = $this->db->get('observasi')->row_array();
        $u = $this->db->get_where('user',['status'=>'menejemen']);
        $isi['judul']       =   'Observasi';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'observasi/tamp_edi-obs';
        $isi['data']        =   $e;
        $isi['username']    =   $u;
        $this->load->view('standar',$isi);
    }

    public function hapus(){
        $this->keamanan->cek_santri();
        if($this->m_observasi->hapus() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Hapus Observasi <strong> GAGAL !! </strong></div>');
            redirect('observasi/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Hapus Observasi <strong> SUKSES !!</strong></div>');
            redirect('observasi/cek');
        }
    }

    public function proses_edit(){
        $this->keamanan->cek_santri();
        if($this->m_observasi->edit() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit Observasi <strong> GAGAL !! </strong></div>');
            redirect('observasi/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit Observasi <strong> SUKSES !!</strong></div>');
            redirect('observasi/cek');
        }
    }
}
