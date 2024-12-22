<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "signup", 3307);


if (empty($_SESSION["id"])) {
    header("Location: login.php"); // Redirect to the login page if the user is not logged in
    exit;
} else {
    $userId = $_SESSION["id"];
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullName = $row["full_name"];
        $phoneNumber = $row["phone_number"];
        $dateOfBirth = $row["date_of_birth"];
        $email = $row["email"];
    } else {
        echo "User not found.";
        exit;
    }
}

if (isset($_POST["update"])) {
    header("Location: editprofile.php"); // Redirect to the edit profile page
    exit();
}
?>

<?php

// Function to clear all session variables
function clearSession()
{
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    session_destroy();
}

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    clearSession();
    // Redirect to the login page or any other desired page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <?php include "header.php";
    ?>
    <section class= "body">

    <div class="container">
        <h2>My Account</h2>

        <form action="profile.php" method="post">

            <div class="form-group">  
                <label for="fullname">Full Name</label>  
                <input type="text" name="fullname" placeholder="" value="<?php echo $fullName; ?>" readonly>
            </div>

            <div class="form-group"> 
                <label for="email">Email</label>  
                <input type="text" name="email" placeholder="" value="<?php echo $email; ?>" readonly>
            </div>

            <div class="form-group"> 
                <label for="phonenumber">Phone Number</label>   
                <input type="text" name="phonenumber" placeholder="" value="<?php echo $phoneNumber; ?>" readonly>
            </div>

            <div class="form-group">    
                <label for="dateofbirth">Date of Birth</label>
                <input type="text" name="dateofbirth" class="form-control" value="<?php echo $dateOfBirth; ?>" readonly>
            </div>

            <div class="from-group button">
                <button type="submit" name="update">Edit</button>
                <button type="submit" name="logout" value="Logout">Logout</button>
            </div>

        </form>
    </div>
    </section>
    <?php
      include "footer.php";
      ?>
</body>
</html>
