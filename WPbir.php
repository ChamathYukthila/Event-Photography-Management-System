<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Packages</title>
    <link rel="stylesheet" type="text/css" href="WP.css" />
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
	<br>
    <h1 class="heading">birthday packages</h1>
	<br><br><br>
    <section class="container">
      <div class="gold">
        <img src="A1.jpg" alt="" />
        <div>
          <h2>Gold Packages</h2>
          <div class="view">
          <a href="payment.php"><p>purchase packages</p></a>
          </div>
        </div>
      </div>
      <div class="silver">
        <img src="A3.jpg" alt="" />
        <h2>Silver Package</h2>
        <div class="view">
        <a href="payment.php"><p>purchase packages</p></a>
        </div>
      </div>
      <div class="bronze">
        <img src="A2.jpg" alt="" />
        <h2>Bronze Package</h2>
        <div class="view">
        <a href="payment.php"><p>purchase packages</p></a>
        </div>
      </div>
    </section>
	<?php
        include "footer.php";
    ?>
  </body>
</html>
