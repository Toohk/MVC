<?php
class User
{
    private $_id;
    private $_username;
    private $_email;
    private $_password;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
//test2
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    public function setId($id)
    {
        $id = (int) $id;
        if($id > 0)
            $this->_id = $id;
    }
    public function setUsername($username)
    {
        $this->_username = $username;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }


    public function id()
    {
        return $this->_id;
    }
    public function username()
    {
        return $this->_username;
    }
    public function email()
    {
        return $this->_email;
    }
    public function password()
    {
        return $this->_password;
    }
}