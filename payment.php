<?php
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $card_number = $_POST["card_number"];
            $months = $_POST["months"];
            $years = $_POST["years"];
            $cvv = $_POST["cvv"];
            $errors = array();

            if (empty($name) || empty($card_number) || empty($months) || empty($years) || empty($cvv) ) {
                array_push($errors, "All fields are required");
            } else {
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "payment_details";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert the user information into the database
                $sql = "INSERT INTO users( card_holder_name , card_num , exp_month , exp_year , cvv )
                        VALUES ('$name', '$card_number', '$months', '$years' , '$cvv')";

                if ($conn->query($sql) === TRUE) {
                    echo "Payment successful!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the database connection
                $conn->close();
            }
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <h1>Confirm Your Payment</h1>

        <form action="payment.php" method="post">

        <div class="first-row">
            <div class="owner" >
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name="cvv">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name="card_number">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Expire Date</h3>
            <div class="selection">
                <div class="date" >
                    <select name="months" id="months" >
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2030">2030</option>
                        <option value="2029">2029</option>
                        <option value="2028">2028</option>
                        <option value="2027">2027</option>
                        <option value="2026">2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                    </select>
                </div>

                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="visa.jpg" alt="">
                    <img src="paypal.jpg" alt="">
                </div>
            </div>    
        </div>

        <div class="button">
            <button type="submit" name="submit">Confirm</button>
        </div>

        </form>

        
     
    </div>
</body>
</html>