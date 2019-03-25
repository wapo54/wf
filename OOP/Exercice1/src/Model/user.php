<?php
namespace Model;
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/25/2019
 * Time: 11:08 AM
 */

class user
{
    private $id;
    protected $roles=[];
    protected $password;
    protected $salt;
    protected $username;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return user
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return user
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     * @return user
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return user
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function eraseCredentials(){
        $this->salt=null;
        $this->password=null;
        return $this;
        
        //other solution
        //$ this-> setSalt(null);
        // this-> setPassword(null);
        // return $this;
    }
}