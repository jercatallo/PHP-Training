<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Succesfully Login</title>
    <link rel="stylesheet" href="build/styles/main.min.css">
</head>
<body>






<?php 
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];


echo $firstname . "<br>";
echo $lastname . "<br>";
echo $username . "<br>";
echo $password . "<br>";




?>
    
</body>
</html>