<?php

include("../index.php");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$middleName = $_POST['middlename'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$personalImage = $_POST['personalimage'];


$stm = $con -> prepare("INSERT INTO userdata ('firstname', 'lastname', 'middlename', 'nationalid', 'phone', 
'country', 'city', 'neighborhood', 'personalimage', 'nationidimage') VALUES($firstName, $lastName, $middleName,
$nationalId, $phone, $country, $city, $neighborhood, $personalImage, $nationalIdImage)"); 

$stm -> execute();

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "faile"));
}

?>