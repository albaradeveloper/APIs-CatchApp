<?php
    include("../index.php");

    $userName = $_POST['username'];
    $email = $_POST['email'];
    $passWord = $_POST['password'];

    $stm = $con -> prepare("INSERT INTO user ('username', 'email', 'password')
                            VALUES($userName, $email, $passWord)"); 
    $stm -> execute();

    $count = $stm -> rowCount();

    if($count > 0){
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "faile"));
    }

?>