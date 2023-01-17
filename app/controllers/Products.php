<?php
class Products extends Controller
{

    public function __construct()
    {
        
    }

    public function showProduct(){
       $data = [
            
        ];  
        $this->view('Products/showProduct',$data);
    }
    public function addProduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'reference'=> trim($_POST['reference']),
                'libelle' =>trim($_POST['libelle']),
                'code_bare' =>trim($_POST['code_bare']),
                'prix_achat' =>trim($_POST['prix_achat']),
                'prix_final' =>trim($_POST['prix_final']),
                'prix_offre' =>trim($_POST['prix_offre']),
                'Categorie' =>trim($_POST['Categorie']),
                'description' =>trim($_POST['description']),
                'reference_err'=> '',
                'libelle_err' =>'',
                'code_bare_err' =>'',
                'prix_achat_err' =>'',
                'prix_final_err' =>'',
                'prix_offre_err' =>'',
                'Categorie_err' =>'',
                'description_err' =>'',
            ];
            if(empty($data['reference'])){
                $data['reference_err'] = 'please enter reference';  
            }

            $this->view('Products/addProduct',$data);
        }
        else{
        $data = [
                'reference'=> '',
                'libelle' =>'',
                'code_bare' =>'',
                'prix_achat' =>'',
                'prix_final' =>'',
                'prix_offre' =>'',
                'Categorie' =>'',
                'description' =>'',
                'reference_err'=> '',
                'libelle_err' =>'',
                'code_bare_err' =>'',
                'prix_achat_err' =>'',
                'prix_final_err' =>'',
                'prix_offre_err' =>'',
                'Categorie_err' =>'',
                'description_err' =>'',
        ];  
        $this->view('Products/addProduct',$data);
    };
    }
    
}