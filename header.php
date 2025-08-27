<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Freak Gym</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="mainpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<style>
.swiper-wrapper {
  display: flex;
  flex-wrap: nowrap; /* Ensure all slides are in a single row */
  overflow-x: auto;  /* Enable horizontal scrolling if necessary */
}

.swiper-slide {
  min-width: 300px; /* Adjust as necessary for your design */
  flex: 0 0 auto;   /* Prevent flex items from shrinking or growing */
}

.client__card {
  width: 100%; /* Ensure each card takes up the full width of its container */
  margin: 0 10px; /* Add some space between the cards */
}

</style>

</head>
  <body>
    <header class="header">
      <nav>
      <div class="nav__header">
          <div class="nav__logo">
            <a href="#"><img src="Images/logo.jpg" alt="logo" />Fitness Freak Gym</a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li class="link"><a href="#home">Home</a></li>
          <li class="link"><a href="#about">About</a></li>
          <li class="link"><a href="#class">Classes</a></li>
          <li class="link"><a href="#trainer">Trainers</a></li>
          <li class="link"><a href="#price">Pricing</a></li>
          <a href="contact.php"><li class="link"><button class="btn">Contact Us</button></li></a>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__image">
          <img src="Images/header1.jpg" alt="header1" />
        </div>
        <div class="header__content">
          <h4>Build Your Body &</h4>
          <h1 class="section__header">Shape Yourself!</h1>
          <p>
            Unleash your potential and embark on a journey towards a stronger,
            fitter, and more confident you. Sign up for 'Make Your Body Shape'
            now and witness the incredible transformation your body is capable
            of!
          </p>
          <div class="header__btn">
            <a href="signup.php"> <button class="btn">Join Today</button></a> 
          </div>
        </div>
      </div>
    </header>