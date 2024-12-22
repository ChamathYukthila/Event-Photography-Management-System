<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "signup", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!empty($_SESSION["id"])) {
    header("Location: profile.php");
    exit();
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: profile.php");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <?php
        include "header.php";
    ?>
    <section class="body">
    <div class="logging">
        <form class="" action="" method="post" autocomplete="off">
            <h2>Sign in</h2>

            <div class="inputbox">
                <input type="text" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="link">
                
                <a href="registration.php">Signup</a>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>


    </div>
    
    </section>
    <?php
        include "footer.php";
    ?>
   
</body>
</html>