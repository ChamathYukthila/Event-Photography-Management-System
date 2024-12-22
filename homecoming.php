<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homecoming</title>
    <link rel="stylesheet" type="text/css" href="styles/Album.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="js/album.js" defer></script>
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
    <section class="body">
    <div class="photo">
        <i id="left" class="fas fa-angle-left"></i>
        <div class="pic">
    <img src="images/b1.jpg" alt="">
    <img src="images/b2.jpg" alt="">
    <img src="images/b3.jpg" alt="">
    <img src="images/b4.jpg" alt="">
    <img src="images/b5.jpg" alt="">
    <img src="images/b6.jpg" alt="">
    <img src="images/b7.jpg" alt="">
    <img src="images/b8.jpg" alt="">
    <img src="images/b9.jpg" alt="">
    <img src="images/b10.jpg" alt="">
        </div>
     <i id="right" class="fas fa-angle-right"></i>
    </div>
    </section>
    <?php
        include "footer.php";
    ?>
</body>
</html>