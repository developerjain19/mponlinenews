<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (sessionId('id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "Home";
        $this->load->view('admin/dashboard', $data);
    }

    public function banner()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Home Banner";
        $data['banner'] = $this->CommonModal->getAllRows('banner');
        $config['upload_path'] = base_url('uploads/banner');

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $no = rand();
            $folder = "./uploads/banner/";
            move_uploaded_file($_FILES["b_img"]["tmp_name"], "$folder" . $no . $_FILES["b_img"]["name"]);
            $file_name = $no . $_FILES["b_img"]["name"];
            $post['b_img'] =  $file_name;
            $savedata = $this->CommonModal->insertRowReturnId('banner', $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', 'Banner added Sucessfully');
                $this->session->set_flashdata('msg_class', 'alert-success');;
            } else {
                $this->session->set_userdata('msg', 'Something went Wrong. please try again later  ');
            }
            redirect(base_url('admin_Dashboard/banner'));
        } else {
            $this->load->view('admin/banner', $data);
        }
    }



    public function fetchorder()
    {
        $filter_status = $this->input->post('filter_status');
        if ($filter_status == '') {
            $data['checkout'] = $this->CommonModal->getRowByIdInOrder('checkout', array('viewfield' => '0'), 'id', 'desc');
        } else {
            $data['checkout'] = $this->CommonModal->getRowByIdInOrder('checkout', array('status' => $filter_status, 'viewfield' => '0'), 'id', 'desc');
        }

        $this->load->view('admin/orderlist', $data);
    }
}
