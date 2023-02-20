<?php
class Dashboard extends Controller
{
    private $modelProduct;
    private $modelCategorie;
    public function __construct()
    {
        $this->modelProduct = $this->model('Product');
        $this->modelCategorie = $this->model('Categorie');
        
    }
    public function Dashboard(){
        $Products = $this->modelProduct->getProduct();
        $data = [
            'products' => $Products,
        ];  
        $this->view('Dashboard/Dashboard',$data);
    }

    public function gestionProduct(){
        $Products = $this->modelProduct->getProduct();
        $data = [
            'products' => $Products,
        ];   
        $this->view('Dashboard/gestionProduct',$data);
    }
    public function gestionCategorie(){
        $categories = $this->modelCategorie->getCategories();
        $data = [
            'Categories'=> $categories ,
        ];  
        $this->view('Dashboard/gestionCategorie',$data);
    }
    public function gestionCommande(){
        // $Commands = $this->modelCommands->getCommande();
        $data = [
            'Commands'=> '' ,
        ];  
        $this->view('Dashboard/gestionCommande',$data);
    }
    
}