<?php

include("../index.php");

$serialNumber = $_POST['serialnumber'];
$devicName = $_POST['devicename'];
$deviceType = $_POST['devicetype'];
$deviceColor = $_POST['devicecolor'];

$stm = $con -> prepare("INSERT INTO device ('serialnumber', 'devicename', 'devicetype', 'devicecolor')
                        VALUES($serialNumber, $devicName, $deviceType, $deviceColor)"); 
$stm -> execute();

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "faild"));
}

?>