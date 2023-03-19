<?php
defined('BASEPATH') or exit('no direct access allowed');

class POSTController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (sessionId('id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }


    public function post_format()
    {
        $data['title'] = "Post Format";
        $this->load->view('admin/post/postformat', $data);
    }

    public function addPost()
    {
        $type = $this->input->get('type');
        if ($type != 'article' && $type != 'gallery' && $type != 'sorted_list' && $type != 'video' && $type != 'audio' && $type != 'trivia_quiz' && $type != 'personality_quiz') {
            $type = 'article';
        }

        $data['categories'] = $this->CommonModal->getAllRows('categories');
        $data['subcategories'] = $this->CommonModal->getAllRows('categories');

        if (isset($_POST['submit'])) {
            $title = $this->input->post('title');
            $title_slug = $this->input->post('title_slug');
            $summary = $this->input->post('summary');
            $keywords = $this->input->post('keywords');
            $optional_url = $this->input->post('optional_url');
            $content = $this->input->post('content');
            $image_description = $this->input->post('image_description');
            $status = $this->input->post('status');
            $scheduled_post = $this->input->post('scheduled_post');
            $date_published = $this->input->post('date_published');

            $category_id = $this->input->post('category_id');
            $lang_id = $this->input->post('lang_id');
            $scheduled_post = $this->input->post('scheduled_post');
            $date_published = $this->input->post('date_published');
            

            $mainimage = imageUpload('image', 'uploads/subcategory/');
            $file_id = imageUpload('file_id', 'uploads/subcategory/');



            $table = "products";
            $data = array('pro_name' => $pro_name, 'category_id' => $category_id, 'description' => $description, 'price' => $price, 'old_price' => $old_price, 'subcategory_id' => $sub_category_id, 'ldimension' => $ldimension, 'wdimension' => $wdimension, 'hdimension' => $hdimension, 'unit' => $unit);



            $productId = $this->CommonModal->insertRowReturnId($table, $data);
            $countImg = count($_FILES['img']);
            for ($i = 0; $i <= $countImg; $i++) {
                $no = rand();
                if (!empty($_FILES["img"]["name"][$i])) {
                    $folder = "uploads/products/";
                    move_uploaded_file($_FILES["img"]["tmp_name"][$i], "$folder" . $no . $_FILES["img"]["name"][$i]);
                    $file_name1 = $no . $_FILES["img"]["name"][$i];
                    $this->CommonModal->insertRowReturnId('products_image', array('product_id' => $productId, 'pi_name' => $file_name1));
                }
            }

            if ($productId) {
                $this->session->set_flashdata('msg', 'Product  Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url() . 'admin_Dashboard/view_products');
        }



        $title = "Add " . $type;
        $data['title'] = $title;
        $data['postType'] = $type;

        $this->load->view('admin/post/add-post', $data);
    }

    public function viewposts()
    {
        $data['title'] = "Post | Admin Mp Online News";
        $data['posts'] = $this->CommonModal->getAllRows('posts');
        $this->load->view('admin/post/viewposts', $data);
    }

    public function get_subcategory()
    {
        $category_id = $_POST['category_id'];
        $data = $this->CommonModal->getRowById('categories', 'parent_id', $category_id);
        echo '<option>Select Sub Category</option>';
        foreach ($data as $da) {
            echo '<option value="' . $da['id'] . '">' . $da['name'] . '</option>';
        }
    }
}
