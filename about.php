<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="./css/all.min.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="block">
<div class="imgs">
   <img src="./img/about2.png" />
   <img src="./img/about1.png" />
   <img src="./img/about3.png" />


   <h1>We are artgenics</h1>
   <h2>We exist so you can have the art you love.</h2>
</div>

   <div class="text">
      <h3>Incredible art <br>
             every time</h3>
      <p>We work with passion to bring you <br>  the world's largest art collection. <br>
         Whatever your interest, your decor <br> style, your inspiration we're sure to <br>
         have that piece you cant live without.</p>
      <a href="shop.php">SHOP NOW ></a>

         <img src="./img/about4.png" alt="">

         <h2>Hang with us</h2>
         <h4>Each and every day,we have more to offer you so keep in touch </h4>
   </div>

   <div class="social">
      <img src="./img/about_logo2.png" alt="">
      <img src="./img/about_logo1.png" alt="">

      <a href="https://www.instagram.com/artgenics_website/">Connect with us ></a>
      
   </div>

</div>





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>


</body>
</html>