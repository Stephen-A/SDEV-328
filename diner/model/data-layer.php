<?php
/* diner/model/DatingDataLayer.php
 * Returns data for the diner app
 */

class DataLayer
{
    /**
     * This field represents our database connection object
     * @var
     */
    private $_dbh;

    function __construct()
    {
        //TODO: Move try-catch from config.php to here
        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }


    function saveOrder($order)
    {
        //1. Define the query
        $sql = "INSERT INTO diner_order (food, meal, condiments) VALUES (:food, :meal, :condiments)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $food = $order->getFood();
        $meal = $order->getMeal();
        $condiments = $order->getCondiments();
        $statement->bindParam(':food', $food, PDO::PARAM_STR);
        $statement->bindParam(':meal', $meal, PDO::PARAM_STR);
        $statement->bindParam(':condiments', $condiments, PDO::PARAM_STR);

        $statement->execute();
        return $this->_dbh->lastInsertId();
    }

    function viewOrders()
    {
        $sql = "SELECT * FROM diner_order";

        $statement = $this->_dbh->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getMeals()
    {
        return array("breakfast", "lunch", "dinner");
    }

    static function getCondiments()
    {
        return array("ketchup", "mustard", "mayo", "sriracha");
    }
}
