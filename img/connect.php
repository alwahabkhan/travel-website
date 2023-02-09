<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'traveldata');
$username = $_POST['username'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];

$query = "INSERT INTO data1 (username, Email, Phone, Message) 
VALUES ('$username','$Email','$Phone','$Message')";

mysqli_query($con, $query);


?>