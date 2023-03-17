<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $get['title'] = "Admin Login";
        $get['favicon'] = "assets/images/logo.png";
        if ($this->session->userdata('id')) {
            redirect(base_url('admin_Dashboard'));
        } else {
            $this->load->view('admin/login', $get);
        }
    }

    public function adminlogin()
    {
     
        $this->form_validation->set_rules('email', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('users', 'email', $email);
            if ($data) {
                $id = $data[0]['id'];
                $f_email = $data[0]['email'];
                $f_password = $data[0]['password'];

                if ($password != $f_password) {
                    flashData('login_error', 'Enter a valid Password.');
                } else {
                    $this->session->set_userdata(array('id' => $id, 'email' => $email));
                    redirect('Admin_Dashboard');
                }
            } else {
                flashData('login_error', 'Enter a valid Username ');
            }
        }
        $this->load->view('admin/login');
    }

    public function logout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('id');
        redirect(base_url('admin'));
    }
}
