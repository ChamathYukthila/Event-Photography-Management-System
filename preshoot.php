<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>
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
    <img src="images/c1.jpeg" alt="">
    <img src="images/c2.jpg" alt="">
    <img src="images/c3.jpg" alt="">
    <img src="images/c4.jpg" alt="">
    <img src="images/c5.png" alt="">
    <img src="images/c6.jpg" alt="">
    <img src="images/c7.jpg" alt="">
    <img src="images/c8.jpg" alt="">
    <img src="images/c9.jpg" alt="">
    <img src="images/c10.jpg" alt="">
</div>
<i id="right" class="fas fa-angle-right"></i>
</div>
    </section>
    <?php
        include "footer.php";
    ?>
</body>
</html>