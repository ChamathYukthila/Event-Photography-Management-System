<?php
    session_start();
    
    $conn = mysqli_connect("localhost", "root", "", "signup", 3307);

        if(!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    }
    else{
    header("Location: home.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME </h1>
    <h3><?php echo $row["full_name"]; ?></h3>
    <a href="logout.php">LogOut</a>
</body>
</html>