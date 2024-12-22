<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://kit.fontawesome.com/6c86bf7d2d.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="header.css" />

    <title>Photography Innovations</title>
    <!-- css -->
  </head>
  <body>
    <section class="container1">
      <div>
        <nav class="nav_bar">
          <!--header (a navigation bar)-->
          <a href="home.php">
            <img src="images/photographynew.png" alt="" />
          </a>
          <ul class="nav_links">
            <li class="galdrop">
              Gallery<!--first dropdowm -->
              <div class="drop_down">
                <ul>
                  <li><a href="weddingEvent.php">Weddings</a></li>
                  <li><a href="en_index.php">Entertainment</a></li>
                  <li><a href="specialevent.php">SpecialEvents</a></li>
                </ul>
              </div>
            </li>
            <li class="galdrop">
              Packages<!-- 2nd dropdown -->
              <div class="drop_down">
                <ul>
                  <li><a href="WPwedd.php">Wedding packages</a></li>
                  <li><a href="WP.php">Event packages</a></li>
                  <li><a href="WPbir.php">Birthday packages</a></li>
                </ul>
              </div>
            </li>

            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><i class="fa-solid fa-magnifying-glass show-modal" style="color: #ffffff; cursor: pointer;"></i></li>
            <li><a href="login.php"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a></li>
          </ul>
        </nav>
      </div>


<!-- search section -->
<section class="search_sect hidden">
  <div><i class="fa-solid fa-x close-modal" style="color: #ffffff;"></i></div>
  <div class="search">
    <form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
    </form>
</div>
</section>
<div class="overlay hidden"></div>
<script src="header.js"></script>
</body>
</html>