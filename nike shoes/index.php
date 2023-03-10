<?php
$insert=false;
if(isset($_POST['name'])){
  //Set connection variables
    $server="melbinnn.mysql.polardb.japan.rds.aliyuncs.com";
    $username="melbin1";
    $password="Ntorq@125";
    $database="melbindb";
 
 //create database connection
 $con = mysqli_connect($server,$username,$password,$database);
 
 
 //check for connection success
 if(!$con){
     die("connection to this database failed due to".mysqli_connect_error());
 }
//  echo"success connecting to the DB";
 
//collect post variables
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
 
$sql= "INSERT INTO informtion VALUES('$name', '$email', '$phone', '$message');";
 
// echo $sql;
 
//execute query
if($con->query($sql)==true){
    // echo"Successfully inserted";
 
    //flag for successful insertion
    $insert=true;
}
else{
    
    echo"ERROR: $sql <br> $con->error";
}
 
//close the database connection
$con->close();
}
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SNEAKER HEADS</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<!-- header section starts-->

<div id="menu-btn" class="fas fa-bars"></div>

<header class="header">

   <a href="#" class="logo">SNEAKER HEADS</a>

   <nav class="navbar">
      <h1><a href="#banner">Banner</a>
      <a href="#products">Products</a>
      <a href="#reviews">Reviews</a>
      <a href="#contact">Contact</a></h1>
   </nav>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

   

</header>



<!-- header section ends-->

<!-- banner section starts  -->

<section class="banner" id="banner">
<div class="content"> <h1 class="heading"> SNEAKER <span> HEADS </span> </h1>
</div>
   
   <div class="content">
      <span>upto 50% off</span>
      <h3>Sneaker shoes</h3>
      <p>Hi, We Love Sneakers </p>
      <a href="#" class="btn">Shop now !!</a>
   </div>

   <div class="image">
      <img src="images/banner-product.png" alt="">
   </div>

</section>

<!-- banner section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

   <h1 class="heading"> our <span>products</span> </h1>

   <div class="swiper products-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/product-img1.jpg" alt="">
            <h3>SNEAKERS</h3>
            <div class="btn" data-product="product-1">see details</div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/product-img2.jpg" alt="">
            <h3>nike airmax</h3>
            <div class="btn" data-product="product-2">see details</div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/product-img3.jpg" alt="">
            <h3>nike airmax</h3>
            <div class="btn" data-product="product-3">see details</div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/product-img4.jpg" alt="">
            <h3>nike airmax</h3>
            <div class="btn" data-product="product-4">see details</div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/product-img5.jpg" alt="">
            <h3>nike airmax</h3>
            <div class="btn" data-product="product-5">see details</div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/product-img6.jpg" alt="">
            <h3>nike airmax</h3>
            <div class="btn" data-product="product-6">see details</div>
         </div>

      </div>

   </div>

</section>

<!-- prodcuts section ends -->

<!-- product preview section starts  -->

<section class="products-preview-container">

   <div class="product-preview" data-target="product-1">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img1.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Nike Air Max Lovers</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">₹15,000.00</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

   <div class="product-preview" data-target="product-2">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img2.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda odio ullam itaque porro facere quaerat!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">$49.99</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

   <div class="product-preview" data-target="product-3">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img3.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda odio ullam itaque porro facere quaerat!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">$49.99</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

   <div class="product-preview" data-target="product-4">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img4.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda odio ullam itaque porro facere quaerat!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">$49.99</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

   <div class="product-preview" data-target="product-5">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img5.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda odio ullam itaque porro facere quaerat!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">$49.99</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

   <div class="product-preview" data-target="product-6">
      <div class="fas fa-times"></div>
      <div class="image">
         <img src="images/product-img6.jpg" alt="">
      </div>
      <div class="content">
         <h3>nike airmax</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda odio ullam itaque porro facere quaerat!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <div class="price">$49.99</div>
         <a href="#" class="btn">buy now</a>
      </div>
   </div>

</section>

<!-- product preview section ends -->

<!-- services section starts  -->

<section class="service">

   <div class="box">
      <i class="fas fa-shipping-fast"></i>
      <p>free delivery</p>
   </div>

   <div class="box">
      <i class="fas fa-redo"></i>
      <p>10 days return</p>
   </div>

   <div class="box">
      <i class="fas fa-headset"></i>
      <p>24/7 support</p>
   </div>

</section>

<!-- services section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> clients <span>reviews</span> </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <p>Sigmas wear AirMax, Genz's wear Balenciaga.</p>
            <img src="soumya.jpg" alt="">
            <h3 style= "color:red;">Soumya Ranjan Barik</h3>
         </div>

         <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <p>Hi, My Air Jordans were fablous , I loved it.</p>
            <img src="Himanshu.jpg" alt="">
            <h3>Himanshu Mishra</h3>
         </div>

         <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <p>Hi, My Air Jordans were fablous , I loved it.</p>
            <img src="Bhurmi.jpg" alt="">
            <h3>Sarthak Bhurmi</h3>
         </div>

        
         
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"> <span>contact</span> us </h1>

   <div class="row">

      <form action="index.php" method="post">
         <input type="text" name="name" placeholder="name" class="box">
         <input type="email" name="email" placeholder="email" class="box">
         <input type="number" name="phone" placeholder="phone" class="box">
         <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

      <div class="contact-info">
         <h3>do you have any questions?</h3>
         <p class="grapgh"></p>
         <div class="icons">
            <i class="fas fa-map"></i>
            <div class="info">
               <p>Delhi, india - 110006</p>
            </div>
         </div>
         <div class="icons">
            <i class="fas fa-envelope"></i>
            <div class="info">
               <p>sneakerheads@gmail.com</p>
               
            </div>
         </div>
         <div class="icons">
            <i class="fas fa-phone"></i>
            <div class="info">
               <p>+123-456-7890</p>
               <p>+111-222-3333</p>
            </div>
         </div>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

   </div>

</section>

<!-- contact section ends -->







<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>