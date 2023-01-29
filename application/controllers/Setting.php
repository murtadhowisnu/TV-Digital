<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function data_stasiun()
    {
        $data['title'] = 'Data Stasiun Radio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stasiun'] = $this->db->get('radio_stasiun')->result_array();
        $role_id =  $this->session->userdata('role_id');

        if ($role_id == 1) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('template/admin/topbar', $data);
            $this->load->view('setting/admin/data_stasiun', $data);
            $this->load->view('template/admin/footer', $data);
        } else if ($role_id == 2) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('setting/data_stasiun', $data);
            $this->load->view('template/petugas/footer', $data);
        }
    }

    public function tambah_stasiun()
    {
        $role_id =  $this->session->userdata('role_id');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('kelurahan', 'kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('kotamadya', 'kotamadya', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak lengkap, Coba Lagi!
            </div>');
            redirect('setting/data_stasiun');
        } else {
            $data = [
                'nama_stasiun' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kotamadya' => $this->input->post('kotamadya'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
            ];
            $this->db->insert('radio_stasiun', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Menambah Data!
            </div>');
            redirect('setting/data_stasiun');
        }
    }

    public function delete_stasiun($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('radio_stasiun');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Menghapus Data!
        </div>');
        redirect('setting/data_stasiun');
    }

    public function data_pemancar()
    {
        $data['title'] = 'Data Pemancar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $role_id =  $this->session->userdata('role_id');

        $this->db->select('*');
        $this->db->from('radio_pemancar');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = radio_pemancar.id_stasiun');
        $data['pemancar'] = $this->db->get()->result_array();

        $data['pemancar_detail'] = $this->db->get('radio_spek_pemancar')->result_array();
        $data['stasiun'] = $this->db->get('radio_stasiun')->result_array();


        if ($role_id == 1) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('template/admin/topbar', $data);
            $this->load->view('setting/admin/data_pemancar', $data);
            $this->load->view('template/admin/footer', $data);
        } else if ($role_id == 2) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('setting/data_pemancar', $data);
            $this->load->view('template/petugas/footer', $data);
        }
    }

    public function tambah_pemancar()
    {
        $this->form_validation->set_rules('stasiun', 'stasiun', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('kelurahan', 'kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('kotamadya', 'kotamadya', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak lengkap, Coba Lagi!
            </div>');
            redirect('setting/data_pemancar');
        } else {
            $data = [
                'id_stasiun' => $this->input->post('stasiun'),
                'alamat' => $this->input->post('alamat'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kotamadya' => $this->input->post('kotamadya'),
                'telp' => $this->input->post('telp'),
                'tinggi_lok' => $this->input->post('tinggi_lok'),
                'tinggi_ged' => $this->input->post('tinggi_ged'),
                'tinggi_men' => $this->input->post('tinggi_men'),
            ];
            $this->db->insert('radio_pemancar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Menambah Data!
            </div>');
            redirect('setting/data_pemancar');
        }
    }

    public function data_spek_pemancar()
    {
        $data['title'] = 'Data Spesifikasi Pemancar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stasiun'] = $this->db->get('radio_stasiun')->result_array();
        $role_id =  $this->session->userdata('role_id');

        $this->db->select('*');
        $this->db->from('radio_spek_pemancar');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = radio_spek_pemancar.id_stasiun');
        $data['spek_pem'] = $this->db->get()->result_array();

        if ($role_id == 1) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('template/admin/topbar', $data);
            $this->load->view('setting/admin/data_spek_pemancar', $data);
            $this->load->view('template/admin/footer', $data);
        } else if ($role_id == 2) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('setting/data_spek_pemancar', $data);
            $this->load->view('template/petugas/footer', $data);
        }
    }

    public function tambah_spek_pemancar()
    {
        $this->form_validation->set_rules('id_stasiun', 'id_stasiun', 'required');
        $this->form_validation->set_rules('freq', 'freq', 'required');
        $this->form_validation->set_rules('kelas_emisi', 'kelas_emisi', 'required');
        $this->form_validation->set_rules('bandwith', 'bandwith', 'required');
        $this->form_validation->set_rules('kedalaman_mod', 'kedalaman_mod', 'required');
        $this->form_validation->set_rules('max_power', 'max_power', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak lengkap, Coba Lagi!
            </div>');
            redirect('setting/data_spek_pemancar');
        } else {
            $data = [
                'id_stasiun' => $this->input->post('id_stasiun'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'no_seri' => $this->input->post('no_seri'),
                'negara' => $this->input->post('negara'),
                'tahun' => $this->input->post('tahun'),
                'frekuensi' => $this->input->post('freq'),
                'kelas_emisi' => $this->input->post('kelas_emisi'),
                'bandwith' => $this->input->post('bandwith'),
                'kedalaman_mod' => $this->input->post('kedalaman_mod'),
                'max_power' => $this->input->post('max_power'),
            ];
            $this->db->insert('radio_spek_pemancar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Menambah Data!
            </div>');
            redirect('setting/data_spek_pemancar');
        }
    }

    public function data_spek_antenna()
    {
        $data['title'] = 'Data Spesifikasi Antenna';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stasiun'] = $this->db->get('radio_stasiun')->result_array();
        $role_id =  $this->session->userdata('role_id');

        $this->db->select('*');
        $this->db->from('radio_spek_antenna');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = radio_spek_antenna.id_stasiun');
        $data['spek_ant'] = $this->db->get()->result_array();

        if ($role_id == 1) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('template/admin/topbar', $data);
            $this->load->view('setting/admin/data_spek_antenna', $data);
            $this->load->view('template/admin/footer', $data);
        } else if ($role_id == 2) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('setting/data_spek_antenna', $data);
            $this->load->view('template/petugas/footer', $data);
        }
    }

    public function tambah_spek_antenna()
    {
        $this->form_validation->set_rules('id_stasiun', 'id_stasiun', 'required');
        $this->form_validation->set_rules('jenis_ant', 'jenis_ant', 'required');
        $this->form_validation->set_rules('polarisasi', 'polarisasi', 'required');
        $this->form_validation->set_rules('elemen', 'elemen', 'required');
        $this->form_validation->set_rules('gain', 'gain', 'required');
        $this->form_validation->set_rules('beam', 'beam', 'required');
        $this->form_validation->set_rules('jenis_kabel', 'jenis_kabel', 'required');
        $this->form_validation->set_rules('tipe_kabel', 'tipe_kabel', 'required');
        $this->form_validation->set_rules('panjang_kabel', 'panjang_kabel', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data tidak lengkap, Coba Lagi!
            </div>');
            redirect('setting/data_spek_antenna');
        } else {
            $data = [
                'id_stasiun' => $this->input->post('id_stasiun'),
                'jenis_ant' => $this->input->post('jenis_ant'),
                'polarisasi' => $this->input->post('polarisasi'),
                'elemen' => $this->input->post('elemen'),
                'gain' => $this->input->post('gain'),
                'beam' => $this->input->post('beam'),
                'jenis_kabel' => $this->input->post('jenis_kabel'),
                'tipe_kabel' => $this->input->post('tipe_kabel'),
                'panjang_kabel' => $this->input->post('panjang_kabel'),
            ];
            $this->db->insert('radio_spek_antenna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Menambah Data!
            </div>');
            redirect('setting/data_spek_antenna');
        }
    }

    public function data_kanal()
    {
        $data['title'] = 'Data Kanal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kanal'] = $this->db->get('kanal_auto')->result_array();
        $role_id =  $this->session->userdata('role_id');

        if ($role_id == 1) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('template/admin/sidebar', $data);
            $this->load->view('template/admin/topbar', $data);
            $this->load->view('setting/admin/data_kanal', $data);
            $this->load->view('template/admin/footer', $data);
        } else if ($role_id == 2) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('setting/data_kanal', $data);
            $this->load->view('template/petugas/footer', $data);
        }
    }
}
