<?php

$sName = "hustehub-server.mysql.database.azure.com";
$uName = "kuiapqspwm";
$pass = "AZURE_MYSQL_PASSWORD";
$db_name = "AZURE_MYSQL_DBNAME";
$port = "AZURE_MYSQL_PORT";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
    exit;
}
?>
