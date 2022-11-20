<?php

include("../index.php");

$firstName     = $_POST['firstname'];
$lastName      = $_POST['lastname'];
$middleName    = $_POST['middlename'];
$phone         = $_POST['phone'];
$city          = $_POST['city'];
$personalImage = $_POST['personalimage'];

$stm = $con -> prepare("UPDATE userdata SET firstname = $firstName, lastname = $lastName, middlename = $middleName
phone = $phone, city = $city, personalImage = $personalImage");

$stm -> execute();

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success"));
}else{
    json_encode(array("status" => "faile"));
}

?>