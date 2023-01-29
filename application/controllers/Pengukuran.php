<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pengukuran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Form_model', 'm_form');
    }

    function get_stasiun()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_form->get_stasiun_radio($id)->result();
        echo json_encode($data);
    }
    function get_pemancar()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_form->get_stasiun_pemancar($id)->result();
        echo json_encode($data);
    }
    function get_spek_pem()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_form->get_spek_pemancar($id)->result();
        echo json_encode($data);
    }
    function get_spek_ant()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_form->get_spek_antenna($id)->result();
        echo json_encode($data);
    }
    function get_kanal_auto()
    {
        $freq = $this->input->post('freq', TRUE);
        $data = $this->m_form->get_kanal($freq)->result();
        echo json_encode($data);
    }
    function get_koordinat()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_form->get_koordinat_pem($id)->result();
        echo json_encode($data);
    }
    function get_spt_pemancar()
    {
        $id = $this->input->post('id', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $data = $this->m_form->get_spt_pem($id, $alamat)->result();
        echo json_encode($data);
    }

    public function index()
    {
        $data['title'] = 'Pengukuran Radio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kabkota'] = $this->db->get('input_kabupaten')->result_array();
        $data['stasiun'] = $this->db->get('radio_stasiun')->result_array();
        $data['pemancar'] = $this->db->get('radio_pemancar')->result_array();
        $data['kanal'] = $this->db->get('kanal_auto')->result_array();
        $data['spek_pem'] = $this->db->get('radio_spek_pemancar')->result_array();
        $data['spek_ant'] = $this->db->get('radio_spek_antenna')->result_array();


        $this->load->view('template/petugas/header', $data);
        $this->load->view('template/petugas/sidebar', $data);
        $this->load->view('template/petugas/topbar', $data);
        $this->load->view('pengukuran/form/form1', $data);
        $this->load->view('template/petugas/footer', $data);
    }

    public function dashboard()
    {
        $bulan = date('m');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hasil_ukur'] = $this->db->get_where('form_hasil_ukur', ['user_id' => $this->session->userdata('id')])->num_rows();
        $data['data_stasiun'] = $this->db->get('radio_stasiun')->num_rows();
        $data['data_pemancar'] = $this->db->get('radio_pemancar')->num_rows();

        $data['chart_bulan1'] = $this->m_form->chart_bulan1();
        $data['chart_bulan2'] = $this->m_form->chart_bulan2();
        $data['chart_bulan3'] = $this->m_form->chart_bulan3();
        $data['chart_bulan4'] = $this->m_form->chart_bulan4();
        $data['chart_bulan5'] = $this->m_form->chart_bulan5();
        $data['chart_bulan6'] = $this->m_form->chart_bulan6();
        $data['chart_bulan7'] = $this->m_form->chart_bulan7();
        $data['chart_bulan8'] = $this->m_form->chart_bulan8();
        $data['chart_bulan9'] = $this->m_form->chart_bulan9();
        $data['chart_bulan10'] = $this->m_form->chart_bulan10();
        $data['chart_bulan11'] = $this->m_form->chart_bulan11();
        $data['chart_bulan12'] = $this->m_form->chart_bulan12();

        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = form_hasil_ukur.id_penyelenggara');
        $this->db->join('radio_pemancar', 'radio_pemancar.id = form_hasil_ukur.id_pemancar');
        $this->db->join('radio_spek_pemancar', 'radio_spek_pemancar.id_spek = form_hasil_ukur.id_spek_pemancar');
        $this->db->join('radio_spek_antenna', 'radio_spek_antenna.id_spek = form_hasil_ukur.id_spek_antenna');
        $this->db->join('radio_hasil_ukur', 'radio_hasil_ukur.id = form_hasil_ukur.id_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('MONTH(form_keterangan.tgl_spt)', $bulan);
        $this->db->where('user_id', $this->session->userdata('id'));
        $data['info'] = $this->db->get()->result_array();


        $this->load->view('template/petugas/header', $data);
        $this->load->view('template/petugas/sidebar', $data);
        $this->load->view('template/petugas/topbar', $data);
        $this->load->view('pengukuran/dashboard', $data);
        $this->load->view('template/petugas/footer', $data);
    }

    public function history()
    {
        $data['title'] = 'History Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masuk'] = $this->db->get_where('form_hasil_ukur', ['user_id' => $this->session->userdata('id')])->num_rows();

        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = form_hasil_ukur.id_penyelenggara');
        $this->db->join('radio_pemancar', 'radio_pemancar.id = form_hasil_ukur.id_pemancar');
        $this->db->join('radio_spek_pemancar', 'radio_spek_pemancar.id_spek = form_hasil_ukur.id_spek_pemancar');
        $this->db->join('radio_spek_antenna', 'radio_spek_antenna.id_spek = form_hasil_ukur.id_spek_antenna');
        $this->db->join('radio_hasil_ukur', 'radio_hasil_ukur.id = form_hasil_ukur.id_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('form_hasil_ukur.user_id', $this->session->userdata('id'));
        $data['info'] = $this->db->get()->result_array();

        $this->load->view('template/petugas/header', $data);
        $this->load->view('template/petugas/sidebar', $data);
        $this->load->view('template/petugas/topbar', $data);
        $this->load->view('pengukuran/history', $data);
        $this->load->view('template/petugas/footer', $data);
    }

    public function info($id)
    {
        $data['title'] = 'Detail Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $no_spt = str_replace('-', '/', $id);

        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = form_hasil_ukur.id_penyelenggara');
        $this->db->join('radio_pemancar', 'radio_pemancar.id = form_hasil_ukur.id_pemancar');
        $this->db->join('radio_spek_pemancar', 'radio_spek_pemancar.id_spek = form_hasil_ukur.id_spek_pemancar');
        $this->db->join('radio_spek_antenna', 'radio_spek_antenna.id_spek = form_hasil_ukur.id_spek_antenna');
        $this->db->join('radio_hasil_ukur', 'radio_hasil_ukur.id = form_hasil_ukur.id_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('form_keterangan.no_spt', $no_spt);
        $data['detail'] = $this->db->get()->row_array();

        $this->load->view('template/petugas/header', $data);
        $this->load->view('template/petugas/sidebar', $data);
        $this->load->view('template/petugas/topbar', $data);
        $this->load->view('pengukuran/info', $data);
        $this->load->view('template/petugas/footer', $data);
    }

    public function edit1()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'upt'  => $this->input->post('upt'),
            'tanggal' => $this->input->post('tanggal'),
            'provinsi' => $this->input->post('provinsi'),
            'kabkota' => $this->input->post('kabkota'),
        );
        $this->menuedit->ukurEdit1($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit2()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'penyelenggara'  => $this->input->post('penyelenggara'),
            'alamat' => $this->input->post('alamat'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kotamadya' => $this->input->post('kotamadya'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
        );
        $this->menuedit->ukurEdit2($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit3()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'lat'  => $this->input->post('lat'),
            'lng'  => $this->input->post('lng'),
            'alamat_lokasi'  => $this->input->post('alamat_lokasi'),
            'kelurahan_lokasi'  => $this->input->post('kelurahan_lokasi'),
            'kecamatan_lokasi'  => $this->input->post('kecamatan_lokasi'),
            'kotamadya_lokasi'  => $this->input->post('kotamadya_lokasi'),
            'telp_lokasi'  => $this->input->post('telp_lokasi'),
            'tinggi_lok'  => $this->input->post('tinggi_lok'),
            'tinggi_ged'  => $this->input->post('tinggi_ged'),
            'tinggi_men'  => $this->input->post('tinggi_men'),
        );
        $this->menuedit->ukurEdit3($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit4()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'merk'  => $this->input->post('merk'),
            'jenis'  => $this->input->post('jenis'),
            'seri'  => $this->input->post('seri'),
            'negara_pem'  => $this->input->post('negara_pem'),
            'tahun_pem'  => $this->input->post('tahun_pem'),
            'freq'  => $this->input->post('freq'),
            'kelas_em'  => $this->input->post('kelas_em'),
            'bw'  => $this->input->post('bw'),
            'dalam'  => $this->input->post('dalam'),
            'max_p'  => $this->input->post('max_p'),
        );
        $this->menuedit->ukurEdit4($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit5()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'jenis_ant'  => $this->input->post('jenis_ant'),
            'polarisasi'  => $this->input->post('polarisasi'),
            'jlh_el'  => $this->input->post('jlh_el'),
            'gain'  => $this->input->post('gain'),
            'beam_ant'  => $this->input->post('beam_ant'),
            'jenis_kabel'  => $this->input->post('jenis_kabel'),
            'type_kabel'  => $this->input->post('type_kabel'),
            'panjang_kabel'  => $this->input->post('panjang_kabel'),
        );
        $this->menuedit->ukurEdit5($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit6()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'kanal'  => $this->input->post('kanal'),
            'freq_terukur'  => $this->input->post('freq_terukur'),
            'pergeseran'  => $this->input->post('pergeseran'),
            'level'  => $this->input->post('level'),
            'bw_hasil'  => $this->input->post('bw_hasil'),
            'field_str'  => $this->input->post('field_str'),
            'daya_ukur'  => $this->input->post('daya_ukur'),
            'kedalaman_mod'  => $this->input->post('kedalaman_mod'),
            'deviasi'  => $this->input->post('deviasi'),
            'erp'  => $this->input->post('erp'),
        );
        $this->menuedit->ukurEdit6($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit7()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'h1_freq'  => $this->input->post('h1_freq'),
            'h1_level'  => $this->input->post('h1_level'),
            'h2_freq'  => $this->input->post('h2_freq'),
            'h2_level'  => $this->input->post('h2_level'),
            'h3_freq'  => $this->input->post('h3_freq'),
            'h3_level'  => $this->input->post('h3_level'),
        );
        $this->menuedit->ukurEdit7($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function edit8()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'no_spt'  => $this->input->post('no_spt'),
            'tgl_spt'  => $this->input->post('tgl_spt'),
            'jenis_sbk'  => $this->input->post('jenis_sbk'),
            'ket_kecamatan'  => $this->input->post('ket_kecamatan'),
            'jln'  => $this->input->post('jln'),
            'ket_lat'  => $this->input->post('ket_lat'),
            'ket_lng'  => $this->input->post('ket_lng'),
        );
        $this->menuedit->ukurEdit8($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edited!
        </div>');
        redirect('pengukuran/masuk/' . $id);
    }
    public function download($id)
    {
        $data['title'] = 'Hasil Pengukuran';
        $no_spt = str_replace('-', '/', $id);

        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = form_hasil_ukur.id_penyelenggara');
        $this->db->join('radio_pemancar', 'radio_pemancar.id = form_hasil_ukur.id_pemancar');
        $this->db->join('radio_spek_pemancar', 'radio_spek_pemancar.id_spek = form_hasil_ukur.id_spek_pemancar');
        $this->db->join('radio_spek_antenna', 'radio_spek_antenna.id_spek = form_hasil_ukur.id_spek_antenna');
        $this->db->join('radio_hasil_ukur', 'radio_hasil_ukur.id = form_hasil_ukur.id_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('form_keterangan.no_spt', $no_spt);
        $data['detail'] = $this->db->get()->row_array();

        $this->load->view('template/petugas/header2', $data);
        $this->load->view('pengukuran/download', $data);
        $this->load->view('template/petugas/footer2', $data);
    }
    public function export($id)
    {
        $no_spt = str_replace('-', '/', $id);

        $this->db->select('*');
        $this->db->from('form_hasil_ukur');
        $this->db->join('radio_stasiun', 'radio_stasiun.id = form_hasil_ukur.id_penyelenggara');
        $this->db->join('radio_pemancar', 'radio_pemancar.id = form_hasil_ukur.id_pemancar');
        $this->db->join('radio_spek_pemancar', 'radio_spek_pemancar.id_spek = form_hasil_ukur.id_spek_pemancar');
        $this->db->join('radio_spek_antenna', 'radio_spek_antenna.id_spek = form_hasil_ukur.id_spek_antenna');
        $this->db->join('radio_hasil_ukur', 'radio_hasil_ukur.id = form_hasil_ukur.id_hasil_ukur');
        $this->db->join('form_keterangan', 'form_keterangan.id = form_hasil_ukur.id_spt');
        $this->db->where('form_keterangan.no_spt', $no_spt);
        $data['detail'] = $this->db->get()->row_array();

        $this->load->view('pengukuran/export', $data);
    }
    public function scan($id)
    {
        $data['title'] = 'Download Foto';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['session'] = $id;
        $data['masuk'] = $this->db->get_where('1pengukuran_ket', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['stasiun'] = $this->db->get_where('2pengukuran_stasiun', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['lokasi'] = $this->db->get_where('3pengukuran_lokasi', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['spek'] = $this->db->get_where('4pengukuran_spek_pem', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['ant'] = $this->db->get_where('5pengukuran_spek_ant', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['hasil'] = $this->db->get_where('6pengukuran_hasil', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['harmonisa'] = $this->db->get_where('7pengukuran_harmonisa', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $data['ket_a'] = $this->db->get_where('8pengukuran_ket_akhir', ['user_id' => $this->session->userdata('id'), 'session' => $id])->row_array();
        $user = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $data['user_id'] = $this->db->get_where('8pengukuran_ket_akhir', ['user_id' => $user['user_id']])->row_array();
        $data['scan_freq'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Frekuensi'])->row_array();
        $data['scan_geser'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Pergeseran'])->row_array();
        $data['scan_bw'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Bandwith'])->row_array();
        $data['scan_fs'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Field Strength'])->row_array();
        $data['scan_dev'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Deviasi'])->row_array();
        $data['scan_h1'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Harmonisa 1'])->row_array();
        $data['scan_h2'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Harmonisa 2'])->row_array();
        $data['scan_h3'] = $this->db->get_where('9pengukuran_foto', ['user_id' => $this->session->userdata('id'), 'id_ukur' => $id, 'jenis' => 'Harmonisa 3'])->row_array();
        $this->load->view('template/petugas/header2', $data);
        $this->load->view('pengukuran/scan', $data);
        $this->load->view('template/petugas/footer2', $data);
    }
    public function editfoto()
    {
        $id = $this->input->post('id');
        $config['upload_path']          = './assets/SCAN/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|JPG|PNG|JPEG|BMP';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Frekuensi');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image2')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Pergeseran');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image3')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Bandwith');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image4')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Field Strength');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image5')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Deviasi');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image6')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Harmonisa 1');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image7')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Harmonisa 2');
            $this->db->update('9pengukuran_foto', $scan);
        }
        if ($this->upload->do_upload('image8')) {
            $scan = [
                'file' => $this->upload->data('file_name'),
            ];
            $this->db->where('id_ukur = ', $id);
            $this->db->where('jenis = ', 'Harmonisa 3');
            $this->db->update('9pengukuran_foto', $scan);
        }
        redirect('pengukuran/scan/' . $id);
    }

    public function input_form()
    {
        $id = $this->session->userdata('id');
        //------penyelenggara----------//
        $id_penyelenggara = $this->input->post('penyelenggara'); // id atau nama
        $query_penyelenggara = $this->db->get_where('radio_stasiun', ['id' => $id_penyelenggara])->row_array();
        if ($query_penyelenggara != NULL) { // jika inputnya id
            $penyelenggara = $query_penyelenggara['id']; //selesai
        } else { // jika bukan id
            $data_stasiun_input = [
                'nama_stasiun' => $this->input->post('penyelenggara2'),
                'alamat' => $this->input->post('alamat'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kotamadya' => $this->input->post('kotamadya'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
            ];
            $this->db->insert('radio_stasiun', $data_stasiun_input); // input database
            $row_stas = $this->db->get_where('radio_stasiun', ['nama_stasiun' => $this->input->post('penyelenggara2'), 'alamat' => $this->input->post('alamat'), 'kelurahan' => $this->input->post('kelurahan'), 'kecamatan' => $this->input->post('kecamatan'), 'kotamadya' => $this->input->post('kotamadya')])->row_array();
            $penyelenggara = $row_stas['id']; // id untuk form hasil ukur
        }

        //------pemancar----------//
        $id_pemancar = $this->input->post('alamat_pem'); // id pemancar atau nama
        $query_pemancar = $this->db->get_where('radio_pemancar', ['id' => $id_pemancar])->row_array();
        if ($query_pemancar != NULL) { // jika input adalah id
            $pemancar = $query_pemancar['id']; // selesai
        } else { // jika input bukan id
            $data_pemancar_input = [
                'alamat' => $this->input->post('alamat_pem2'), // input manual
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
            $row_pem = $this->db->get_where('radio_pemancar', ['alamat' => $this->input->post('alamat_pem2'), 'kelurahan' => $this->input->post('kelurahan_pem'), 'kecamatan' => $this->input->post('kecamatan_pem'), 'kotamadya' => $this->input->post('kotamadya_pem'), 'telp' => $this->input->post('telp_pem')])->row_array();
            $pemancar = $row_pem['id']; // selesai
        }

        //------spek pemancar----------//
        $merk_pemancar = $this->input->post('merk'); //id stasiun atau nama merk
        $query_spek_pemancar = $this->db->get_where('radio_spek_pemancar', ['id_stasiun' => $merk_pemancar])->row_array();
        if ($query_spek_pemancar != NULL) { // jika input adalah id
            $spek_pemancar = $query_spek_pemancar['id_spek']; // input menjadi id spek
        } else { // jika input bukan id
            $data_pemancar_spek_input = [
                'merk' => $this->input->post('merk2'),
                'jenis' => $this->input->post('jenis'),
                'no_seri' => $this->input->post('no_seri'),
                'negara' => $this->input->post('negara'),
                'tahun' => $this->input->post('tahun'),
                'frekuensi' => $this->input->post('frekuensi'),
                'kelas_emisi' => $this->input->post('kelas_emisi'),
                'bandwith' => $this->input->post('bandwith'),
                'kedalaman_mod' => $this->input->post('kedalaman_mod'),
                'max_power' => $this->input->post('max_power'),
            ];
            $this->db->insert('radio_spek_pemancar', $data_pemancar_spek_input);
            $row_spek_pem = $this->db->get_where('radio_spek_pemancar', ['merk' => $this->input->post('merk2'), 'jenis' => $this->input->post('jenis'), 'no_seri' => $this->input->post('no_seri'), 'frekuensi' => $this->input->post('frekuensi')])->row_array();
            $spek_pemancar = $row_spek_pem['id_spek'];
        }

        //------spek antenna----------//
        $jenis_antenna = $this->input->post('jenis_ant'); // id stasiun atau jenis antena
        $query_spek_antenna = $this->db->get_where('radio_spek_antenna', ['id_stasiun' => $jenis_antenna])->row_array();
        if ($query_spek_antenna != NULL) { // jika input adalah id
            $spek_antenna = $query_spek_antenna['id_spek']; // input menjadi id spek
        } else { // jika input bukan id
            $data_antenna_spek_input = [
                'jenis_ant' => $this->input->post('jenis_ant2'),
                'polarisasi' => $this->input->post('polarisasi'),
                'elemen' => $this->input->post('elemen'),
                'gain' => $this->input->post('gain'),
                'beam' => $this->input->post('beam'),
                'jenis_kabel' => $this->input->post('jenis_kabel'),
                'tipe_kabel' => $this->input->post('tipe_kabel'),
                'panjang_kabel' => $this->input->post('panjang_kabel'),
            ];
            $this->db->insert('radio_spek_antenna', $data_antenna_spek_input);
            $row_spek_ant = $this->db->get_where('radio_spek_antenna', ['jenis_ant' => $this->input->post('jenis_ant2'), 'polarisasi' => $this->input->post('polarisasi'), 'elemen' => $this->input->post('elemen'), 'gain' => $this->input->post('gain')])->row_array();
            $spek_antenna = $row_spek_ant['id_spek'];
        }

        //------input keterangan----------//
        $kabkota = $this->db->get_where('input_kabupaten', ['id_kab' => $this->input->post('kabkota')])->row_array();
        $keterangan = [
            'upt_ket' => $this->input->post('upt'),
            'tgl_ket' => $this->input->post('tanggal'),
            'provinsi_ket' => $this->input->post('provinsi'),
            'kabkota_ket' => $kabkota['nama_kab'],
            'stl_ket' => $this->input->post('stl'),

            'no_spt' => $this->input->post('no_spt'),
            'tgl_spt' => $this->input->post('tgl_spt'),
            'jenis_sbk' => $this->input->post('jenis_sbk'),
            'kecamatan_ket' => $this->input->post('spt_kecamatan'),
            'jln_ket' => $this->input->post('spt_alamat'),
            'lat_ket' => $this->input->post('spt_lat'),
            'lng_ket' => $this->input->post('spt_lng'),
        ];
        $this->db->insert('form_keterangan', $keterangan);
        $id_spt = $this->db->get_where('form_keterangan', ['no_spt' => $this->input->post('no_spt'), 'tgl_spt' => $this->input->post('tgl_spt')])->row_array();


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
            'id_spek_pemancar' => $spek_pemancar,
            'id_spek_antenna' => $spek_antenna,
            'id_hasil_ukur' => $id_hasil_ukur['id'],
            'id_hasil_scan' => '',
            'id_spt' => $id_spt['id'],
        ];
        $this->db->insert('form_hasil_ukur', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Menginputkan Hasil Ukur!
        </div>');
        redirect('pengukuran/dashboard');
    }
}
