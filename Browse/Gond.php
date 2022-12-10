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
	<title>Gond Painting</title>
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
   <img src="Gond.jpg" alt="">
</div>
<div class="content">
<p>
The Gond tribe has its origin in Madhya Pradesh, and derived its name from the word ‘Kond’, meaning “green mountain”. Although Gond art of this tribe is considered to be primarily from Madhya Pradesh, it is also popular in regions like Andhra Pradesh, Maharashtra, Chhattisgarh, and Odisha. 
The government of India has taken several steps to preserve the art of the Gond tribe. 
These measures are not taken only to empower the artisans economically, but also for the sake of the future generation’s artistic fulfilment. The efforts resulted in more popularity of Gond art and paintings. Now, these folk art works are put on display with pride in various international exhibitions. 
They also bring in thousands of rupees.
</p>  
<p><b>The Rich History of Gond Art</b></p>
<p>
Amongst the Gond people, painting and other forms of expressive art are a popular and traditional practice. Dating back to more than 1400 years ago, the Gond tribe has painted and carved art on the walls of caves which all belong to the Mesolithic Period. The Gonds believe that viewing good images brought in good luck. Thus, traditionally, they painted motifs, tattoos, and images on the floors and walls of their houses. Their paintings are also a means to record and pass on historical knowledge and teachings.
The Pardhan Gonds are extremely skilled artists who are renowned for their paintings and music. In the 1980s, the director of the Bharat Bhavan Museum in Bhopal, J. Swaminathan wanted to exhibit urban and tribal art together. For this purpose, he sent some of his students to various villages in the Dindori district in search of artists. One of them was the exceptional painter Jangarh Singh Shyam, a Pardhan Gond. He was the first tribal artist to use canvas and paper for his artwork.

</p>
<p><b>The Natural Themes of Gond Art</b></p>
<p>
The Gond people believe that every element of nature, be it the hills, the sky or the trees, is inhabited by a spirit. Recreating the forms of nature therefore is done with reverence and worship of their sacred essence. These paintings serve as examples of the Gond tribe’s close connection to the spirit of nature. Gond paintings take inspiration from the myths and legends of India. They also depict scenes from the contemporary life of the people. 
A detailed narrative portrays abstract concepts encompassing emotions, dreams, and imaginative constructs. Since many of the Pardhan Gonds are accomplished musicians, their paintings often portray the stories of their songs.
</p>
<p><b>DIY Colouring Kit</b></p>
<p>The most significant subjects explored and depicted in Gond paintings include birds, animals, and mythical beasts. Since the paintings also derive themes from the daily lives of the people, the Mahua Tree is an important subject. Considered as the Tree of Life, the flowers, fruits, seeds, and leaves from the Mahua tree serve many purposes for the tribe. Urban themes depict modern subjects such as technology and automobiles. 
Folktales and local deities like Phulvari Devi, Jalharin Devi, and Marahi Devi are of cultural importance.</p>
<p><b>The Exquisite Shapes of Gond Art</b></p>
<p>The style that is incorporated takes care that the lines, whether of the border or the interior intricacies, that create the subjects grab the attention of the viewer instantly. The dots and dashes enhance the details with exquisite brilliance that is unique to the Gond paintings. 
Incorporating various geometric shapes and patterns, like the ones resembling fish scales, drops of water and seed shapes flesh out the expressive value of the art. The sense of movement is established through the curves and strokes of the lines, and hence many critics best described it as ‘on line work’.</p>
<p><b>The Vivid Colours of Gond Art</b></p>
<p>The Gond paintings flourished with vivid colours, especially red, blue, yellow, and white, that serve the view with their excellent contrast. These bright paints are usually derived and extracted from organic sources such as coloured soil, charcoal, plant leaves and sap, and even cow dung. The local sand called Chui Mitti helps in the production of the yellow colour, while Gheru Mitti serves the brown colour. Charcoal provides the black colour, Hibiscus flower gives red, and plant leaves impart green.
Resembling Australian aboriginal art, the Gond paintings are usually drawn during important festivals like those of Holi and Diwali. In the modern age, one can commonly find Gond art on wooden trays, boxes, and other objects of smooth surfaces. However, they are no longer painted on walls and floors. For the sake of convenience, the artists now prefer canvas. This ease of mobility has increased purchase and exchange, thus, aiding the popularity. Today, Gond artists use poster colours and other artificial paints to put their talent into the best portrayal. Combined with this, the use of simple canvas has enhanced modern Gond paintings into more vibrancy than its traditional counterparts.
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