<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Special Events</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="specialevent.css">
  </head>
  <body>
   <?php include "header.php";
    ?>
    
    <h1 class="heading">Special Events</h1>
    <section class="container">
      <div class="birthday">
        <img src="Images/birthday.jpg" alt="" />
        <div class="txtadj">
          <h2>Birthday Events</h2>
          <div class="view">
            <p><a href="birthday.php">View Gallery</a></p>
          </div>
        </div>
      </div>
      <div class="school">
        <img src="Images/school.jpg" alt="" />
        <div class="txtadj">
          <h2>School Functions</h2>
          <div class="view">
            <p><a href="schoolfunction.php">View Gallery</a></p>
        </div>
        </div>
      </div>
      <div class="religious">
        <img src="Images/religious.jpg" alt="" />
        <div class="txtadj">
        <h2>Religious Events</h2>
        <div class="view">
          <p><a href="religiousevent.php">View Gallery</a></p>
        </div>
      </div>
</section>
      <?php
      include "footer.php";
      ?>
 </body>
</html>