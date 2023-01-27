<?php 
class categorie {


    private $db;
    public function __construct()
    {
        $this->db = new DataBase;
    }

    public function getCategories(){
    $this->db->query('SELECT * FROM `categorie`');
        $results = $this->db->resultSet();
        return $results;
    }
    public function addCategorie($data){
        $this->db->query('INSERT INTO categorie (`id_categorie`, `Nom_categorie`, `Descreption`, `Photo_categorie`) VALUES (NULL,:Nom_categorie,:Descreption,:Photo_categorie)');
        $this->db->bind(':Nom_categorie', $data['Name_categorie'] );
        $this->db->bind(':Descreption', $data['description'] );
        $this->db->bind(':Photo_categorie', $data['image_categorie'] );
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
    }
    public function updateCategorie($data){
        $this->db->query('UPDATE `categorie` SET Nom_categorie = :Nom_categorie , Descreption = :Descreption ,Photo_categorie = :Photo_categorie WHERE id_categorie = :id');
        $this->db->bind(':id',$data['id_categorie']);
        $this->db->bind(':Nom_categorie', $data['Name_categorie'] );
        $this->db->bind(':Descreption', $data['description'] );
        $this->db->bind(':Photo_categorie', $data['image_categorie'] );
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function deleteCategorie($id){
        $this->db->query('DELETE FROM Categorie WHERE id_categorie = :id  ');
        $this->db->bind(':id',$id);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }
    public function getCategorieById($id){
        $this->db->query('SELECT * FROM categorie WHERE id_categorie = :id');
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
    }
}


?>