<?php
session_start(); // Start the session
$conn = mysqli_connect("localhost", "root", "", "signup", 3307);
 // Connect to the database


// Check if the user is not logged in
if (empty($_SESSION["id"])) {
    header("Location: login.php"); // Redirect to the login page if the user is not logged in
    exit;
}

$id = $_SESSION["id"]; // Get the user's ID from the session
$query = "SELECT * FROM users WHERE id = '$id'"; // Prepare a query to fetch user data from the database
$result = mysqli_query($conn, $query); // Execute the query
$user = mysqli_fetch_assoc($result); // Fetch the user data as an associative array

// Check if the form has been submitted for updating user data
if (isset($_POST["update"])) {
    // Retrieve form data
    $fullName = $_POST["fullname"];
    $phoneNumber = $_POST["phonenumber"];
    $gender = $_POST["gender"];
    $dateOfBirth = $_POST["dateofbirth"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Update user data in the database
    $updateQuery = "UPDATE users SET full_name = '$fullName', phone_number = '$phoneNumber', gender = '$gender', date_of_birth = '$dateOfBirth', email = '$email'";

    // Check if the password field is not empty
    if (!empty($password)) {
        $updateQuery .= ", password = '$password'"; // Include the new password in the update query
    }

    $updateQuery .= " WHERE id = '$id'";
    mysqli_query($conn, $updateQuery);// Execute the update query

    // Redirect to the updated profile page
    header("Location: profile.php");
    exit();
}

// Check if the form has been submitted for deletion
if (isset($_POST['delete'])) {
    // Prompt for confirmation
    echo '
    <script>
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete your account?");
        if (result) {
            document.getElementById("confirm").value = "yes";
        } else {
            document.getElementById("confirm").value = "no";
        }
        return true; // Submit the form
    }
    </script>
    ';

    
    // Display the confirmation prompt
    echo '
    <div class="container">
        <h2>Confirmation</h2>
        <p>Are you sure you want to delete your account?</p>
        <form action="editprofile.php" method="post" onsubmit="return confirmDelete();">
            <input type="hidden" name="confirm" id="confirm" value="">
            <button type="submit" name="delete">Yes</button>
            <button type="button" onclick="location.href=\'editprofile.php\'">No</button>
        </form>
    </div>
    ';

    // Execute the delete query if confirmed
    if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($conn, $query); // Execute the delete query

        if ($result) {
            // Delete the session data and redirect to the login page
            session_destroy();
            header("Location: login.php");
            exit();
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
    }

    exit(); // Stop executing the rest of the code after displaying the confirmation prompt
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
    <link rel="stylesheet" href="editprofile.css">
</head>
<body>
    <?php include "header.php";
    ?>
    <section class= "body">
        
    <div class="container">
        <h2>My Account</h2>

        <form action="editprofile.php" method="post">

            <div class="form-group">  
                <label for="fullname">Full Name</label>  
                <input type="text" name="fullname" placeholder="" value="<?php echo $user['full_name']; ?>">
            </div>

            <div class="form-group"> 
                <label for="phonenumber">Phone Number</label>   
                <input type="text" name="phonenumber" placeholder="" value="<?php echo $user['phone_number']; ?>">
            </div>

            <div class="form-group">  
                <label for="gender">Gender</label> <br>
                 
                <input type="text" name="gender" value="<?php echo $user['gender']; ?>" checked>
                <lable></lable>

            </div>

            <div class="form-group">    
                <label for="dateofbirth">Date of Birth</label>
                <input type="text" name="dateofbirth" class="form-control" value="<?php echo $user['date_of_birth']; ?>">
            </div>

            <div class="form-group"> 
                <label for="email">Email</label>  
                <input type="text" name="email" placeholder="" value="<?php echo $user['email']; ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>    
                <input type="password" name="password" placeholder="">
            </div>

            <div class="from-group button">
                <button type="submit" name="update">Update</button>
                <button type="submit" name="delete" value="Delete">Delete</button>
            </div>

        </form>
    </div>
</section>
    <?php
      include "footer.php";
      ?>
</body>
</html>
