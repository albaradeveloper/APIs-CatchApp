<?php

include("../index.php");

$deviceId    = $_POST["deviceid"];
$deviceName  = $_POST["devicename"];
$deviceType  = $_POST["devicetype"];
$deviceColor = $_POST["devicecolor"];

$stm = $con -> prepare("UPDATE serialnumber SET devicename = $deviceName, devicetype = $deviceType,
                        devicecolor = $deviceColor WHERE id = $deviceId");

$stm -> execute();

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "faile"));
}
?>