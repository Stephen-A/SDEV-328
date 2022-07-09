<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the necessary files
require_once('vendor/autoload.php');

//Start session on every page
session_start();

$f3 = Base::instance();

$con = new DatingController($f3);

//Define a default route (home page)
$f3->route('GET /', function()
{
    $GLOBALS['con']->home();
});

//Define a personal information route
$f3->route('GET|POST /information', function()
{
    $GLOBALS['con']->informationForm1();
});

//Information2 page
$f3->route('GET|POST /information2', function()
{
    $GLOBALS['con']->informationForm2();
});

//Information page 3
$f3->route('GET|POST /information3', function()
{
    $GLOBALS['con']->informationForm3();
});

//Information summary page
$f3->route('GET|POST /informationSummary', function()
{
    $GLOBALS['con']->informationSummary();
});

$f3->run();
