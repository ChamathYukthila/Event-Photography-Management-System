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
    <link rel="stylesheet" href="Home.css" />
    <!--CSS linking-->

    <title>Photography Innovations</title>
  </head>
  <body>
    <!--JavaScript Linking-->

    <section class="container1">
      <div>
        <nav class="nav_bar">
          <!--header (a navigation bar)-->
          <img src="images\photography.png" alt="" />

          <ul class="nav_links">
            <li class="galdrop">
              Gallery<!--first dropdowm -->
              <div class="drop_down">
                <ul>
                  <li><a href="weddingEvent.php">Weddings</a></li>
                  <li><a href="en_index.php">Entertainment</a></li>
                  <li><a href="specialevent.php">Special Event</a></li>
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


      <div class="div1">
        <!--This is the first picture section-->

        <p class="div1p reveal">
          &copy;Portrait Innovations <br />
          Capture Your Moments With Us
        </p>
      </div>
    </section>

    <div class="slideshow_container reveal">
      <!--Slideshow section-->

      <div class="Slides fade" style="display: block">
        <img
          src="images\pexels-ali-salah-photographie-15592054.jpg"
          style="width: 100%"
        />
        <div class="text">Wedding Photography</div>
      </div>

      <div class="Slides fade">
        <img
          src="images\pexels-christina-morillo-1181406.jpg"
          style="width: 100%"
        />
        <div class="text">Event Photography</div>
      </div>

      <div class="Slides fade">
        <img
          src="images\birthday-party-concept-with-joyful-people.jpg"
          style="width: 100%"
        />
        <div class="text">Birthdays</div>
      </div>
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <!-- The dots/circles -->
    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!--sliding photo section ends-->

    <!-- what makes us special -->
    <section class="container">
      <div>
        <h1 class="reveal">What Makes Us special</h1>
        <p class="reveal">
          We are more than just photographers. We are storytellers, artists, and
          experts who document the crucial moments. <br />
          We have the skills to produce gorgeous pictures that showcase your
          individuality and sense of style for every occasion, including
          weddings, birthdays, business events, and others. We collaborate with
          you to fully grasp your goals, preferences, and anticipations. We
          deliver high-quality images and films that you may treasure for a
          lifetime using the most recent tools, methods, and software. We are
          not merely taking images here. To create memories, we are here. That
          is what distinguishes us.
        </p>
      </div>
    </section>

    <section class="container2">
      <div class="ourwork_div reveal">
        <!--Happiness we captured section-->
        <h1>Happiness we Captured</h1>

        <p>View our Gallery to see the work we have done</p>
        <a href="weddingEvent.php">Our work</a>
        <!--Add our work link here-->
      </div>
    </section>

    <!--ends here-->
    <section>
      <div class="div3_in_one reveal">
        <!--NExt 3 section Starts-->
        <div class="divReviews">
          <!--reviews-->

          <p>Reviews We Got <br>
          <a href="review.php" class="hero-btn1">Reviews</a></p>
        </div>

        <div class="divPacks">
          <!--Packages section-->

          <p>Have a look at Your Account</p>
          <a href="profile.php" class="hero-btn1">Your Account</a>
        </div>

        <div class="divFaq">
          <!--FAQs section-->

          <p>Need Help? We'r always here when you need us</p>
          <a href="FAQ.php" class="hero-btn1">FAQs</a>
        </div>
      </div>
      <!--This section Ends here-->

      <!--add footer here-->
      <div><?php include "footer.php";
      ?></div>
    </section>
    <script src="home.js"></script>
  </body>
</html>
