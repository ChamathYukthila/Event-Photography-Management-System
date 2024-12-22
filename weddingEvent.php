<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding Events</title>
    <link rel="stylesheet" type="text/css" href="styles/weddingEvent.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"/>
  </head>
  <body>
  <?php
        include "header.php";
    ?>
    <h1 class="heading">Wedding Events</h1>
    <section class="container">
      <div class="preshoot">
        <img src="images\preshoot.jpeg" alt="" />
        <div class="txtadj">
          <h2>Wedding Pre Shoots</h2>
          <div class="view">
            <p><a href="preshoot.php">View Gallery</a></p>
          </div>
        </div>
      </div>
      <div class="Wedding">
        <img src="images\wedding.jpg" alt="" />
        <div class="txtadj">
          <h2>Wedding 1st Day</h2>
          <div class="view">
            <p><a href="wedding.php">View Gallery</a></p>        </div>
        </div>
      </div>
      <div class="homecoming">
        <img src="images\homecoming1.jpg" alt="" />
        <div class="txtadj">
        <h2>Home Comings</h2>
        <div class="view">
          <p><a href="homecoming.php">View Gallery</a></p>
        </div>
      </div>
    </section>
    <?php
        include "footer.php";
    ?>
 </body>
</html>