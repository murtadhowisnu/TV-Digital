<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Menu Added!
          </div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/admin/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Submenu Added!
          </div>');
            redirect('menu/submenu');
        }
    }

    public function delete($id)
    {
        $this->db->delete('user_sub_menu', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Submenu Deleted!
        </div>');

        redirect('menu/submenu');
    }


    function edit()
    {
        $this->load->model('Menu_model', 'submenu');
        $id = $this->input->post('id');
        $data = array(
            'title'  => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
        );
        $this->submenu->subMenuEdit($data, $id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Submenu Edited!
        </div>');
        redirect('menu/submenu');
    }



    public function activation($id)
    {
        $is_active = ['is_active' => 1];
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $is_active);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Submenu Activate! 
          </div>');
        redirect('menu/submenu');
    }

    public function deleteActivation($id)
    {
        $is_active = ['is_active' => 0];
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $is_active);

        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            Submenu Disabled! 
          </div>');
        redirect('menu/submenu');
    }
}
