<?php

include("../index.php");

$deviceId = $_POST["deviceid"];

$stm = $con -> prepare("DELETE FROM serialnumber WHERE id = $deviceId");

$stm -> execute();

$count = $stm -> rowCount();

if($count > 0){
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "faile"));
}
?>