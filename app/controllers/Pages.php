<?php
class Pages extends Controller{
    public function __construct()
    {
        // $this->postModel = $this->model('Post');
    }
    public function index() {
        if(isLoggedIn()){
            header('location:' . URLROOT . '/posts/index');
        }
        $data = [
        'title' => 'index',
        'descreption' => 'For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.'
    ];
        $this->view('pages/index',$data);
        
    }
    public function about() {
        $data = [
            'title' => 'about',
            'descreption' => 'For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t add any .navbar-expand class.'
        ];  
        $this->view('pages/about',$data);
        
    }
}