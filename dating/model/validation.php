<?php

/**
 * This function accepts an input from the user and validates it using a regular expression
 * to check if the name matches the accepted patterns
 * @param $name - given name from user
 * @return false|int
 */
function validName($name)
{
    return preg_match("/^([a-zA-Z' ]+)$/", $name);
}

/**
 * This function accepts an age from the user (selected through a dropdown list)
 * and checks the values against a pre-defined array storing the same values.
 * @param $age - selected age group from user
 * @return bool
 */
function validAge($age)
{
    return in_array($age, getAge());
}

/**
 * This function accepts an input from the user and validates it using a regular expression
 * to check if the phone number matches the accepted pattern
 * @param $phone - given phone number from user
 * @return false|int
 */
function validPhone($phone)
{
    return preg_match('/^[0-9]{10}+$/', $phone);
}

/**
 * This function accepts an input from the user and validates it using the built-in filter
 * to check if the email address matches the accepted email filters
 * @param $email - given email address from user
 * @return mixed
 */
function validEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * This function accepts an array of values (as selected checkboxes) from user
 * and checks the values selected against a pre-defined array storing the same values
 * @param $indoor - selected values from user
 * @return bool
 */
function validIndoor($indoor)
{
    $validIndoor = $indoor;
    return in_array($indoor, $validIndoor);
}

/**
 * This function accepts an array of values (as selected checkboxes) from user
 * and checks the values selected against a pre-defined array storing the same values
 * @param $outdoor - selected values from user
 * @return bool
 */
function validOutdoor($outdoor)
{
    return in_array($outdoor, getOutdoor());
}

