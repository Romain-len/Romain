

<?php

/**

 function getSnows(){

$dbConnector = null;
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=snows";
$usr = "snows-connector";
$pwd = "Spirion545";

try{    $dbConnector = new PDO($dsn, $usr, $pwd);
    $query = "SELECT * FROM snows";
    $queryResult = null;
    $statement = $dbConnector->prepare($query);
    $statement->execute();
    $queryResult = $statement->fetchAll();
    $dbConnexion = null;
    return $queryResult;
}catch (PDOException $ex){
    print($ex);
}

*/

function getSnows(){
    require "dbConnector.php";
    $result = executeQuerySelect("SELECT * FROM snows");
    return $result;
}
function getSnow($id){
    require "dbConnector.php";
    $result = executeQuerySelect('SELECT * FROM snows WHERE id='.$id);
    return $result;
}