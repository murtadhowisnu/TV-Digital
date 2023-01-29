<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model', 'm_admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->db->get('form_hasil_ukur')->num_rows();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/admin/footer', $data);
    }
    public function laporan()
    {
        $data['title'] = 'History Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*');
        $this->db->from('2pengukuran_stasiun');
        $this->db->join('8pengukuran_ket_akhir', '8pengukuran_ket_akhir.id = 2pengukuran_stasiun.id');
        $this->db->order_by('2pengukuran_stasiun.id', 'DESC');
        $data['total'] = $this->db->get()->result_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/table/laporan/total', $data);
        $this->load->view('template/admin/footer', $data);
    }
    public function history_info($id)
    {
        $data['title'] = 'History Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*');
        $this->db->from('2pengukuran_stasiun');
        $this->db->join('user', 'user.id = 2pengukuran_stasiun.user_id');
        $this->db->where('2pengukuran_stasiun.session = ', $id);
        $data['petugas'] = $this->db->get()->row_array();
        $data['masuk'] = $this->db->get_where('1pengukuran_ket', ['session' => $id])->row_array();
        $data['stasiun'] = $this->db->get_where('2pengukuran_stasiun', ['session' => $id])->row_array();
        $data['lokasi'] = $this->db->get_where('3pengukuran_lokasi', ['session' => $id])->row_array();
        $data['spek'] = $this->db->get_where('4pengukuran_spek_pem', ['session' => $id])->row_array();
        $data['ant'] = $this->db->get_where('5pengukuran_spek_ant', ['session' => $id])->row_array();
        $data['hasil'] = $this->db->get_where('6pengukuran_hasil', ['session' => $id])->row_array();
        $data['harmonisa'] = $this->db->get_where('7pengukuran_harmonisa', ['session' => $id])->row_array();
        $data['ket_a'] = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $this->db->select('*');
        $this->db->from('6pengukuran_hasil');
        $this->db->where('6pengukuran_hasil.session = ', $id);
        $data['bw'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('4pengukuran_spek_pem');
        $this->db->where('4pengukuran_spek_pem.session = ', $id);
        $data['max_p'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('7pengukuran_harmonisa');
        $this->db->where('7pengukuran_harmonisa.session = ', $id);
        $data['hrm'] = $this->db->get()->row_array();
        $this->db->select_max('session');
        $this->db->from('4pengukuran_spek_pem');
        $max = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('4pengukuran_spek_pem');
        $this->db->where('4pengukuran_spek_pem.session = ', $max['session']);
        $data['geser'] = $this->db->get()->row_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/table/laporan/history_info', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function download_info($id)
    {
        $data['title'] = 'Hasil Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masuk'] = $this->db->get_where('1pengukuran_ket', ['session' => $id])->row_array();
        $data['stasiun'] = $this->db->get_where('2pengukuran_stasiun', ['session' => $id])->row_array();
        $data['lokasi'] = $this->db->get_where('3pengukuran_lokasi', ['session' => $id])->row_array();
        $data['spek'] = $this->db->get_where('4pengukuran_spek_pem', ['session' => $id])->row_array();
        $data['ant'] = $this->db->get_where('5pengukuran_spek_ant', ['session' => $id])->row_array();
        $data['hasil'] = $this->db->get_where('6pengukuran_hasil', ['session' => $id])->row_array();
        $data['harmonisa'] = $this->db->get_where('7pengukuran_harmonisa', ['session' => $id])->row_array();
        $data['ket_a'] = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $this->db->select('*');
        $this->db->from('6pengukuran_hasil');
        $this->db->where('6pengukuran_hasil.session = ', $id);
        $data['bw'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('4pengukuran_spek_pem');
        $this->db->where('4pengukuran_spek_pem.session = ', $id);
        $data['max_p'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('7pengukuran_harmonisa');
        $this->db->where('7pengukuran_harmonisa.session = ', $id);
        $data['hrm'] = $this->db->get()->row_array();
        $this->load->view('template/header2', $data);
        $this->load->view('admin/table/laporan/download_info', $data);
        $this->load->view('template/footer2', $data);
    }
    public function export($id)
    {
        $data['title'] = 'Hasil Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['masuk'] = $this->db->get_where('1pengukuran_ket', ['session' => $id])->row_array();
        $data['stasiun'] = $this->db->get_where('2pengukuran_stasiun', ['session' => $id])->row_array();
        $data['lokasi'] = $this->db->get_where('3pengukuran_lokasi', ['session' => $id])->row_array();
        $data['spek'] = $this->db->get_where('4pengukuran_spek_pem', ['session' => $id])->row_array();
        $data['ant'] = $this->db->get_where('5pengukuran_spek_ant', ['session' => $id])->row_array();
        $data['hasil'] = $this->db->get_where('6pengukuran_hasil', ['session' => $id])->row_array();
        $data['harmonisa'] = $this->db->get_where('7pengukuran_harmonisa', ['session' => $id])->row_array();
        $data['ket_a'] = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $this->db->select('*');
        $this->db->from('6pengukuran_hasil');
        $this->db->where('6pengukuran_hasil.session = ', $id);
        $data['bw'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('4pengukuran_spek_pem');
        $this->db->where('4pengukuran_spek_pem.session = ', $id);
        $data['max_p'] = $this->db->get()->row_array();
        $this->db->select('*');
        $this->db->from('7pengukuran_harmonisa');
        $this->db->where('7pengukuran_harmonisa.session = ', $id);
        $data['hrm'] = $this->db->get()->row_array();
        $this->load->view('admin/table/laporan/export', $data);
    }
    public function scan($id)
    {
        $data['title'] = 'Download Foto';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['id'] = $id;
        $data['masuk'] = $this->db->get_where('1pengukuran_ket', ['session' => $id])->row_array();
        $data['stasiun'] = $this->db->get_where('2pengukuran_stasiun', ['session' => $id])->row_array();
        $data['lokasi'] = $this->db->get_where('3pengukuran_lokasi', ['session' => $id])->row_array();
        $data['spek'] = $this->db->get_where('4pengukuran_spek_pem', ['session' => $id])->row_array();
        $data['ant'] = $this->db->get_where('5pengukuran_spek_ant', ['session' => $id])->row_array();
        $data['hasil'] = $this->db->get_where('6pengukuran_hasil', ['session' => $id])->row_array();
        $data['harmonisa'] = $this->db->get_where('7pengukuran_harmonisa', ['session' => $id])->row_array();
        $data['ket_a'] = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $user = $this->db->get_where('8pengukuran_ket_akhir', ['session' => $id])->row_array();
        $data['user_id'] = $this->db->get_where('8pengukuran_ket_akhir', ['user_id' => $user['user_id']])->row_array();
        $data['scan_freq'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Frekuensi'])->row_array();
        $data['scan_geser'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Pergeseran'])->row_array();
        $data['scan_bw'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Bandwith'])->row_array();
        $data['scan_fs'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Field Strength'])->row_array();
        $data['scan_dev'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Deviasi'])->row_array();
        $data['scan_h1'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Harmonisa 1'])->row_array();
        $data['scan_h2'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Harmonisa 2'])->row_array();
        $data['scan_h3'] = $this->db->get_where('9pengukuran_foto', ['id_ukur' => $id, 'jenis' => 'Harmonisa 3'])->row_array();
        $this->load->view('template/header2', $data);
        $this->load->view('admin/table/laporan/scan', $data);
        $this->load->view('template/footer2', $data);
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
        redirect('admin/scan/' . $id);
    }
    public function delete_info($id)
    {
        $this->db->delete('1pengukuran_ket', array('id' => $id));
        $this->db->delete('2pengukuran_stasiun', array('id' => $id));
        $this->db->delete('3pengukuran_lokasi', array('id' => $id));
        $this->db->delete('4pengukuran_spek_pem', array('id' => $id));
        $this->db->delete('5pengukuran_spek_ant', array('id' => $id));
        $this->db->delete('6pengukuran_hasil', array('id' => $id));
        $this->db->delete('7pengukuran_harmonisa', array('id' => $id));
        $this->db->delete('8pengukuran_ket_akhir', array('id' => $id));
        $this->db->delete('9pengukuran_foto', array('id_ukur' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Pengukuran Deleted!
        </div>');
        redirect('admin/laporan');
    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('template/admin/footer', $data);
    }
    public function petugas()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'This Email has already registered!'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/userlist');
        } else {
            $this->load->helper('date');
            $format = "%Y-%m-%d";
            $data = [
                'nip' => ($this->input->post('nip', true)),
                'name' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telp' => ($this->input->post('telp', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'avatar.png',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => @mdate($format)
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class ="alert alert-success" role ="alert">Petugas Telah Ditambahkan! </div>');
            redirect('admin/userlist');
        }
    }
    function edit()
    {
        $this->load->model('Menu_model', 'editPetugas');
        $id = $this->input->post('id');
        $data = array(
            'nip'  => $this->input->post('nip'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('name'),
            'telp' => $this->input->post('telp'),
        );
        $this->editPetugas->petugasEdit($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Petugas Telah Diedit!
        </div>');
        redirect('admin/userlist');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('template/admin/footer', $data);
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Changed!
          </div>');
    }
    public function userlist()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id !=', 1);
        $data['userlist'] = $this->db->order_by('date_created desc');
        $data['userlist'] = $this->db->get('user')->result_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/userlist', $data);
        $this->load->view('template/admin/footer', $data);
    }
    public function delete($id)
    {
        $this->db->delete('user', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        User Deleted!
        </div>');
        redirect('admin/userlist');
    }
    public function download()
    {
        $data['title'] = 'Hasil Pengukuran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['form1'] = $this->db->get('1pengukuran_ket')->result_array();
        $data['row'] = $this->db->get('8pengukuran_ket_akhir')->num_rows();
        $data['form2'] = $this->db->get('2pengukuran_stasiun')->result_array();
        $data['form3'] = $this->db->get('3pengukuran_lokasi')->result_array();
        $data['form4'] = $this->db->get('4pengukuran_spek_pem')->result_array();
        $data['form5'] = $this->db->get('5pengukuran_spek_ant')->result_array();
        $data['form6'] = $this->db->get('6pengukuran_hasil')->result_array();
        $data['form7'] = $this->db->get('7pengukuran_harmonisa')->result_array();
        $data['form8'] = $this->db->get('8pengukuran_ket_akhir')->result_array();
        $this->load->view('admin/download', $data);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
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
        redirect('admin/history_info/' . $id);
    }
    public function edit8()
    {
        $this->load->model('Menu_model', 'menuedit');
        $id = $this->input->post('id');
        $data = array(
            'stl'  => $this->input->post('stl'),
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
        redirect('admin/history_info/' . $id);
    }
}
