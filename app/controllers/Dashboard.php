<?php
class Dashboard extends Controller
{

    public function __construct()
    {
        
    }
    public function Dashboard(){
        $data = [
            
        ];  
        $this->view('Dashboard/Dashboard',$data);
    }

    public function showProduct(){
        $data = [
            
        ];  
        $this->view('Dashboard/showProduct',$data);
    }
    public function addProduct(){
        $data = [
            
        ];  
        $this->view('Dashboard/addProduct',$data);
    }
    
}