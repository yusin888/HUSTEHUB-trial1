<?php

$sName = "hustehub-server.mysql.database.azure.com";
$uName = "kuiapqspwm";
$pass = "7072HBLJOAE1SU86$";
$db_name = "hustehub-database";
$port = 3306;

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
    exit;
}
?>
