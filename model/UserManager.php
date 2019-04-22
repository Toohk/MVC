<?php

require ('model\DBManager.php');

class UserManager extends DBManager
{
    
    public function setUser()
    {
        $db = $this->dbConnect();
        $username = $_POST['username']; 
        $email = $_POST['email']; 
        $password = $_POST['password']; 

        $req = $db->prepare('INSERT INTO users(username, password, email) 
        VALUES(:username, :password, :email)');

        $req->execute(array(
	    'username' => $username,
	    'password' => $password,
	    'email' => $email
        ));
    }

    public function getUser()
    {
        return $this->getAll('users','User');
      
    }

};