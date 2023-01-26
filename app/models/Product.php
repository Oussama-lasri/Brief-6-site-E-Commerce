<?php
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new DataBase;
    }
    public function getPosts()
    {
        $this->db->query('SELECT * from Produit');
        $results = $this->db->resultSet();
        return $results;
    }


    //insert post in database
    public function addProduit($data){
        $this->db->query('INSERT INTO `produit`(`id_Produit`, `reference`, `libelle`, `code_barre`, `prix_achat`, `prix_final`, `prix_offre`, `descreption`, `id_categorie`) VALUES 
                                        (NULL,:reference,:libelle,:code_barre,:prix_achat,:prix_final,:prix_offre,:descreption,:id_categorie) ');
        $this->db->bind(':reference',$data['reference']);
        $this->db->bind(':libelle',$data['libelle']);   
        $this->db->bind(':code_barre',$data['code_barre']);
        $this->db->bind(':prix_achat',$data['prix_achat']);
        $this->db->bind(':prix_final',$data['prix_final']);
        $this->db->bind(':prix_offre',$data['prix_offre']);
        $this->db->bind(':descreption',$data['description']);
        $this->db->bind(':id_categorie',$data['Categorie']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // get post by id
    public function getProduitById($id){
        $this->db->query('SELECT * FROM produit WHERE id_Produit = :id');
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
    }
    public function updateProduit($data){
        $this->db->query('UPDATE `produit` SET `reference`=:reference,`libelle`=:libelle,`code_barre`=:code_barre,`prix_achat`=:prix_achat,`prix_final`=:prix_final,`prix_offre`=:prix_offre,`descreption`=:descreption,`id_categorie`=:id_categorie WHERE id_Produit=:id ');
        $this->db->bind(':id_Produit',$data['id_Produit']);
        $this->db->bind(':reference',$data['reference']);
        $this->db->bind(':libelle',$data['libelle']);   
        $this->db->bind(':code_barre',$data['code_barre']);
        $this->db->bind(':prix_achat',$data['prix_achat']);
        $this->db->bind(':prix_final',$data['prix_final']);
        $this->db->bind(':prix_offre',$data['prix_offre']);
        $this->db->bind(':descreption',$data['description']);
        $this->db->bind(':id_categorie',$data['Categorie']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function deleteProduit($id){
        $this->db->query('DELETE FROM produit WHERE id_Produit = :id  ');
        $this->db->bind(':id',$id);
        


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }
}
