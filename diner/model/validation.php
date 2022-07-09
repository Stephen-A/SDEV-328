<?php

/* diner/model/DatingValidation.php
 * Validate user input from the diner app
 *
 */
class Validation
{
    static function validFood($food)
    {
        return strlen(trim($food)) >= 2;
    }

    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}

