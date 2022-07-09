<?php

class Controller
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

    function order()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            var_dump($_POST);

            $food = $_POST['food'];
            $this->_f3->set('userFood', $food);

            $meal = "";
            if (isset($_POST['meal'])) {
                $meal = $_POST['meal'];
            }
            $this->_f3->set('userMeal', $meal);

            //Check if food is valid
            if (Validation::validFood($food))
            {
                $order = new Order();
                $order->setFood($food);
                //Store the food in session array if the food is valid
                $_SESSION['order'] = $order;
            }
            //Data is not valid -> store an error message
            else
            {
                $this->_f3->set('errors["food"]', 'Please enter a food with at least 3 characters');
            }
            //Check if meal is valid
            if(Validation::validMeal($meal))
            {
                //Store the meal in session array if the meal is valid
                $_SESSION['order']->setMeal($meal);
            }
            else
            {
                $this->_f3->set('errors["meal"]', 'Please select a meal');
            }
                header('location: order2');
        }
        //Add meal data to hive
        $this->_f3->set('meals', DataLayer::getMeals());

        $view = new Template();
        echo $view->render('views/orderForm1.html');
    }

    function order2()
    {
        $this->_f3->set('condiments', DataLayer::getCondiments());

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['conds'])) {
                $conds = "none selected";
            } else {
                $conds = implode(", ", $_POST['conds']);
            }

            $_SESSION['order']->setCondiments($conds);
            header('location: orderSummary');
        }


        $view = new Template();
        echo $view->render('views/orderForm2.html');
    }

    function admin()
    {
        $orders = $GLOBALS['dataLayer']->viewOrders();
        var_dump($orders);
        $this->_f3->set('orders', $orders);

        $view = new Template();
        echo $view->render("views/admin.html");
    }

    function orderSummary()
    {

        $orderId = $GLOBALS['dataLayer']->saveOrder($_SESSION['order']);
        $this->_f3->set('orderId', $orderId);

        $view = new Template();
        echo $view->render('views/orderSummary.html');

        session_destroy();
    }
}
