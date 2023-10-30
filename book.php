<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    


<section class="header">
<!-- <a href="home.php" class="logo">travel.</a> -->
<a id="warning" href="logout.php" class="btn btn-warning">Logout</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
</nav>
<div id="menu-btn" class="fa fa-bars"></div>


</section>




<div class="heading" style="background:url(iamges/book1.jpg) no-repeat">
<h1>book &nbsp;&nbsp;  now</h1>
</div>
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" name="name" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="email"  placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text"  placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="phone"  placeholder="enter your number" name="phone" required>
            </div>
           
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="where you want to go" name="location" required>
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date"  name="arrivals" required>
              </div>  
                <div class="inputBox">
                <span>leaving:</span>
                <input type="date"  name="leaving" required>
            </div>

        </div>
        <input type="submit" value="submit" class="btn" name="send">
</section>


<section class="footer" >
<div class="box-container">
<div class="box">
    <h3>quick links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i> home</a> 
     <a href="about.php"><i class="fas fa-angle-right"></i>about</a> 
    <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
</div>


<div class="box">
    <h3>exra links</h3>
<a href="#"><i class="fas fa-angle-right"></i> ask questions</a> 
<a href="#"><i class="fas fa-angle-right"></i> about us</a> 
<a href="#"><i class="fas fa-angle-right"></i> privacy policy</a> 
<a href="#"><i class="fas fa-angle-right"></i> terms of use</a> 
</div>


<div class="box">
    <h3>contact info</h3>
<a href="#"><i class="fas fa-phone"></i>+111-222-3332</a> 
<a href="#"><i class="fas fa-phone"></i>+222-222-3332</a> 
<a href="mailto:tejdutta7051@gmail.com" target="_blank"><i class="fas fa-envelope"></i>tejdutta7051@gmail.com</a> 
<a href="https://maps.app.goo.gl/uYaa3ZFZ4p4R1qBx9" target="_blank"><i class="fas fa-map"></i>jammu, India-180005</a> 
</div>


<div class="box">
    <h3>contact info</h3>
<a href="https://www.facebook.com/tejeshwar.dutta.3/" target="_blank"><i class="fab fa-facebook-f"></i>facebook</a> 
<a href="https://twitter.com/TejeshwarDutta" target="_blank"><i class="fab fa-twitter"></i>twitter</a> 
<a href="https://www.instagram.com/_tannu_dutta/" target="_blank"><i class="fab fa-instagram"></i>instagram</a> 
<a href="https://www.linkedin.com/in/tejeshwardutta/" target="_blank"><i class="fab fa-linkedin"></i>linkedin</a> 

</div>

</div>
<div class="credit">designed by <span> Tejeshwar Dutta </span> | All rights reserved!
</div>

</section>




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="script.js"></script>


</body>
</html>