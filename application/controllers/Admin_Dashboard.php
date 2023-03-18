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

    public function categories()
    {

        $data['title'] = "Category";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('categories', array('id' => decryptId($BdID)));
            redirect('categories');
            exit;
        }
        $data['type'] = 'parent';
        $data['categories'] = $this->CommonModal->runQuery("SELECT * FROM `categories` WHERE `parent_id` = '0' order by `id` DESC");
        $this->load->view('admin/category/categories', $data);
    }


    public function add_category()
    {
        $data['title'] = "Add Category";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['tag'] = "add";
        $data['type'] = 'parent';

        $data['parentCategories'] = $this->CommonModal->runQuery("SELECT * FROM `categories` WHERE `parent_id` = '0' order by `id` DESC");

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $savedata = $this->Dashboard_model->insertdata('categories', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Category Add Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Category Add Successfully</div>');
            }
            redirect('categories');
        } else {
            $this->load->view('admin/category/add-category', $data);
        }
    }

    public function edit_category($id)
    {

        $data['title'] = 'Update Category';
        $tid = decryptId($id);
        $data['category'] = $this->CommonModal->getRowById('categories', 'id', $tid);
        $data['type'] = 'parent';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $category_id = $this->CommonModal->updateRowById('categories', 'id', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">category Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">category Updated successfully</div>');
            }
            redirect('categories');
        } else {
            $this->load->view('admin/category/edit-category', $data);
        }
    }


    public function subcategories()
    {

        $data['title'] = "Category";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('categories', array('id' => decryptId($BdID)));
            redirect('subcategories');
            exit;
        }
        $data['type'] = 'sub';
        $data['categories'] = $this->CommonModal->runQuery("SELECT * FROM `categories` WHERE `parent_id` != '0' order by `id` DESC");
        $this->load->view('admin/category/subcategories', $data);
    }


    public function add_subcategory()
    {
        $data['title'] = "Add Sub-Category";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['tag'] = "add";
        $data['type'] = 'sub';

        $data['parentCategories'] = $this->CommonModal->runQuery("SELECT * FROM `categories` WHERE `parent_id` = '0' order by `id` DESC");

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $savedata = $this->Dashboard_model->insertdata('categories', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Sub-Category Add Successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Sub-Category Add Successfully</div>');
            }
            redirect('subcategories');
        } else {
            $this->load->view('admin/category/add-category', $data);
        }
    }

    public function edit_subcategory($id)
    {

        $data['title'] = 'Update Sub-Category';
        $tid = decryptId($id);
        $data['category'] = $this->CommonModal->getRowById('categories', 'id', $tid);
        $data['parentCategories'] = $this->CommonModal->runQuery("SELECT * FROM `categories` WHERE `parent_id` = '0' order by `id` DESC");

        $data['type'] = 'sub';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $category_id = $this->CommonModal->updateRowById('categories', 'id', $tid, $post);
            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Subcategory Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Subcategory Updated successfully</div>');
            }
            redirect('subcategories');
        } else {
            $this->load->view('admin/category/edit-category', $data);
        }
    }
}
