<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
    function get_stasiun_radio($id)
    {
        $query = $this->db->get_where('radio_stasiun', array('id_kab' => $id));
        return $query;
    }
    function get_stasiun_pemancar($id)
    {
        $query = $this->db->get_where('radio_pemancar', array('id_stasiun' => $id));
        return $query;
    }
    function get_spek_pemancar($id)
    {
        $query = $this->db->get_where('radio_spek_pemancar', array('id_stasiun' => $id));
        return $query;
    }
    function get_spek_antenna($id)
    {
        $query = $this->db->get_where('radio_spek_antenna', array('id_stasiun' => $id));
        return $query;
    }
    function get_kanal($freq)
    {
        $query = $this->db->get_where('kanal_auto', array('frekuensi' => $freq));
        return $query;
    }
    function get_koordinat_pem($id)
    {
        $query = $this->db->get_where('radio_pemancar', array('id' => $id));
        return $query;
    }
    function get_spt_pem($id, $alamat)
    {
        $query = $this->db->get_where('radio_pemancar', array('id' => $id, 'alamat' => $alamat));
        return $query;
    }

    function get_row_pemancar($id_stasiun_pemancar)
    {
        $array_spek = $this->db->get_where('radio_spek_pemancar', ['id_stasiun' => $id_stasiun_pemancar])->result_array();
        $loop_spek = $this->db->get_where('radio_spek_pemancar', ['id_stasiun' => $id_stasiun_pemancar])->num_rows();
        for ($i = 0; $i < $loop_spek; $i++) {
            $this->db->select('*');
            $this->db->where('id_stasiun', $array_spek[$i]['id_stasiun']);
            $this->db->where('merk', $array_spek[$i]['merk']);
            $this->db->where('jenis', $array_spek[$i]['jenis']);
            $this->db->where('frekuensi', $array_spek[$i]['frekuensi']);
            $this->db->from('radio_spek_pemancar');
            $row_pemancar = $this->db->get()->row_array();
        }
        return $row_pemancar;
    }

    function get_row_antenna($id_stasiun_antenna)
    {
        $array_spek_ant = $this->db->get_where('radio_spek_antenna', ['id_stasiun' => $id_stasiun_antenna])->result_array();
        $loop_spek_ant = $this->db->get_where('radio_spek_antenna', ['id_stasiun' => $id_stasiun_antenna])->num_rows();
        for ($i = 0; $i < $loop_spek_ant; $i++) {
            $this->db->select('*');
            $this->db->where('id_stasiun', $array_spek_ant[$i]['id_stasiun']);
            $this->db->where('jenis_ant', $array_spek_ant[$i]['jenis_ant']);
            $this->db->where('elemen', $array_spek_ant[$i]['elemen']);
            $this->db->where('gain', $array_spek_ant[$i]['gain']);
            $this->db->from('radio_spek_antenna');
            $row_antenna = $this->db->get()->row_array();
        }
        return $row_antenna;
    }

    //----------------//

    public function chart_bulan1()
    {
        $bulan = '01';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan2()
    {
        $bulan = '02';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan3()
    {
        $bulan = '03';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan4()
    {
        $bulan = '04';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan5()
    {
        $bulan = '05';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan6()
    {
        $bulan = '06';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan7()
    {
        $bulan = '07';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan8()
    {
        $bulan = '08';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan9()
    {
        $bulan = '09';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan10()
    {
        $bulan = '10';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan11()
    {
        $bulan = '11';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
    public function chart_bulan12()
    {
        $bulan = '12';
        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }
}
