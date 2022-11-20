<?php

include("../index.php");

$serialNumber = $_POST['serialnumber'];

$stm = $con -> prepare("SELECT serialnumber.devicename, serialnumber.devicetype, serialnumber.devicecolor,
datauser.firstname, datauser.lastname, datauser.middlename, datauser.phone, datauser.city, 
datauser.personalimage FROM serialnumber, datauser WHERE serialnumber.userdataid = datauser.id");

$stm -> execute();

$data = $stm -> fetch(PDO::FETCH_ASSOC);

$count = $stm -> rowCount();

if($count > 0){
    echo  json_encode(array ("status" => "device chicked", "data" => $data)); 
}else {
    echo json_encode(array("status" => "faile"));
}

?>