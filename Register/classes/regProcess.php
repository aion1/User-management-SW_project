<?php
require_once "../../connection.php";
$con = new connection();
$username = $_POST['FName'];
$Lusername = $_POST['LName'];
$password = $_POST['psw'];
$phone = $_POST['phone'];
$age= $_POST['age'];
$email = $_POST['Email'];

$con->connect();

$query = "SELECT * FROM users WHERE Email='$email'";
$result = mysqli_query($con->getConnect(), $query) or die("Failed to query database");
$row = mysqli_fetch_array($result);

if($row['Email'] == $email){
    echo"<script>alert('Username Already taken')</script>";
    header("http://localhost/test/swe/Register/Register.php");
    exit;
}else {
    $query = "insert into users (Firstname,Lastname,phoneno,age, Email,user_psw)  values ('$username','$Lusername' ,'$phone', '$age', '$email','$password')";
    $result = mysqli_query($con->getConnect(), $query) or die("Failed to query database insert into table users");
    if ($result) {
        header("Location: ");
        exit;
    } else {

    }
}
