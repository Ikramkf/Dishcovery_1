<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    
    <!-- CSS -->
    <link rel="stylesheet" href="\Dishcovery\css\\style.css">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h1> Welcome to dashboard!</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
   
    
</body>
</html>