<?php
class Products extends Controller
{
    private $modelProduit;
    public function __construct()
    {
        $this->modelProduit = $this->model('Product');
    }

    public function showProduct()
    {
        $data = [];
        $this->view('Products/showProduct', $data);
    }
    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // var_dump($_POST);
            $data = [
                'reference' => trim($_POST['reference']),
                'libelle' => trim($_POST['libelle']),
                'code_barre' => trim($_POST['code_barre']),
                'prix_achat' => trim($_POST['prix_achat']),
                'prix_final' => trim($_POST['prix_final']),
                'prix_offre' => trim($_POST['prix_offre']),
                'Categorie' => trim($_POST['Categorie']),
                'description' => trim($_POST['description']),
                'reference_err' => '',
                'libelle_err' => '',
                'code_barre_err' => '',
                'prix_achat_err' => '',
                'prix_final_err' => '',
                'prix_offre_err' => '',
                'Categorie_err' => '',
                'description_err' => '',
            ];
            if (empty($data['reference'])) {
                $data['reference_err'] = 'please enter reference';
            }
            if (empty($data['libelle'])) {
                $data['libelle_err'] = 'please enter libelle';
            }
            if (empty($data['code_barre'])) {
                $data['code_barre_err'] = 'please enter code_barre';
            }
            if (empty($data['prix_achat'])) {
                $data['prix_achat_err'] = 'please enter prix d"achat';
            }
            if (empty($data['prix_final'])) {
                $data['prix_final_err'] = 'please enter prix final';
            }
            if (empty($data['prix_offre'])) {
                $data['prix_offre_err'] = 'please enter prix d"offre';
            }
            // if (empty($data['Categorie'])) {
            //     $data['Categorie_err'] = 'please enter Categorie';
            // }
            if (empty($data['description'])) {
                $data['description_err'] = 'please enter description';
            }
            
            if (empty($data['reference_err']) && empty($data['libelle_err']) && empty($data['code_barre_err']) && empty($data['prix_achat_err']) &&  empty($data['prix_final_err']) && empty($data['prix_offre_err']) && empty($data['Categorie_err']) && empty($data['description_err'])) {
                $save = $this->modelProduit->addProduit($data);
                if($save){
                    redirect('Dashboard/Dashboard');
                }else{
                    die('something went wrong');
                }
            } else {
                // die('else');
                $this->view('Products/addProduct', $data);
            }
        } else {
            $data = [
                'reference' => '',
                'libelle' => '',
                'code_barre' => '',
                'prix_achat' => '',
                'prix_final' => '',
                'prix_offre' => '',
                'Categorie' => '',
                'description' => '',
                'reference_err' => '',
                'libelle_err' => '',
                'code_barre_err' => '',
                'prix_achat_err' => '',
                'prix_final_err' => '',
                'prix_offre_err' => '',
                'Categorie_err' => '',
                'description_err' => '',
            ];
            $this->view('Products/addProduct', $data);
        };
    }
}
