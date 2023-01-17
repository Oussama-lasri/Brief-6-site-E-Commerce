<?php 
class Admin extends Controller{
    public function __construct()
    {
        
    }

    public function loginAdmin(){
        $data = [
            
        ];  
        $this->view('Admin/loginAdmin',$data);
    }
}