<?php
class Categories extends Controller
{
    private $modelCategorie;
    public function __construct()
    {
        $this->modelCategorie = $this->model('Categorie');
    }


    public function addCategorie()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'Name_categorie' => $_POST['Name_categorie'],
                'image_categorie' => $_POST['image_categorie'],
                'description' => $_POST['description'],
                'Name_categorie_err' => '',
                'image_categorie_err' => '',
                'description_err' => '',
            ];
            if (empty($data['Name_categorie'])) {
                $data['Name_categorie_err'] = 'please enter name categorie';
            }
            if (empty($data['image_categorie'])) {
                $data['image_categorie_err'] = 'please enter image categorie';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'please enter description categorie';
            }

            if (empty($data['Name_categorie_err']) && empty($data['image_categorie_err']) && empty($data['description_err'])) {
                if ($this->modelCategorie->addCategorie($data)) {
                    die('success');
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('Categories/addCategorie', $data);
            }
        } else {
            $data = [
                'Name_categorie' => '',
                'image_categorie' => '',
                'description' => '',
                'Name_categorie_err' => '',
                'image_categorie_err' => '',
                'description_err' => '',
            ];
            $this->view('Categories/addCategorie', $data);
        }
    }
    public function updateCategorie($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id_categorie' => $id,
                'Name_categorie' => $_POST['Name_categorie'],
                'image_categorie' => $_POST['image_categorie'],
                'description' => $_POST['description'],
                'Name_categorie_err' => '',
                'image_categorie_err' => '',
                'description_err' => '',
            ];
            if (empty($data['Name_categorie'])) {
                $data['Name_categorie_err'] = 'please enter name categorie';
            }
            if (empty($data['image_categorie'])) {
                $data['image_categorie_err'] = 'please enter image categorie';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'please enter description categorie';
            }

            if (empty($data['Name_categorie_err']) && empty($data['image_categorie_err']) && empty($data['description_err'])) {
                if ($this->modelCategorie->updateCategorie($data)) {
                    redirect('dashboard/gestionCategorie');
                } else {
                    die('something went wrong');
                }
            } else {
                $this->view('Categories/updateCategorie', $data);
            }
        } else {
            $categorie =  $this->modelCategorie->getCategorieById($id);
            $data = [
                'id_categorie' => $id,
                'Name_categorie' => $categorie->Nom_categorie,
                'image_categorie' => $categorie->Photo_categorie,
                'description' => $categorie->Descreption,
                'Name_categorie_err' => '',
                'image_categorie_err' => '',
                'description_err' => '',
            ];
            $this->view('Categories/updateCategorie', $data);
        }
    }
    public function deleteCategorie($id)
    {

        if ($this->modelCategorie->deleteCategorie($id)) {
            // die('success');
            flash('Produit_message', 'produit(s) Supprimer ', 'alert alert-danger');
            redirect('dashboard/gestionCategorie');
        } else {
            die('Something went wrong');
        }
    }
}
