<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entertainment Events</title>
    <link rel="stylesheet" type="text/css" href="styles/en_style.css"/>
  </head>

  <body>
    <?php
        include "header.php";
    ?>
    <h1 class="heading">Entertainment</h1>
    
    <section class="container">

      <div class="musical">
        <img src="images/m1.jpg" alt="" />
        <div class="txtadj">
          <h2>Musical Shows</h2>
          <div class="view">
            <p><a href="musical.php">View Gallery</a></p>
          </div>
        </div>
      </div>

      <div class="get">
        <img src="images/m2.jpg" alt="" />
        <div class="txtadj">
          <h2>Get Togethers</h2>
          <div class="view">
            <p><a href="gettogether.php">View Gallery</a></p>
          </div>
        </div>
      </div>

      <div class="club">
        <img src="images/m3.jpg" alt="" />
        <div class="txtadj">
          <h2>Club Events</h2>
          <div class="view">
            <p><a href="club.php">View Gallery</a></p>
          </div>
        </div>
      </div>

    </section>
    <?php
        include "footer.php";
    ?>
 </body>
</html>