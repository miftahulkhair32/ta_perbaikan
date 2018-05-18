<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencapaian extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
        $this->load->model('keamanan');
        $this->load->model('m_pencapaian');
        $this->keamanan->cek_login();
    }

	public function index(){
        $isi = [
            'judul'     => 'Form',
            'subjudul'  => 'Pencapaian Target Santri',
            'konten'    => 'pencapaian/tamp_inp-pen',
            'bulan'     =>  bulan_indo(date('d-m-Y', time()-60*60*24*5))
        ];
        $this->load->view('standar',$isi);
    }

    public function proses_input(){
        if($this->m_pencapaian->input()){
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Inputan Pencapaian <strong> SUKSES !!</strong></div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Input Pencapaian <strong> GAGAL !! </strong> </div>');
            redirect('pencapaian');
        }
    }

    public function cek(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pencapaian';
        $isi['konten']      =   'pencapaian/tamp_cek-pen';
        $this->load->view('standar',$isi);
    }

    public function get(){
        $this->keamanan->cek_santri();
        $isi['judul']       =   'From';
        $isi['subjudul']    =   'Pencapaian';
        $isi['konten']      =   'pencapaian/tamp_get-pen';
        $isi['data']        =   $this->m_pencapaian->get_data();
        $this->load->view('standar',$isi);
    }

    public function edit(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->from('user');
        $this->db->join('pencapaian','user.id = pencapaian.user','left');
        $this->db->where('pencapaian.id',$id);
        $e = $this->db->get()->row_array();
        $isi['judul']       =   'Pencapaian';
        $isi['subjudul']    =   'Edit';
        $isi['konten']      =   'pencapaian/tamp_edi-pen';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }

    public function proses_edit(){
        $this->keamanan->cek_santri();
        if($this->m_pencapaian->edit() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Edit Pencapaian <strong> GAGAL !! </strong></div>');
            redirect('pencapaian/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Edit Pencapaian <strong> SUKSES !!</strong></div>');
            redirect('pencapaian/cek');
        }
    }

    public function hapus(){
        $this->keamanan->cek_santri();
        if($this->m_pencapaian->hapus() == FALSE){
            $this->session->set_flashdata('info','<div class="alert alert-danger"><i class="ace icon fa fa-times"></i> Hapus Pencapaian <strong> GAGAL !! </strong></div>');
            redirect('pencapaian/cek');
        } else {
            $this->session->set_flashdata('info','<div class="alert alert-block alert-success"><i class="ace icon fa fa-check"></i> Hapus Pencapaian <strong> SUKSES !!</strong></div>');
            redirect('pencapaian/cek');
        }
    }

    public function lihat(){
        $this->keamanan->cek_santri();
        $id = $this->uri->segment(3);
        $this->db->from('user');
        $this->db->join('pencapaian','user.id = pencapaian.user','left');
        $this->db->where('pencapaian.id',$id);
        $e = $this->db->get()->row_array();
        $isi['judul']       =   'Pencapaian';
        $isi['subjudul']    =   'Lihat';
        $isi['konten']      =   'pencapaian/tamp_lih-pen';
        $isi['data']        =   $e;
        $this->load->view('standar',$isi);
    }
}
