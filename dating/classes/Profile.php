<?php

class Profile
{
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_biography;
    private $_indoor;
    private $_outdoor;

    public function __construct()
    {
        $this->_fname = "";
        $this->_lname = "";
        $this->_age = "";
        $this->_gender = "";
        $this->_phone = "";
        $this->_email = "";
        $this->_state = "";
        $this->_seeking = "";
        $this->_biography = "";
        $this->_indoor = "";
        $this->_outdoor = "";
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->_age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->_gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * @param mixed $seeking
     */
    public function setSeeking($seeking): void
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return mixed
     */
    public function getBiography()
    {
        return $this->_biography;
    }

    /**
     * @param mixed $biography
     */
    public function setBiography($biography): void
    {
        $this->_biography = $biography;
    }

    /**
     * @return mixed
     */
    public function getIndoor()
    {
        return $this->_indoor;
    }

    /**
     * @param mixed $indoor
     */
    public function setIndoor($indoor): void
    {
        $this->_indoor = $indoor;
    }

    /**
     * @return mixed
     */
    public function getOutdoor()
    {
        return $this->_outdoor;
    }

    /**
     * @param mixed $outdoor
     */
    public function setOutdoor($outdoor): void
    {
        $this->_outdoor = $outdoor;
    }

} //End of profile class