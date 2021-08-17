<?php


if(validate()){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "alabamustapha@gmail.com";
    $subject = "Shooting shots from: " . $name;
    $message = "Name: " . $name . '<br>Email: ' . $email . "Message: <br>" . $message;
    try {
        mail($to,$subject,$message);
    } catch (\Throwable $th) {
        goHome("0");
    }

    goHome("sweet");
    
}else{
    goHome("1");
}


function goHome($code){
    header("Location: ../index.php?code=" . $code);
}

function validate(){
    return isset($_POST["name"]) && $_POST["email"] && $_POST["message"];
}