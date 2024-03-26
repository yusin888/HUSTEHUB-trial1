<?php

$sName = "AZURE_MYSQL_HOST";
$uName = "AZURE_MYSQL_USERNAME";
$pass = "AZURE_MYSQL_PASSWORD";
$db_name = "AZURE_MYSQL_DBNAME";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
    exit;
}
?>