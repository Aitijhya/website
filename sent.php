<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$select= $_POST['select'];
$subselect= $_POST['subselect'];
$description= $_POST['description'];
$to = "managehelpers24@mail.com";
$subject = "Order Success ";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Category =" .$select  . "\r\n Sub-Category =" .$subselect  . "\r\n Description =" .$description ;
$headers = "From: spati9574@gmail.com" . "\r\n" .
"CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>