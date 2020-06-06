<?php 

$host = "localhost";
$user = "root";
$password ="";
$database = "anupam";

$id = "";
$fname = "";
$lname = "";
$age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$batch = $_POST['batch'];
$room = $_POST['room'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = " insert into userinfodata(id,name,subject,batch,room,email,mobile)

values('$id','$name', '$subject', '$batch', ' $room', '$email ', '$mobile')";


echo "$query";


 ?>