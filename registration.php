<?php
    session_start(); 
    $conn = mysqli_connect("localhost", "root", "", "signup");
    if(!empty($_SESSION["id"])){  // If the "id" session variable is not empty
        header("Location: login.php"); // Redirect the user to the login.php page
    exit;   
    }

    if (isset($_POST["signup"])) {  // If the "signup" button is clicked and form is submitted
        $fullName = $_POST["fullname"]; // Get the value of the "fullname" input field
        $phoneNumber = $_POST["phonenumber"]; 
        $gender = $_POST["gender"]; 
        $dateOfBirth = $_POST["dateofbirth"]; 
        $email = $_POST["email"]; 
        $password = $_POST["password"]; 
        $confirmPassword = $_POST["confirm_password"]; 

        $dublicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' "); // Check if email already exists in the database
        if(mysqli_num_rows($dublicate) > 0){ // If there is a duplicate email
            echo
            "<script> alert('Invalid Details'); </script>";  // Display an alert with the message
        }
        else{
            if($password == $confirmPassword){ // If the password matches the confirm password
                $query = "INSERT INTO users VALUES ( '', '$fullName', '$phoneNumber', '$gender', '$dateOfBirth', '$email', '$password', '')"; // Construct the SQL query to insert user data
            mysqli_query($conn,$query); // Execute the query to insert user data into the database
            echo
            "<script> alert('Registration Successful'); </script>"; // Display a success message
            header("Location: login.php"); // Redirect the user to the login.php page
            exit(); // Stop further execution of the code
            }
        else{
            echo
            "<script> alert('Password Does Not Match '); </script>";  // Display an alert if password does not match confirm password
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="registration.css">
</head>

<body>

    <?php include "header.php";
    ?>
    <section class= "body">

    <div class="container">
        <h2>Register</h2>

        <form action="registration.php" method="post">

            <div class="form-group">  
                <label for="fullname">Full Name</label>  
                <input type="text" name="fullname" placeholder="">
            </div>

            <div class="form-group"> 
                <label for="phonenumber">Phone Number</label>   
                <input type="number" name="phonenumber" placeholder="">
            </div>

            <div class="form-group">  
                <label for="gender">Gender</label> <br>
                 
                <input type="radio" name="gender" value="Male" checked>
                <lable>Male</lable>

                <input type="radio" name="gender" value="Female">
                <lable>Female</lable>
            </div>

            <div class="form-group">    
                <label for="dateofbirth">Date of Birth</label>
                <input type="date" name="dateofbirth" class="form-control">
            </div>

            <div class="form-group"> 
                <label for="email">Email</label>  
                <input type="text" name="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>    
                <input type="password" name="password" placeholder="">
            </div>

            <div class="form-group"> 
                <label for="confirm_password" class="inline-lable">Confirm Password</label>   
                <input type="password" name="confirm_password" placeholder="">
            </div>

            <div class="from-group button">
                <button type="submit" name="signup">Sign up</button>
            </div>

            <div class="link">
                <p>allready have account : <a href="login.php">LogIn</a></p>
            </div>

        </form>
    </div>
</section>
    <?php
      include "footer.php";
      ?>
      
</body>
</html>
