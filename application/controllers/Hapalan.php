<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapalan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('m_hapalan');
        $this->load->model('keamanan');
        $this->keamanan->cek_login();
    }

	public function index(){
		$isi['judul']       =   'Form';
        $isi['subjudul']    =   'Tahfizh';
        $isi['konten']      =   'hapalan/tamp_inp-tah';
        $isi['bulan']       =   bulan_indo(date('d-m-Y', time()-60*60*24*5));
		$this->load->view('standar',$isi);
    }
    
    public function proses_input(){
        if($this->m_hapalan->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Tahfizh <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Tahfizh <strong> GAGAL !! </strong> </div>');
            redirect('hapalan');
        } 
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Tahfizh';
        $isi['konten']      =   'hapalan/tamp_cek-tah';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Tahfizh';
        $isi['konten']      =   'hapalan/tamp_get-tah';
        $isi['data']        =   $this->m_hapalan->get_data();
        $this->load->view('standar',$isi);
    }

    public function edit(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->from('user');
        $this->db->join('tahfizh','user.id = tahfizh.user','left');
        $this->db->where('tahfizh.id',$id);
        $e = $this->db->get()->row_array();
        $isi['judul']       =   'Tahfizh';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'hapalan/tamp_edi-tah';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }

    public function proses_edit(){
        if($this->m_hapalan->edit()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit Tahfizh <strong> SUKSES !!</strong></div>');
            redirect('hapalan/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit Tahfizh <strong> GAGAL !! </strong> </div>');
            redirect('hapalan/cek');
        } 
    }

    public function hapus(){
        $this->keamanan->cek_santri();
        if($this->m_hapalan->hapus() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Hapus Tahfizh <strong> GAGAL !! </strong></div>');
            redirect('hapalan/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Hapus Tahfizh <strong> SUKSES !!</strong></div>');
            redirect('hapalan/cek');
        }
    }


}
