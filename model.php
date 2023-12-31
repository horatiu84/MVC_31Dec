<?php

class UserModel
{
    private $db;
    public function __construct($db)
    {
        $this->db=$db;
        echo 'Conectare reusita';
    }

    public function getUsers()
    {
        //facem un query in baza de date si salvam rezultatele intr-o variabila
        $querry = "SELECT * FROM users";
        $results = $this->db->query($querry);
        //preluam apoi userii sub forma de array associativ si ii returnam
        return $results->FetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($username,$email)
    {
        $querry = "INSERT INTO users(username, email) VALUES ('$username','$email')";
        return $this->db->query($querry);
    }
}