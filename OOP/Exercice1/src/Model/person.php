<?php
namespace Model;
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/25/2019
 * Time: 10:46 AM
 */

class person
{
    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails=[];

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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param array $emails
     * @return person
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }


}

