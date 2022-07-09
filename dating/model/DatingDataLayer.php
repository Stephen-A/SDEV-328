<?php

class DatingDataLayer
{
    /**
     * This function returns an array of given values
     * - Used to display selectable options in informationForm1.html, informationForm2.html
     * @return string[]
     */
    static function getGender()
    {
        return array("Male", "Female");
    }

    /**g
     * This function returns an array of given values
     * - Used to compare user values against array values in DatingValidation.php file -
     * @return string[]
     */
    static function getAge()
    {
        return array("18-24", "25-34", "35-44", "45-54", "55-64", "65-74");
    }

    /**
     * This function returns an array of given values
     * - Used to display selectable options in informationForm3.html
     * - Used to compare values in DatingValidation.php
     * @return string[]
     */
    static function getIndoor()
    {
        return array("tv", "movies", "cooking", "board games",
            "puzzles", "reading", "playing cards", "video games");
    }

    /**
     * This function returns an array of given values
     * - Used to display selectable options in informationForm3.html
     * - Used to compare values in DatingValidation.php
     * @return string[]
     */
    static function getOutdoor()
    {
        return array("hiking", "biking", "swimming", "collecting", "walking", "climbing");
    }
}