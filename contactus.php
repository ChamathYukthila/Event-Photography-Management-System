<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="contactus.css">
  </head>

  <body>
   <?php include "header.php";
    ?>
	<section class= "body">
<?php
	if (isset($_POST["submit"])) {
		$fullName = $_POST["fullname"];
		$email = $_POST["email"];
		$phoneNumber = $_POST["phonenumber"];
		$message = $_POST["message"];
		$errors = array();

		if (empty($fullName) || empty($phoneNumber) || empty($email) || empty($message) ) {
			array_push($errors, "All fields are required");
		} else {
			// Connect to the MySQL database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "contact";

			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check the connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Insert the user information into the database
			$sql = "INSERT INTO comment (full_name, email, contact_no, message)
					VALUES ('$fullName', '$email', '$phoneNumber', '$message')";

			if ($conn->query($sql) === TRUE) {
				echo "";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			// Close the database connection
			$conn->close();
		}
	}
?>
	
	<div class="container">
		<div class="contact-box">
			<div class="contact-left">
			<h3>Contact Us</h3>
			<form action="contactus.php" method="post">
			
				<div class="input-spc">
					<div class="input-group">
						<label>Full Name</label>
						<input type="text" name="fullname" placeholder="Nipun Sachintha">
						
					</div>
					</div>
					<div class="input-spc">
					<div class="input-group">
					<label>E-Mail</label>
						<input type="text" name="email" placeholder="xxxxxxxxxxx@gmil.com">
					</div>
					</div>
					<div class="input-spc">
					<div class="input-group">
						<label>Contact No</label>
						<input type="tel" name="phonenumber" placeholder="+94 XXXXXXXXX">
					</div>
					</div>
				
					<label>Message</label>
					<textarea rows="5" name="message" placeholder="Type your message here"></textarea>
					
					<button type="submit" name="submit">SUBMIT</button>
			
			</form>
			</div>
			<div class="contact-right">
				<h3>Connect With Us</h3>
				
				<table>
					<tr>
						<td>Email</td>
						<td>potrait.innovation@gmail.com</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>231/1,Athurugiriya road Malabe</td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>+94 714514719</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>
<?php
      include "footer.php";
      ?>
</body>
</html>