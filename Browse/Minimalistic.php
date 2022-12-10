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
	<title>Minimalistic Art</title>
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
   <img src="Minimalistic.jpg" alt="">
</div>
<div class="content">
<p>
In visual arts, music, and other media, minimalism is an art movement that began in post–World War II Western art, most strongly with American visual arts in the 1960s and early 1970s. 
Prominent artists associated with minimalism include Donald Judd, Agnes Martin, Dan Flavin, Carl Andre, Robert Morris, Anne Truitt, and Frank Stella.
The movement is often interpreted as a reaction against abstract expressionism and modernism; it anticipated contemporary postminimal art practices, which extend or reflect on minimalism's original objectives.
</p>  
<p>
Minimalism in music often features repetition and gradual variation, such as the works of La Monte Young, Terry Riley, Steve Reich, Philip Glass, Julius Eastman, and John Adams. 
The term minimalist often colloquially refers to anything that is spare or stripped to its essentials. 
It has accordingly been used to describe the plays and novels of Samuel Beckett, the films of Robert Bresson, the stories of Raymond Carver, and the automobile designs of Colin Chapman. 
The word was first used in English in the early 20th century to describe a 1915 composition by the Russian painter Kasimir Malevich, Black Square.
</p> 
<p><b>Visual arts</b></p>
<p>Minimalism in visual art, generally referred to as "minimal art", "literalist art" and "ABC Art",emerged in New York in the early 1960s as new and older artists moved toward geometric abstraction; 
exploring via painting in the cases of Nassos Daphnis, Frank Stella, Kenneth Noland, Al Held, Ellsworth Kelly, Robert Ryman and others; and sculpture in the works of various artists including David Smith and Anthony Caro. 
Judd's sculpture was showcased in 1964 at Green Gallery in Manhattan, as were Flavin's first fluorescent light works, while other leading Manhattan galleries like Leo Castelli Gallery and Pace Gallery also began to showcase artists focused on geometric abstraction.</p>
<p>In a more broad and general sense, one finds European roots of minimalism in the geometric abstractions of painters associated with the Bauhaus, in the works of Kazimir Malevich, Piet Mondrian and other artists associated with the De Stijl movement, and the Russian Constructivist movement, and in the work of the Romanian sculptor Constantin Brâncuși. </p>
<p>Minimal art is also inspired in part by the paintings of Barnett Newman, Ad Reinhardt, Josef Albers, and the works of artists as diverse as Pablo Picasso, Marcel Duchamp, Giorgio Morandi, and others. 
Minimalism was also a reaction against the painterly subjectivity of Abstract Expressionism that had been dominant in the New York School during the 1940s and 1950s. </p>
<p>Yves Klein had painted monochromes as early as 1949, and held the first private exhibition of this work in 1950—but his first public showing was the publication of the Artist's book Yves: Peintures in November 1954.</p>

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