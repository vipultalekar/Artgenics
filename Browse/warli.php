<?php

include '../components/connect.php';

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
	<title>Warli Painting</title>
	<!-- custom css file link  -->
	<link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/home.css">
   <link rel="stylesheet" href="../css/all.min.css">
   <link rel="stylesheet" href="browse.css">

	

</head>
    <body>
           

	 <!-- header start-->

	 <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">
   
   <section2 class="flex">
      
      <section2 class="navbars">
              <div class="upnav">
                  <div class="left">
                      <a href="../home.php">
                          <img src="../img/logo.png">
                          
                      </a>
                  </div>
               <div>
     

      

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="../search_page.php"><i class="fas fa-search"></i></a>
         <a href="../wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="../cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <a href="../Products/products.php"><i class="fa-solid fa-bag-shopping"></i></a>
         <a href="../shop.php"><i class="fa-solid fa-paintbrush"></i></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="../update_user.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="../user_register.php" class="option-btn">register</a>
            <a href="../user_login.php" class="option-btn">login</a>
         </div>
         <a href="../components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="../user_register.php" class="option-btn">register</a>
            <a href="../user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section2>
   </section2>  
</header>

	 <!-- header end-->


   <div class="banner">
   <img src="Warli.jpeg" alt="">
</div>
<div class="content">
<p>
Warli painting is a form of tribal art mostly created by the tribal people from the North Sahyadri Range in Maharashtra, India.
This range encompasses cities such as Dahanu, Talasari, Jawhar, Palghar, Mokhada, and Vikramgad of Palghar district. 
This tribal art was originated in Maharashtra, where it is still practiced today.
</p>  
<p><b>Tradition</b>
</p>
<p>
The Warli Painting tradition in Maharashtra are among the finest examples of the folk style of paintings.
The Warli tribe is one of the largest in India, located outside of Mumbai.
Despite being close to one of the largest cities in India, the Warli reject much of contemporary culture. 
Warli paintings of Maharashtra revolve around the marriage of God Palghat.The style of Warli painting was not recognised until the 1970s, even though the tribal style of art is thought to date back as early as 10th century A.D.
The Warli culture is centered on the concept of Mother Nature and elements of nature are often focal points depicted in Warli painting. 
Farming is their main way of life and a large source of food for the tribe. They greatly respect nature and wildlife for the resources that they provide for life.
Warli artists use their clay huts as the backdrop for their paintings, similar to how ancient people used cave walls as their canvases.
Jivya Soma Mashe, the artist in Thane district has played a great role in making the Warli paintings more popular.
He has been honoured with a number of national and central level awards for his paintings. In the year 2011, he was awarded Padmashree.

</p> 
<p><b>Painting technique</b></p>
<p>
These rudimentary wall paintings use a set of basic geometric shapes: a circle, a triangle, and a square. 
These shapes are symbolic of different elements of nature. The circle and the triangle come from their observation of nature.
The circle represents the sun and the moon, while the triangle depicts mountains and conical trees. 
In contrast, the square renders to be a human invention, indicating a sacred enclosure or a piece of land.
The central motif in each ritual painting is the square, known as the "chauk" or "chaukat", mostly of two types known as Devchauk and Lagnachauk. Inside a Devchauk is usually a depiction of palaghat, the mother goddess, symbolizing fraternity. 
Male gods are unusual among the Warli and are frequently related to spirits which have taken human shape. 
The central motif in the ritual painting is surrounded by scenes portraying hunting, fishing, and farming, and trees and animals. Festivals and dances are common scenes depicted in the ritual paintings. People and animals are represented by two inverse triangles joined at their tips: the upper triangle depicts the torso and the lower triangle the pelvis. Their precarious equilibrium symbolizes the balance of the universe. The representation also has the practical and amusing advantage of animating the bodies. Another main theme of Warli art is the denotation of a triangle that is larger at the top, representing a man; and a triangle which is wider at the bottom, representing a woman. Apart from ritualistic paintings, other Warli paintings covered day-to-day activities of the village people.
One of the central aspects depicted in many Warli paintings is the tarpa dance. The tarpa, a trumpet-like instrument, is played in turns by different village men. Men and women entwine their hands and move in a circle around the tarpa player. The dancers then follow him, turning and moving as he turns, never turning their backs to the tarpa. The musician plays two different notes, which direct the head dancer to either move clockwise or counterclockwise. The tarpa player assumes a role similar to that of a snake charmer, and the dancers become the figurative snake. The dancers take a long turn in the audience and try to encircle them for entertainment. The circle formation of the dancers is also said to resemble the circle of life.
</p>
<p><b>
Materials used
</b></p>
<p>
The simple pictorial language of Warli painting is matched by a rudimentary technique.
The ritual paintings are usually created on the inside walls of village huts.
The walls are made of a mixture of branches, earth and red brick that make a red ochre background for the paintings.
The Warli only paint with a white pigment made from a mixture of rice flour and water, with gum as a binder. 
A bamboo stick is chewed at the end to give it the texture of a paintbrush. 
Walls are painted only to mark special occasions such as weddings, festivals or harvests. 
They make it with a sense that it can be seen by future generations.
</p>

</div>
</div>
</div>


<!-- footer start-->

<footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>quick links</h3>
         <a href="../about.php"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="../faq.php"> <i class="fas fa-angle-right"></i> FAQ</a>
         <a href="../terms.php"> <i class="fas fa-angle-right"></i> Terms</a>
         <a href="../privacy_policy.php"> <i class="fas fa-angle-right"></i> Privacy policy</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="../review/review.php"> <i class="fas fa-angle-right"></i> Review</a>
         <a href="../contact.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
         <a href="../sell_us.php"> <i class="fas fa-angle-right"></i> Sell Us</a>
         <a href="../orders.php"> <i class="fas fa-angle-right"></i> orders</a>
      </div>

      <div class="box">
         <h3>contact us</h3>
         <a href="tel:7666851512"><i class="fas fa-phone"></i>+91 7666851512</a>
         <a href="tel:9665322823"><i class="fas fa-phone"></i>+91 9665322823</a>
         <a href="mailto:artgenicsweb@gmail.com"><i class="fas fa-envelope"></i>artgenicsweb@gmail.com</a>
         <a href="https://goo.gl/maps/Ra7t7cxsyPW6i83z5"><i class="fas fa-map-marker-alt"></i> goa, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/Artgenics-101635239265441/"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="https://twitter.com/artgenics11"><i class="fab fa-twitter"></i>twitter</a>
         <a href="https://www.instagram.com/artgenics_website/"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ <?= date('Y'); ?> <span>- Artgenics</span> | all rights reserved!</div>

</footer>
<!-- footer end-->

<script src="../js/script.js"></script>

</body>
</html>