<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the necessary files
require_once('vendor/autoload.php');

//Start session on every page
session_start();

$dataLayer = new DataLayer();

//Create an instance of the Base class
$f3 = Base::instance();

$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

//Define an order route
$f3->route('GET|POST /order', function() {
    $GLOBALS['con']->order();
});

//Define an order2 route
$f3->route('GET|POST /order2', function()
{
   $GLOBALS['con']->order2();
});

$f3->route('GET|POST /orderSummary', function()
{
    $GLOBALS['con']->orderSummary();
});

$f3->route('GET /admin', function()
{
    $GLOBALS['con']->admin();
});










//Define routes for Breakfast, Lunch, Dinner
$f3->route('GET /breakfast', function()
{
    $view = new Template();
    echo $view->render('views/breakfast.html');
});

$f3->route('GET /lunch', function()
{

    $view = new Template();
    echo $view->render('views/lunch.html');

});

$f3->route('GET /dinner', function()
{
    var_dump($_SESSION);
    $view = new Template();
    echo $view->render('views/dinner.html');
});

//Run fat free
$f3->run();
