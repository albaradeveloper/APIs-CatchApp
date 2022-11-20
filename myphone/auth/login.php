<?php

include("../index.php");

$email = $_POST['email'];
$passWord = $_POST['password'];

$stm = $con -> prepare("SELECT 'email', 'password' FROM user WHERE $email = email AND $passWord = `password`"); 
$stm -> execute();

$data = $stm -> fetch(PDO::FETCH_ASSOC);

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "faile"));
}

?>