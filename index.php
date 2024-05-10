<?php

include_once "db.php";

$email = $_POST["email"];
$newLine = "<br>";
$age = $_POST["age"];

if(empty($email) || empty($age)){
    echo "Please fill in all fields.";
}else{
    $req = "INSERT INTO `users` (`id`, `email`, `age`) VALUES (NULL, '$email', '$age')";

    $sql = mysqli_query($conn,$req);

    if($sql) {
        echo"<script>alert('The Date Has Been Send ! ')</script>";
    }else{
        echo "haha bomba";
    } 
}
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Email" maxlength="30" required autocomplete="on">
        <input type="text" name="age" placeholder="Your Age (:" maxlenght="3" require>
        <button type="submit">Login</button>
    </form>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Email" maxlength="30" required autocomplete="on">
        <input type="text" name="age" placeholder="Your Age (:" maxlength="3" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST["age"];
        echo "<br>";
        echo $_POST["age"];
    }
    ?>
</body>
</html> -->

