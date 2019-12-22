<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Training</title>
    <link rel="stylesheet" href="build/styles/main.min.css">


</head>
<body>



<form action="<?php echo $_SERVER["PHP_SELF"] ?>" class="form" method="post">


<h1>Login Form</h1>
<hr>
<label>Username</label>
<input type="text" name="username">
<label>Password</label>
<input type="password" name="password">

<input type="submit" value="Login">

</form>




<?php 




?>

</body>
</html>