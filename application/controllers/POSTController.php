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

        $title = "add_" . $type;
        $data['title'] = $title;
        $data['postType'] = $type;

        $this->load->view('admin/post/add-post', $data);
    }
}
