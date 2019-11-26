<?php

class User{
    // DB stuff
    private $conn;
    private $table = 'users';

    // User Properties
    public $user_id;
    public $user_name;
    public $email;
    public $password;
    public $created_at;

    // constructor with database

    public function __construct($db){
        $this->conn = $db;
    }

    // GET User
    public function list(){
        // Create query
        $query = 'SELECT user_id, 
        user_name,
        email
         FROM '
         .$this->table.'
         ORDER BY 
         created_at ASC';

         // Prepare statement
         $stmt = $this->conn->prepare($query);

          //Execute query
        $stmt->execute();

        return $stmt;
       }

       // Get Single User By Id
       public function listSingle()
       {
        // Create query
        $query = 'SELECT 
            user_id, 
            user_name,
            email
            FROM '
            .$this->table.'
            WHERE user_id = :id
            LIMIT 0,1';

           // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind ID
        $stmt->bindParam(1, $this->id);

        //Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Set Properties
         $this->user_id=$row['user_id'];
         $this->user_name=$row['user_name'];
         $this->email=$row['email'];

         return $stmt;

       }

    //    // create user
    //    public function create(){
    //        // Create query
    //        $query = 'INSERT INTO ' . 
    //        $this->table . '
    //        SET 
    //        username = :username,
    //        email = :email'
    //    }
}