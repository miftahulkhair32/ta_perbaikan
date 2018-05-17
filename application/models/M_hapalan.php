<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hapalan extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function input(){
        $dataHapalan = [
            'user'      =>  $this->input->post('user'),
            'bulan'     =>  $this->input->post('bulan'),
            'halaman'   =>  $this->input->post('halam'),
            'total'     =>  $this->input->post('total'),
            'tgl1'      =>  $this->input->post('tgl1'),
            'salah1'    =>  $this->input->post('kesalahan1'),
            'tajw1'     =>  $this->input->post('kelancaran1'),
            'makna1'    =>  $this->input->post('makna1'),
            'tgl2'      =>  $this->input->post('tgl2'),
            'salah2'    =>  $this->input->post('kesalahan2'),
            'tajw2'     =>  $this->input->post('kelancaran2'),
            'makna2'    =>  $this->input->post('makna2'),
            'tgl3'      =>  $this->input->post('tgl3'),
            'salah3'    =>  $this->input->post('kesalahan3'),
            'tajw3'     =>  $this->input->post('kelancaran3'),
            'makna3'    =>  $this->input->post('makna3'),
            'tgl4'      =>  $this->input->post('tgl4'),
            'salah4'    =>  $this->input->post('kesalahan4'),
            'tajw4'     =>  $this->input->post('kelancaran4'),
            'makna4'    =>  $this->input->post('makna4'),
            'tgl5'      =>  $this->input->post('tgl5'),
            'salah5'    =>  $this->input->post('kesalahan5'),
            'tajw5'     =>  $this->input->post('kelancaran5'),
            'makna5'    =>  $this->input->post('makna5'),
            'tgl6'      =>  $this->input->post('tgl6'),
            'salah6'    =>  $this->input->post('kesalahan6'),
            'tajw6'     =>  $this->input->post('kelancaran6'),
            'makna6'    =>  $this->input->post('makna6'),
            'tgl7'      =>  $this->input->post('tgl7'),
            'salah7'    =>  $this->input->post('kesalahan7'),
            'tajw7'     =>  $this->input->post('kelancaran7'),
            'makna7'    =>  $this->input->post('makna7'),
            'tgl8'      =>  $this->input->post('tgl8'),
            'salah8'    =>  $this->input->post('kesalahan8'),
            'tajw8'     =>  $this->input->post('kelancaran8'),
            'makna8'    =>  $this->input->post('makna8'),
            'tgl9'      =>  $this->input->post('tgl9'),
            'salah9'    =>  $this->input->post('kesalahan9'),
            'tajw9'     =>  $this->input->post('kelancaran9'),
            'makna9'    =>  $this->input->post('makna9'),
        ];
        $op = ['user'=>$dataHapalan['user'],'bulan'=>$dataHapalan['bulan']];
        if($this->db->get_where('tahfizh',$op)->num_rows()>0){
            $this->session->set_flashdata('info','<div class="alert alert-warning"><strong>Peringatan!!</strong> Anda Sudah MengInput Tahfizh Bulan Ini</div>');
            $this->session->set_flashdata('info1','<div class="alert alert-info"><strong>Catatan !!</strong> Jika Ingin memperbaiki Data Inputan Bulan Ini Hubungi Pengasuhan </div>');
            redirect('home');
        } else {
            return $this->db->insert('tahfizh',$dataHapalan);
        }
    }

    public function get_data(){
        $dc = $this->input->post('bln');
        $ty = ['tahfizh.bulan'=>$dc,'status'=>'santri'];
        $this->db->select('tahfizh.id,user.nama,tahfizh.bulan,tahfizh.halaman,tahfizh.tgl1,tahfizh.tgl2,tahfizh.tgl3,tahfizh.tgl4,tahfizh.tgl5,tahfizh.tgl6,tahfizh.tgl7,tahfizh.tgl8,tahfizh.tgl9,tahfizh.total,tahfizh.salah1,tahfizh.salah2,tahfizh.salah3,tahfizh.salah4,tahfizh.salah5,tahfizh.salah6,tahfizh.salah7,tahfizh.salah8,tahfizh.salah9,tahfizh.tajw1,tahfizh.tajw2,tahfizh.tajw3,tahfizh.tajw4,tahfizh.tajw5,tahfizh.tajw6,tahfizh.tajw7,tahfizh.tajw8,tahfizh.tajw9,tahfizh.makna1,tahfizh.makna2,tahfizh.makna3,tahfizh.makna4,tahfizh.makna5,tahfizh.makna6,tahfizh.makna7,tahfizh.makna8,tahfizh.makna9');
        $this->db->from('user');
        $this->db->join('tahfizh','user.id = tahfizh.user','left');
        $this->db->where($ty);
        return $this->db->get();
    }

    public function edit(){
        $id = $this->input->post('id');
        $dataHapalan = [
            'halaman'   =>  $this->input->post('halam'),
            'total'     =>  $this->input->post('total'),
            'tgl1'      =>  $this->input->post('tgl1'),
            'salah1'    =>  $this->input->post('kesalahan1'),
            'tajw1'     =>  $this->input->post('kelancaran1'),
            'makna1'    =>  $this->input->post('makna1'),
            'tgl2'      =>  $this->input->post('tgl2'),
            'salah2'    =>  $this->input->post('kesalahan2'),
            'tajw2'     =>  $this->input->post('kelancaran2'),
            'makna2'    =>  $this->input->post('makna2'),
            'tgl3'      =>  $this->input->post('tgl3'),
            'salah3'    =>  $this->input->post('kesalahan3'),
            'tajw3'     =>  $this->input->post('kelancaran3'),
            'makna3'    =>  $this->input->post('makna3'),
            'tgl4'      =>  $this->input->post('tgl4'),
            'salah4'    =>  $this->input->post('kesalahan4'),
            'tajw4'     =>  $this->input->post('kelancaran4'),
            'makna4'    =>  $this->input->post('makna4'),
            'tgl5'      =>  $this->input->post('tgl5'),
            'salah5'    =>  $this->input->post('kesalahan5'),
            'tajw5'     =>  $this->input->post('kelancaran5'),
            'makna5'    =>  $this->input->post('makna5'),
            'tgl6'      =>  $this->input->post('tgl6'),
            'salah6'    =>  $this->input->post('kesalahan6'),
            'tajw6'     =>  $this->input->post('kelancaran6'),
            'makna6'    =>  $this->input->post('makna6'),
            'tgl7'      =>  $this->input->post('tgl7'),
            'salah7'    =>  $this->input->post('kesalahan7'),
            'tajw7'     =>  $this->input->post('kelancaran7'),
            'makna7'    =>  $this->input->post('makna7'),
            'tgl8'      =>  $this->input->post('tgl8'),
            'salah8'    =>  $this->input->post('kesalahan8'),
            'tajw8'     =>  $this->input->post('kelancaran8'),
            'makna8'    =>  $this->input->post('makna8'),
            'tgl9'      =>  $this->input->post('tgl9'),
            'salah9'    =>  $this->input->post('kesalahan9'),
            'tajw9'     =>  $this->input->post('kelancaran9'),
            'makna9'    =>  $this->input->post('makna9'),
        ];
        $this->db->where('id',$id);
        return $this->db->update('tahfizh',$dataHapalan);
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('tahfizh');
    }
}