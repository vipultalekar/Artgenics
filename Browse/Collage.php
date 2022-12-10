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
	<title>Collage Painting</title>
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
   <img src="Collage.jpg" alt="">
</div>
<div class="content">
<p>
Collage is a technique of art creation, primarily used in the visual arts, but in music too, by which art results from an assemblage of different forms, thus creating a new whole.
A collage may sometimes include magazine and newspaper clippings, ribbons, paint, bits of colored or handmade papers, portions of other artwork or texts, photographs and other found objects, glued to a piece of paper or canvas. The origins of collage can be traced back hundreds of years, but this technique made a dramatic reappearance in the early 20th century as an art form of novelty.
The term Papier collé was coined by both Georges Braque and Pablo Picasso in the beginning of the 20th century when collage became a distinctive part of modern art.

</p>  
<p><b>History</b></p>
<p>
The word impasto is Italian in origin; in which it means "dough" or "mixture"; related to the verb impastare, "to knead", or "to paste". Italian usage of impasto includes both a painting and a potting technique. 
According to Webster's New World College Dictionary, the root noun of impasto is pasta, whose primary meaning in Italian is "paste".
</p>
<p><b>Early precedents</b>

Techniques of collage were first used at the time of the invention of paper in China, around 200 BC. The use of collage, however, wasn't used by many people until the 10th century in Japan, when calligraphers began to apply glued paper, using texts on surfaces, when writing their poems. Some surviving pieces from this style are found in the collection of Nishi Hongan-ji— many volumes of the Sanju Rokunin Kashu.
The technique of collage appeared in medieval Europe during the 13th century. Gold leaf panels started to be applied in Gothic cathedrals around the 15th and 16th centuries. Gemstones and other precious metals were applied to religious images, icons, and also, to coats of arms. An 18th-century example of collage art can be found in the work of Mary Delany. In the 19th century, collage methods also were used among hobbyists for memorabilia (e.g. applied to photo albums) and books (e.g. Hans Christian Andersen, Carl Spitzweg). Many institutions have attributed the beginnings of the practice of collage to Picasso and Braque in 1912, however, early Victorian photocollage suggest collage techniques were practiced in the early 1860s. Many institutions recognize these works as memorabilia for hobbyists, though they functioned as a facilitator of Victorian aristocratic collective portraiture, proof of female erudition, and presented a new mode of artistic representation that questioned the way in which photography is truthful. In 2009, curator Elizabeth Siegel organized the exhibition: Playing with Pictures at the Art Institute Chicago to acknowledge collage works by Alexandra of Denmark and Mary Georgina Filmer among others. The exhibition later traveled to The Metropolitan Museum of Art and The Art Gallery of Ontario.

</p>
<p><b>Collage and modernism</b>
Despite the pre-twentieth-century use of collage-like application techniques, some art authorities argue that collage, properly speaking, did not emerge until after 1900, in conjunction with the early stages of modernism.
For example, the Tate Gallery's online art glossary states that collage "was first used as an artists' technique in the twentieth century". According to the Guggenheim Museum's online art glossary, collage is an artistic concept associated with the beginnings of modernism, and entails much more than the idea of gluing something onto something else. The glued-on patches which Braque and Picasso added to their canvases offered a new perspective on painting when the patches "collided with the surface plane of the painting". In this perspective, collage was part of a methodical reexamination of the relation between painting and sculpture, and these new works "gave each medium some of the characteristics of the other", according to the Guggenheim essay. Furthermore, these chopped-up bits of newspaper introduced fragments of externally referenced meaning into the collision: "References to current events, such as the war in the Balkans, and to popular culture enriched the content of their art." This juxtaposition of signifiers, "at once serious and tongue-in-cheek", was fundamental to the inspiration behind collage: "Emphasizing concept and process over end product, collage has brought the incongruous into meaningful congress with the ordinary." 

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