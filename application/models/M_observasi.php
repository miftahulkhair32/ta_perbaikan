<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_observasi extends CI_Model {

    public function __construct(){
        parent::__construct();
        // letakkan magic kode disini
    }

    public function santri(){
        $this->db->select('id,nama');
        $this->db->where('status','santri');
        $this->db->order_by('nama','ASC');
        $tu = $this->db->get('user');
        return $tu;
    }

    public function input(){
        $men    =   $this->input->post('menejemen');
        $bln    =   $this->input->post('bulan');
        $no     =   $this->input->post('no');
        
        while ($no > 0) {
            $ui =   $this->input->post('user'.$no);
            $bu =   ['user'=>$ui,'bulan'=>$bln];
            $this->db->where($bu);
            $this->db->from('observasi');
            $mn =   $this->db->get()->num_rows();
            if($mn > 0){
                $datup = [
                    $men    =>  $this->input->post('total'.$no),
                ];
                $this->db->where('user',$ui);
                $this->db->where('bulan',$bln);
                $kl = $this->db->update('observasi',$datup);
            } else {
                $dataObs = [
                    'user'      =>  $ui,
                    'bulan'     =>  $bln,
                    $men        =>  $this->input->post('total'.$no),
                ];
                $kl = $this->db->insert('observasi',$dataObs);
            }
            $no--;
        }
        return $kl;
    }

    public function menej(){
        $this->db->select('nama,username')->where('status','menejemen');
        $this->db->order_by('nama','ASC');
        return $this->db->get('user');
    }

    public function get(){
        $dc = $this->input->post('bln');
        $ty = ['observasi.bulan'=>$dc];
        
        $this->db->select('username')->where('status','menejemen');
        $this->db->order_by('nama','ASC');
        $mko = $this->db->get('user');
        $n=0;
        foreach($mko->result() as $m) {
            $lk[$n] = $m->username;
            $obs[] = 'observasi.'.$lk[$n].',';
        $n++;
        }
        $n--;
        $r=$obs[0];
        while($n>0){
            $r .= $obs[$n];
        $n--;
        }
        $this->db->select('user.nama as nama,observasi.bulan as bulan,'.$r.',pelanggaran.total as total,observasi.id');
        $this->db->from('user');
        $this->db->join('observasi','user.id = observasi.user','left');
        $this->db->join('pelanggaran','user.id = pelanggaran.user and observasi.bulan = pelanggaran.bulan','left');
        $this->db->where($ty);
        $ui = $this->db->get();
        return $ui;
        /*
        (nb::hasil akhir harus seperti ini):::
        select user.nama as nama, observasi.bulan as bulan, observasi.miftahul, observasi.dian, observasi.wahyu, pelanggaran.total as total 
        -> from user
        -> left join observasi on user.nama = observasi.nama
        -> left join pelanggaran on user.nama = pelanggaran.nama and observasi.bulan = pelanggaran.bulan
        -> where observasi.bulan = 'April' and user.status = 'santri';
        +----------------+-------+----------+------+-------+-------+
        | nama           | bulan | miftahul | dian | wahyu | total |
        +----------------+-------+----------+------+-------+-------+
        | zakky mantab   | April |       60 |   69 |  NULL |   293 |
        | faiz           | April |       48 |   65 |  NULL |   465 |
        | arief lazuardi | April |       47 |   67 |  NULL |   409 |
        +----------------+-------+----------+------+-------+-------+
        3 rows in set (0,00 sec)
        */
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        return $this->db->delete('observasi');
    }

    public function edit(){
        $id = $this->input->post('id');
        $a = $this->db->get_where('user',['status'=>'menejemen']);
        $user = $a->result_array();
        foreach($user as $u){
            $data[$u['username']] = $this->input->post($u['username']);
        }
        $this->db->where('id',$id);
        return $this->db->update('observasi',$data);
    }
}