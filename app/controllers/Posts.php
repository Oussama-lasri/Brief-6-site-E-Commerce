<?php

class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            header('location:' . URLROOT . '/users/login');
        }
        $this->postModel = $this->model('Post');
    }
    public function index()
    {
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }



    // add a posts
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];
            // validate title 
            if (empty($data['title'])) {
                $data['title_err'] = 'please enter title';
            }
            // validate body 
            if (empty($data['body'])) {
                $data['body_err'] = 'please enter body text';
            }
            // if errors not existe
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->addPost($data)) {
                    flash('post_added', 'Post Added', 'alert alert-success');
                    header('location:' . URLROOT . '/Posts/index');
                } else {
                    die('something went wrong'); 
                }
            } else {
                // load view with errors
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => '',
            ];
            $this->view('posts/add', $data);
        }
    }
}
