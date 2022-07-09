<?php

class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    public function __construct($food = "", $meal = "", $condiments = "")
    {
        $this->_food = "";
        $this->_meal = "";
        $this->_condiments = "";
    }

    /**
     * Return the food item for the order
     * @return string
     */
    public function getFood(): string
    {
        return $this->_food;
    }

    /**
     * Sets the food item for the order
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->_food = $food;
    }

    /**
     * Returns the meal item for the order
     * @return string
     */
    public function getMeal(): string
    {
        return $this->_meal;
    }

    /**
     * Sets the meal item for the order
     * @param string $meal
     */
    public function setMeal(string $meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * Returns the condiments for the order
     * @return string
     */
    public function getCondiments(): string
    {
        return $this->_condiments;
    }

    /**
     * Sets the condiments for the order
     * @param string $condiments
     */
    public function setCondiments(string $condiments): void
    {
        $this->_condiments = $condiments;
    }
}