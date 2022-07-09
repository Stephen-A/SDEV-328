<?php

class DatingController
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function informationForm1()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST['premium'])) {
                $profile = new PremiumShanesMember();
            } else {
                $profile = new ShanesMember();
            }

            $_SESSION['profile'] = $profile;

            $fname = $_POST['fname'];
            $this->_f3->set('fname', $fname);
            if (DatingValidation::validName($fname)) {
                $_SESSION['profile']->setFname($fname);
            } elseif (empty($fname)) {
                $this->_f3->set('errors["fname"]', 'Please enter your first name');
            } else {
                $this->_f3->set('errors["fname"]', 'Please enter a valid first name');
            }

            $lname = $_POST['lname'];
            $this->_f3->set('lname', $lname);
            if (DatingValidation::validName($lname)) {
                $_SESSION['profile']->setLname($lname);
            } elseif (empty($lname)) {
                $this->_f3->set('errors["lname"]', 'Please enter your last name');
            } else {
                $this->_f3->set('errors["lname"]', 'Please enter a valid last name');
            }

            $age = $_POST['age'];
            $this->_f3->set('age', $age);
            if (DatingValidation::validAge($age)) {
                $_SESSION['profile']->setAge($age);
            } else {
                $this->_f3->set('errors["age"]', 'Please select a valid age');
            }

            $gender = $_POST['gender'];
            if(empty($gender)){
                $gender = "None Selected";
            }
            $this->_f3->set('gender', $gender);
            $_SESSION['profile']->setGender($gender);

            $phone = $_POST['phone'];
            $this->_f3->set('phone', $phone);
            if (DatingValidation::validPhone($phone)) {
                $_SESSION['profile']->setPhone($phone);
            } elseif (empty($phone)) {
                $this->_f3->set('errors["phone"]', 'Please enter your phone number');
            } else {
                $this->_f3->set('errors["phone"]', 'Please enter a valid phone number');
            }

            //Redirect to next page if there are no errors found
            if (empty($this->_f3->get('errors'))) {
                header('location: information2');
            }
        }

        $this->_f3->set('genders', DatingDataLayer::getGender());
        $view = new Template();
        echo $view->render('views/informationForm1.html');
    }

    function informationForm2()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];
            $this->_f3->set('email', $email);
            if(DatingValidation::validEmail($email)) {
                $_SESSION['profile']->setEmail($email);
            } else {
                $this->_f3->set('errors["email"]', 'Please enter a valid email address');
            }

            $seeking = $_POST['seeking'];
            if (empty($seeking)) {
                $seeking = "None Selected";
            }
            $this->_f3->set('seekingGender', $seeking);
            $_SESSION['profile']->setSeeking($seeking);

            $state = $_POST['state'];
            $this->_f3->set('state', $state);
            $_SESSION['profile']->setState($state);

            $biography = $_POST['biography'];
            $this->_f3->set('biography', $biography);
            $_SESSION['profile']->setBiography($biography);

            if(empty($this->_f3->get('errors'))) {
                if($_SESSION['profile'] instanceof PremiumShanesMember) {
                    header('location: information3');
                } else {
                    header('location: informationSummary');
                }
            }
        }

        $this->_f3->set('genders', DatingDataLayer::getGender());
        $view = new Template();
        echo $view->render('views/informationForm2.html');
    }

    function informationForm3()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if($_SESSION['profile'] instanceof PremiumShanesMember) {

                $indoor = $_POST['indoor'];
                if(empty($indoor)) {
                    $_SESSION['indoor'] = "";
                } else if(DatingValidation::validIndoor($indoor)) {
                    $this->_f3->set('indoor', $indoor);
                    $_SESSION['profile']->setInDoorInterests($indoor);
                } else {
                    $this->_f3->set('errors["indoor"]', 'Please select valid option(s)');
                }

                $outdoor = $_POST['outdoor'];
                if(empty($outdoor)) {
                    $_SESSION['outdoor'] = "";
                } else if(DatingValidation::validOutdoor($outdoor)) {
                    $this->_f3->set('outdoor', $outdoor);
                    $_SESSION['profile']->setOutDoorInterests($outdoor);
                } else {
                    $this->_f3->set('errors["outdoor"]', 'Please select valid option(s)');
                }
            }
            if(empty($this->_f3->get('errors'))) {
                header('location: informationSummary');
            }
        }

        $this->_f3->set('indoors', DatingDataLayer::getIndoor());
        $this->_f3->set('outdoors', DatingDataLayer::getOutdoor());
        $view = new Template();
        echo $view->render('views/informationForm3.html');
    }

    function informationSummary()
    {
        $view = new Template();
        echo $view->render('views/informationSummary.html');
    }
} //End of DatingController
