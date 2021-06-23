<?php 
echo 'check' 
    
include "connect.php"; 

$db = getconnection();
   
$sql = “INSERT INTO Company (Company Name,Email,Phone no,Address) VALUES ($_POST[Company Name], $_POST[Email],$_POST[Phone no],$_POST[Address])”; 
$stmt = $pdo->prepare ($sql);
$stmt->execute();
?>    

