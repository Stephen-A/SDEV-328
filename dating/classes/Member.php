<?php

/**
 * This class is used to store basic information that can be input by the user
 * when creating a basic ShanesMember object.
 * This information is later displayed on a summary page
 * @author Stephen Allen
 * @version 1.0
 */
class Member
{
    //Private fields
    private string $_fname;
    private string $_lname;
    private string $_age;
    private string $_gender;
    private string $_phone;
    private string $_email;
    private string $_state;
    private string $_seeking;
    private string $_biography;

    //Constructor
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
    }

    /**
     * This function returns the first name that was input by user
     * @return string first name set from user
     */
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * This function sets the first name that was input by user
     * @param string $fname first name input from user
     */
    public function setFname(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * This function returns the last name that was input by user
     * @return string last name set from user
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * This function sets the last name that was input by user
     * @param string $lname last name input from user
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * This function returns the age that was selected by user
     * @return string age set from user
     */
    public function getAge(): string
    {
        return $this->_age;
    }

    /**
     * This function sets the age that was selected by user
     * @param string $age age input from user
     */
    public function setAge(string $age): void
    {
        $this->_age = $age;
    }

    /**
     * This function returns the gender that was selected by user
     * @return string gender set from user
     */
    public function getGender(): string
    {
        return $this->_gender;
    }

    /**
     * This function sets the gender that was selected by user
     * @param string $gender gender selected from user
     */
    public function setGender(string $gender): void
    {
        $this->_gender = $gender;
    }

    /**
     * This function returns the phone number that was input by user
     * @return string phone number set from user
     */
    public function getPhone(): string
    {
        return $this->_phone;
    }

    /**
     * This function sets the phone number that was input by user
     * @param string $phone phone input from user
     */
    public function setPhone(string $phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * This function returns the email address that was input by user
     * @return string email address set from user
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * This function sets the email address that was input by user
     * @param string $email email input from user
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * This function returns the state that was selected by user
     * @return string state selected from user
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * This function sets the state that was selected by user
     * @param string $state state selected from user
     */
    public function setState(string $state): void
    {
        $this->_state = $state;
    }

    /**
     * This function returns the seeking gender that was selected by user
     * @return string seeking gender selected from user
     */
    public function getSeeking(): string
    {
        return $this->_seeking;
    }

    /**
     * This function sets the seeking gender that was selected by user
     * @param string $seeking seeking gender selected from user
     */
    public function setSeeking(string $seeking): void
    {
        $this->_seeking = $seeking;
    }

    /**
     * This function returns the biography that was input by user
     * @return string biography input from user
     */
    public function getBiography(): string
    {
        return $this->_biography;
    }

    /**
     * This function sets the biography that was input by user
     * @param string $biography biography input from user
     */
    public function setBiography(string $biography): void
    {
        $this->_biography = $biography;
    }




} //End of profile class