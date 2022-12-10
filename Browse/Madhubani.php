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
	<title>Madhubani Art</title>
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
   <img src="Madhubani.jpg" alt="">
</div>
<div class="content">
<p>
Madhubani Art (or Mithila painting) is a style of Indian and Nepalese painting, practiced in the Mithila region of India and Nepal. 
It was named after Madhubani District of Bihar, India which is where it is originated. 
This painting is done with various tools, such as fingers, twigs, brushes, nib-pens, and matchsticks and using natural dyes and pigments. It is characterised by its eye-catching geometrical patterns. 
There is ritual content for particular occasions, such as birth or marriage, and festivals, such as Holi, Surya Shasti, Kali Puja, Upanayana, and Durga Puja.
Madhubani painting (Mithila painting) was traditionally created by the women of various communities in the Mithila region of the Indian subcontinent. 
It originated from Madhubani district of the Mithila region of Bihar. Madhubani is also a major export center of these paintings. 
This painting as a form of wall art was practiced widely throughout the region; the more recent development of painting on paper and canvas mainly originated among the villages around Madhubani, and it is these latter developments that led to the term "Madhubani art" being used alongside "Mithila Painting." 
</p>  
<p>
The paintings were traditionally done on freshly plastered mud walls and floors of huts, but now they are also done on cloth, handmade paper and canvas. 
Madhubani paintings are made from the paste of powdered rice. Madhubani painting has remained confined to a compact geographical area and the skills have been passed on through centuries, the content and the style have largely remained the same. 
Thus, Madhubani painting has received GI (Geographical Indication) status. 
Madhubani paintings use two-dimensional imagery, and the colors used are derived from plants. Ochre, Lampblack and Red are used for reddish-brown and black, respectively.
Madhubani paintings mostly depict people and their association with nature and scenes and deities from the ancient epics. Natural objects like the sun, the moon, and religious plants like tulsi are also widely painted, along with scenes from the royal court and social events like weddings. 
In this paintings generally, no space is left empty; the gaps are filled by paintings of flowers, animals, birds, and even geometric designs. Traditionally, painting was one of the skills that was passed down from generation to generation in the families of the Mithila Region, mainly by women . 
It is still practiced and kept alive in institutions spread across the Mithila region. Madhubanipaints By Asha jha in Darbhanga, Kalakriti in Darbhanga, Vaidehi in Madhubani, Benipatti in Madhubani district and Gram Vikas Parishad in Ranti are some of the major centres of Madhubani painting which have kept this ancient art form alive.
</p>
<p><b>Expression and Symbolism </b></p>
<p>There is an emotional urge behind every creation which gives a form to the feelings or experience. While perceiving a form of art, an artist passes through a deep experience. 
This realization followed by a creative process which helps the artist to experience a unique satisfaction. 
In this way the art gets directly reflected on his mental canvas and he does not remain in any doubt. 
This knowledge enables the artist to give a clear form to his creation like poetry, painting, musical symphony, sculpture and dance etc. Since ancient times art has been an integral part of human life.
Man has always depicted his secular and religious feelings through his art. 
Folk art is such a form of art which is associated to common man. Folk art is related to a particular society, caste and religion. Human being gives a form to any of kind art for their entertainment, decorations and special rituals which later on become enduring art of that particular area. 
Some Folk arts acquire international fame due to their recognition. Madhubani (meaning the forest of honey), a name to the conjure with in the history of Indian Painting: fascinating landscape, green pigeons, parrots, roofs of mudhouses, Majestic bodhi and peepal trees etc.”  This is a Hindu style of painting attained worldwide distinction adept mainly in Mithila and northern parts of region of Bihar and Nepal . This form of painting is practice as a ritual. Each nation has a self-expression. 
The people of Mithila expressed the feelings of beauty in such a way which suited their temperament and ideals. 
Folk art is always practiced by a group with in the periphery of a society. But the geographical and cultural factors of Mithila did not collaborated for creative activities. Consequently the people of Mithila developed an entirely different form of art catering to their needs and taste which presented the primitive impetuous and conventional survivals in a distinctive manner. The study of Folk art establishes a deep relationship between art and culture other than the aesthetic deliberation . 
During the initial stages of Madhubani paintings congregation of symbolic images of the lotus plant, the bamboo grove, fishes, birds and snakes in union were depicted. These images represented productiveness and creation of life . The style of painting varies from village to village. The ones made by the upper castes, Brahmin and Kayasthas have a unique quality of space. There are small figures and large figures juxtaposed with each other. The symbols used in the painting resemble those on pottery found at Harappa, an important Indus valley civilisation site. Folklore has it that women of King Janaka’s household used to paint on walls. 
Urmila (Lakhsmana’s wife) made his image on a wall and worshipped it when he went to the forest with his brother Lord Rama and Sitadevi during his exile. This is from the Indian epic Ramayana.
The women behind the making and creation of the art Madhubani paintings which is Hindu style of painting attained worldwide distinction adept mainly in Mithila and northern parts of region of Bihar and Nepal. The Artists of this art are simple housewives, who have never been to any school of art. 
The women of Mithila decorated the walls and floors of their houses for every social and religious festival. These paintings are executed in a very simple manner. There is hardly any one country except India where folk paintings were initiated by females and were presented on the international stage in a developed form. 
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