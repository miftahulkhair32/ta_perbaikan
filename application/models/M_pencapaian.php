<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pencapaian extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $dataPencapaian = [
            'user'      =>  $this->input->post('user'),
            'bulan'     =>  $this->input->post('bulan'),
            'total'     =>  $this->input->post('total_nilai'),
            'na1'       =>  $this->input->post('na1'),
            'na2'       =>  $this->input->post('na2'),
            'na3'       =>  $this->input->post('na3'),
            'na4'       =>  $this->input->post('na4'),
            'b1'        =>  $this->input->post('b1'),
            'nb1'       =>  $this->input->post('nb1'),
            'c1'        =>  $this->input->post('c1'),
            'nc1'       =>  $this->input->post('nc1'),
            'd1a'       =>  $this->input->post('d1a'),
            'nd1a'      =>  $this->input->post('nd1a'),
            'd2a'       =>  $this->input->post('d2a'),
            'nd2a'      =>  $this->input->post('nd2a'),
            'd2b'       =>  $this->input->post('d2b'),
            'nd2b'      =>  $this->input->post('nd2b'),
            'd2c'       =>  $this->input->post('d2c'),
            'nd2c'      =>  $this->input->post('nd2c'),
            'd2d'       =>  $this->input->post('d2d'),
            'nd2d'      =>  $this->input->post('nd2d'),
            'd3a'       =>  $this->input->post('d3a'),
            'nd3a'      =>  $this->input->post('nd3a'),
            'd3b'       =>  $this->input->post('d3b'),
            'nd3b'      =>  $this->input->post('nd3b'),
            'd3c'       =>  $this->input->post('d3c'),
            'nd3c'      =>  $this->input->post('nd3c'),
            'd3d'       =>  $this->input->post('d3d'),
            'nd3d'      =>  $this->input->post('nd3d'),
            'd3e'       =>  $this->input->post('d3e'),
            'nd3e'      =>  $this->input->post('nd3e'),
            'd3f'       =>  $this->input->post('d3f'),
            'nd3f'      =>  $this->input->post('nd3f'),
            'd4a'       =>  $this->input->post('d4a'),
            'nd4a'      =>  $this->input->post('nd4a'),
            'd4b'       =>  $this->input->post('d4b'),
            'nd4b'      =>  $this->input->post('nd4b'),
            'd5a'       =>  $this->input->post('d5a'),
            'nd5a'      =>  $this->input->post('nd5a'),
            'd5b'       =>  $this->input->post('d5b'),
            
        ];
        $op = ['user'=>$dataPencapaian['user'],'bulan'=>$dataPencapaian['bulan']];
        if($this->db->get_where('pencapaian',$op)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Pencapaian Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Masuk Bagian Edit </div>');
            redirect('home');
        }
        return $this->db->insert('pencapaian',$dataPencapaian);
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['bulan'=>$dc,'status'=>'santri'];
        $this->db->select('pencapaian.id as id,user.nama as nama,pencapaian.bulan as bulan,pencapaian.total as total');
        $this->db->from('pencapaian');
        $this->db->join('user','user.id = pencapaian.user','left');
        $this->db->where($ty);
        $yu = $this->db->get();
        return $yu;
    }

    public function edit(){
        $id  = $this->input->post('id');
        $tot = $this->input->post('total');
        $this->db->set('total',$tot);
        $this->db->where('id',$id);
        return $this->db->update('pencapaian');
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('pencapaian');
    }
}