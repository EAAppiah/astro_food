<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/images/favicon-32x32.png" type="image/x-icon">
  <title>Astro..</title>
  <!-- Custom Css file link -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- header section start -->
  <section class="header">

    <a href="home.php" class="logo">astro.</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->

  <div class="heading" style="background: url(images/The\ Only\ Miami\ Travel\ Guide\ You\ Need\ -\ Dana\ Berez.jpg) no-repeat;">
    <h1>book now</h1>
  </div>

  <!-- booking section starts -->
  <section class="booking">
    <h1 class="heading-title">Reservations!</h1>
    <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
        <div class="inputBox">
          <span>name :</span>
          <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
          <span>email :</span>
          <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
          <span>phone :</span>
          <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
          <span>address :</span>
          <input type="text" placeholder="enter your address" name="address">
        </div>
        <div class="inputBox">
          <span>order :</span>
          <input type="text" placeholder="enter what food you want" name="order">
        </div>
        <div class="inputBox">
          <span>order type :</span>
          <input type="text" placeholder="how would you like to take your order" name="order type">
        </div>
        <div class="inputBox">
          <span>location :</span>
          <input type="text" placeholder="where do you want to order from" name="location">
        </div>
        <div class="inputBox">
          <span>how many :</span>
          <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
          <span>arrival :</span>
          <input type="time" placeholder="expected time of arrival" name="arrival">
        </div>
        <div class="inputBox">
          <span>payment :</span>
          <input type="text" placeholder="payment form" name="payment">
        </div>
      </div>
      <input type="submit" value="submit" class="btn" name="send">
    </form>
  </section>
  <!-- booking section ends -->










  <!-- footer section start -->
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +233-400-7000 </a>
        <a href="#"> <i class="fas fa-envelope"></i> astro@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> accra, ghana 00233 </a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fa-brands fa-facebook"></i></i> facebook </a>
        <a href="#"> <i class="fa-brands fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fa-brands fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fa-brands fa-linkedin"></i> linkedin </a>
      </div>

    </div>

    <div class="credit"> © 2023 <span>astro.</span> all rights reserved! </div>
  </section>
  <!-- footer section ends -->

  <!-- Fontawesome CDN -->
  <script src="https://kit.fontawesome.com/bb857190c4.js" crossorigin="anonymous"></script>

  <script src="/js/main.js"></script>
</body>

</html>