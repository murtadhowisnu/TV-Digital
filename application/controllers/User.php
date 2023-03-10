<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        // $user = $this->session->userdata('sesi');var_dump($user);die;
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/petugas/header', $data);
        $this->load->view('template/petugas/sidebar', $data);
        $this->load->view('template/petugas/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/petugas/footer', $data);
    }
    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Fullname', 'required|trim');
        if ($this->form_validation->run() ==  false) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/petugas/footer', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            //cek jika ada gambar yg di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile Has Been Updated!
          </div>');
            redirect('user');
        }
    }
    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Repeat Password', 'required|trim|min_length[8]|matches[new_password]');
        if ($this->form_validation->run() ==  false) {
            $this->load->view('template/petugas/header', $data);
            $this->load->view('template/petugas/sidebar', $data);
            $this->load->view('template/petugas/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('template/petugas/footer', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Passowrd!
                </div>');
                redirect('user');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New Password cannot be the same as current password!
                    </div>');
                    redirect('user');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Password Changed!
                    </div>');
                    redirect('user');
                }
            }
        }
    }
}
