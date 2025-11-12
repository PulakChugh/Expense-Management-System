<?php

session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <div class="box">
        <h1>Welcome <span><?= $_SESSION['name']; ?></span></h1>

    </div>
</body>
</html>