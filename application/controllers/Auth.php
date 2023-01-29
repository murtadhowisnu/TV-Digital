<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nip', 'NIP', 'trim');
        $this->form_validation->set_rules('password', 'Password');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else { //validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();
        if ($user) { //jika login dengan HANKAM
            if (password_verify($password, $user['password'])) {
                if ($user['is_active'] == '1') { //akun aktif
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'sesi' => date('Ymdhis'),
                    ];
                    $this->session->set_userdata($data);
                    if ($data['role_id'] == 1) {
                        redirect('admin');
                    } else if ($data['role_id'] == 2) {
                        redirect('pengukuran/dashboard');
                    }
                } else { //akun tidak aktif
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This NIP is not activated yet!
                    </div>');
                    redirect('auth');
                }
            } else { //salah password
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password!
                </div>');
                redirect('auth');
            }
        } else { //belum registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This NIP is not Registered!
            </div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!
          </div>');
        redirect('auth');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
