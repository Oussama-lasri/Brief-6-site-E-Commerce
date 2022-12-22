<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    // register 
    public function register($data){
        $this->db->query('INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES (NULL, :name, :email, :password) ');
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':password',$data['password']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // login user
    public function login($email,$password){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email',$email);
        $row = $this->db->single();
    
    $hached_password = $row->password;
    if(password_verify($password,$hached_password)){
      return $row;
    }else {
      return false;
    }
    }


    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM user WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

       // Check row
       if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    } 


  
  }
 