<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "schoolmart" && $password == "schoolmart"){
    header("location: dashboard.php");
}
else{
    header("location: login.php");
}
?>