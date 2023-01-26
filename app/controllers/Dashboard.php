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

    public function gestionProduct(){
        $data = [
            
        ];  
        $this->view('Dashboard/gestionProduct',$data);
    }
    public function gestionCategorie(){
        $data = [
            
        ];  
        $this->view('Dashboard/gestionCategorie',$data);
    }
    
}