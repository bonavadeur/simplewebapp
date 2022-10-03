<?php
function query() {
    ########## CONFIG HERE ##########
    $host = "localhost";
    $port = "3306";
    $dbname = "simplewebapp";
    $user = "root";
    $password = "";
    #################################

    $pdo = new \PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $records = $pdo->query("SELECT * FROM test ORDER BY id;")->fetchAll();
    return $records;
}
?>