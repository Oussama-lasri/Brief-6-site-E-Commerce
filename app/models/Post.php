<?php
class Post
{
    private $db;
    public function __construct()
    {
        $this->db = new DataBase;
    }
    public function getPosts()
    {
        $this->db->query('SELECT *,
                        posts.id_posts as IdPost,
                        user.id_user as IdUser 
                        FROM posts
                        INNER JOIN user
                        on posts.id_posts = user.id_user
                        ORDER BY posts.created_at');
        $results = $this->db->resultSet();
        return $results;
    }


    //insert post in database
    public function addPost($data){
        
    }
}
