<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Form_model', 'm_form');
    }


    public function input_form()
    {
        $id = $this->session->userdata('id');
        //------penyelenggara----------//
        $id_penyelenggara = $this->input->post('penyelenggara');
        $row_penyelenggara = $this->db->get_where('radio_stasiun', ['id' => $id_penyelenggara])->row_array();
        if ($row_penyelenggara != NULL) {
            $penyelenggara = $row_penyelenggara['id'];
        } else {
            if ($id_penyelenggara != '') {
                $data_stasiun_input = [
                    'nama_stasiun' => $this->input->post('nama_stasiun'),
                    'alamat' => $this->input->post('alamat'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kotamadya' => $this->input->post('kotamadya'),
                    'telp' => $this->input->post('telp'),
                    'email' => $this->input->post('email'),
                ];
                $this->db->insert('radio_stasiun', $data_stasiun_input);
                $row_stas = $this->db->get_where('radio_stasiun', ['nama_stasiun' => $this->input->post('nama_stasiun'), 'alamat' => $this->input->post('alamat'), 'kelurahan' => $this->input->post('kelurahan'), 'kecamatan' => $this->input->post('kecamatan'), 'kotamadya' => $this->input->post('kotamadya'),])->row_array();
                $penyelenggara = $row_stas['id'];
            } else if ($this->input->post('penyelenggara2') != '') {
                $data_stasiun_input = [
                    'nama_stasiun' => $this->input->post('penyelenggara2'),
                    'alamat' => $this->input->post('alamat'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'kotamadya' => $this->input->post('kotamadya'),
                    'telp' => $this->input->post('telp'),
                    'email' => $this->input->post('email'),
                ];
                $this->db->insert('radio_stasiun', $data_stasiun_input);
                $row_stas = $this->db->get_where('radio_stasiun', ['nama_stasiun' => $this->input->post('nama_stasiun'), 'alamat' => $this->input->post('alamat'), 'kelurahan' => $this->input->post('kelurahan'), 'kecamatan' => $this->input->post('kecamatan'), 'kotamadya' => $this->input->post('kotamadya')])->row_array();
                $penyelenggara = $row_stas['id'];
            }
        }
        //------pemancar----------//
        $id_pemancar = $this->input->post('alamat_pem');
        $query_pemancar = $this->db->get_where('radio_pemancar', ['id' => $id_pemancar])->row_array();
        if ($query_pemancar != NULL) {
            $pemancar = $query_pemancar['id'];
        } else {
            if ($id_pemancar != '') {
                $data_pemancar_input = [
                    'alamat' => $this->input->post('alamat_pem'),
                    'kelurahan' => $this->input->post('kelurahan_pem'),
                    'kecamatan' => $this->input->post('kecamatan_pem'),
                    'kotamadya' => $this->input->post('kotamadya_pem'),
                    'telp' => $this->input->post('telp_pem'),
                    'tinggi_lok' => $this->input->post('tinggi_lok'),
                    'tinggi_ged' => $this->input->post('tinggi_ged'),
                    'tinggi_men' => $this->input->post('tinggi_men'),
                    'latitude' => $this->input->post('lat'),
                    'longitude' => $this->input->post('lng'),
                ];
                $this->db->insert('radio_pemancar', $data_pemancar_input);
                $row_pem = $this->db->get_where('radio_pemancar', ['alamat' => $this->input->post('alamat_pem'), 'kelurahan' => $this->input->post('kelurahan_pem'), 'kecamatan' => $this->input->post('kecamatan_pem'), 'kotamadya' => $this->input->post('kotamadya_pem'), 'telp' => $this->input->post('telp_pem')])->row_array();
                $pemancar = $row_pem['id'];
            } else if ($this->input->post('alamat_pem2') != '') {
                $data_pemancar_input = [
                    'alamat' => $this->input->post('alamat_pem2'),
                    'kelurahan' => $this->input->post('kelurahan_pem'),
                    'kecamatan' => $this->input->post('kecamatan_pem'),
                    'kotamadya' => $this->input->post('kotamadya_pem'),
                    'telp' => $this->input->post('telp_pem'),
                    'tinggi_lok' => $this->input->post('tinggi_lok'),
                    'tinggi_ged' => $this->input->post('tinggi_ged'),
                    'tinggi_men' => $this->input->post('tinggi_men'),
                    'latitude' => $this->input->post('lat'),
                    'longitude' => $this->input->post('lng'),
                ];
                $this->db->insert('radio_pemancar', $data_pemancar_input);
                $row_pem = $this->db->get_where('radio_pemancar', ['alamat' => $this->input->post('alamat_pem'), 'kelurahan' => $this->input->post('kelurahan_pem'), 'kecamatan' => $this->input->post('kecamatan_pem'), 'kotamadya' => $this->input->post('kotamadya_pem'), 'telp' => $this->input->post('telp_pem')])->row_array();
                $pemancar = $row_pem['id'];
            }
        }

        //------spek pemancar----------//
        $id_stasiun_pemancar = $this->input->post('merk');
        $row_pemancar = $this->m_form->get_row_pemancar($id_stasiun_pemancar);
        //------spek antenna----------//
        $id_stasiun_antenna = $this->input->post('jenis_ant');
        $row_antenna = $this->m_form->get_row_antenna($id_stasiun_antenna);
        //------input hasil ukur----------//
        $hasil_ukur = [
            'kanal' => $this->input->post('kanal'),
            'freq_terukur' => $this->input->post('freq_terukur'),
            'pergeseran' => $this->input->post('pergeseran'),
            'level' => $this->input->post('level'),
            'bandwith' => $this->input->post('bandwith'),
            'field_str' => $this->input->post('field_str'),
            'daya_terukur' => $this->input->post('daya_terukur'),
            'kedalaman_mod' => $this->input->post('mod'),
            'deviasi_freq' => $this->input->post('deviasi_freq'),
            'erp' => $this->input->post('erp'),
            'h1_freq' => $this->input->post('h1_freq'),
            'h1_level' => $this->input->post('h1_level'),
            'h2_freq' => $this->input->post('h2_freq'),
            'h2_level' => $this->input->post('h2_level'),
            'h3_freq' => $this->input->post('h3_freq'),
            'h3_level' => $this->input->post('h3_level'),
        ];
        $this->db->insert('radio_hasil_ukur', $hasil_ukur);
        $id_hasil_ukur = $this->db->get_where('radio_hasil_ukur', ['kanal' => $this->input->post('kanal'), 'freq_terukur' => $this->input->post('freq_terukur'), 'level' => $this->input->post('level'), 'bandwith' => $this->input->post('bandwith')])->row_array();

        $data = [
            'user_id' => $id,
            'id_penyelenggara' => $penyelenggara,
            'id_pemancar' => $pemancar,
            'id_spek_pemancar' => $row_pemancar['id_spek'],
            'id_spek_antenna' => $row_antenna['id_spek'],
            'id_hasil_ukur' => $id_hasil_ukur['id'],
            'id_hasil_scan' => '',
            'id_spt' => $id_hasil_ukur['id'],
        ];
        $this->db->insert('form_hasil_ukur', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Menginputkan Hasil Ukur!
        </div>');
        redirect('pengukuran/dashboard');

        // 'upt' => $this->input->post('upt'),
        // 'tanggal' => $this->input->post('tanggal'),
        // 'provinsi' => $this->input->post('provinsi'),
        // 'kabkota' => $this->input->post('kabkota'),



        // 'merk' => $this->input->post('merk'),
        // 'jenis' => $this->input->post('jenis'),
        // 'seri' => $this->input->post('seri'),
        // 'negara_pem' => $this->input->post('negara_pem'),
        // 'tahun_pem' => $this->input->post('tahun_pem'),
        // 'freq' => $this->input->post('freq'),
        // 'kelas_em' => $this->input->post('kelas_em'),
        // 'bw' => $this->input->post('bw'),
        // 'dalam' => $this->input->post('dalam'),
        // 'max_p' => $this->input->post('max_p'),

        // 'jenis_ant' => $this->input->post('jenis_ant'),
        // 'polarisasi' => $this->input->post('pol'),
        // 'jlh_el' => $this->input->post('jlh_el'),
        // 'gain' => $this->input->post('gain'),
        // 'beam_ant' => $this->input->post('beam_ant'),
        // 'jenis_kabel' => $this->input->post('jenis_kabel'),
        // 'type_kabel' => $this->input->post('type_kabel'),
        // 'panjang_kabel' => $this->input->post('panjang_kabel'),



        // 'no_spt' => $this->input->post('no_spt'),
        // 'tgl_spt' => $this->input->post('tgl_spt'),
        // 'jenis_sbk' => $this->input->post('jenis_sbk'),
        // 'ket_kecamatan' => $this->input->post('ket_kecamatan'),
        // 'jln' => $this->input->post('jln'),
        // 'ket_lat' => $this->input->post('lat'),
        // 'ket_lng' => $this->input->post('lng'),
    }
}
