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
	<title>Charcoal Art</title>
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
   <img src="Mandala.jpg" alt="">
</div>
<div class="content">
<p>
A mandala (Sanskrit: मण्डल, romanized: maṇḍala) is a geometric configuration of symbols. 
In various spiritual traditions, mandalas may be employed for focusing attention of practitioners and adepts, as a spiritual guidance tool, for establishing a sacred space and as an aid to meditation and trance induction. 
In the Eastern religions of Hinduism, Buddhism, Jainism and Shintoism it is used as a map representing deities, or especially in the case of Shintoism, paradises, kami or actual shrines. 
A mandala generally represents the spiritual journey, starting from outside to the inner core, through layers.
</p>  
<p><b>Hinduism</b></p>
<p>In Hinduism, a basic mandala, also called a yantra, takes the form of a square with four gates containing a circle with a center point. 
Each gate is in the general shape of a T. Mandalas often have radial balance. 
</p> 
<p>A yantra is similar to a mandala, usually smaller and using a more limited colour palette.
It may be a two- or three-dimensional geometric composition used in sadhanas, puja or meditative rituals, and may incorporate a mantra into its design. It is considered to represent the abode of the deity. Each yantra is unique and calls the deity into the presence of the practitioner through the elaborate symbolic geometric designs. 
According to one scholar, "Yantras function as revelatory symbols of cosmic truths and as instructional charts of the spiritual aspect of human experience"</p>
<p>Many situate yantras as central focus points for Hindu tantric practice. 
Yantras are not representations, but are lived, experiential, nondual realities.
Despite its cosmic meanings a yantra is a reality lived. 
Because of the relationship that exists in the Tantras between the outer world (the macrocosm) and man's inner world (the microcosm), every symbol in a yantra is ambivalently resonant in inner–outer synthesis, and is associated with the subtle body and aspects of human consciousness. 
</p>
<p>The term 'mandala' appears in the Rigveda as the name of the sections of the work, and Vedic rituals use mandalas such as the Navagraha mandala to this day. </p>
<p><b>Buddhism</b></p>
<p>In Vajrayana Buddhism, mandalas have been developed also into sandpainting.
They are also a key part of Anuttarayoga Tantra meditation practices.
The man mandala can be shown to represent in visual form the core essence of the Vajrayana teachings. 
The mind is "a microcosm representing various divine powers at work in the universe." 
The mandala represents the nature of the Pure Land, Enlightened mind.
</p>
<p>An example of this type of mandala is Vajrabhairava mandala a silk tapestry woven with gilded paper depicting lavish elements like crowns and jewelry, which gives a three-dimensional effect to the piece. 
A mandala can also represent the entire universe, which is traditionally depicted with Mount Meru as the axis mundi in the center, surrounded by the continents. One example is the Cosmological Mandala with Mount Meru, a silk tapestry from the Yuan dynasty that serves as a diagram of the Tibetan cosmology, which was given to China from Nepal and Tibet. 
</p>
<p>In the mandala, the outer circle of fire usually symbolises wisdom. The ring of eight charnel grounds represents the Buddhist exhortation to be always mindful of death, and the impermanence with which samsara is suffused: "such locations were utilized in order to confront and to realize the transient nature of life".
Described elsewhere: "within a flaming rainbow nimbus and encircled by a black ring of dorjes, the major outer ring depicts the eight great charnel grounds, to emphasize the dangerous nature of human life".
Inside these rings lie the walls of the mandala palace itself, specifically a place populated by deities and Buddhas.</p>
<p>One well-known type of mandala is the mandala of the "Five Buddhas", archetypal Buddha forms embodying various aspects of enlightenment. 
Such Buddhas are depicted depending on the school of Buddhism, and even the specific purpose of the mandala. 
A common mandala of this type is that of the Five Wisdom Buddhas (a.k.a. Five Jinas), the Buddhas Vairocana, Aksobhya, Ratnasambhava, Amitabha and Amoghasiddhi. 
When paired with another mandala depicting the Five Wisdom Kings, this forms the Mandala of the Two Realms.</p>
<p>Mandalas are commonly used by tantric Buddhists as an aid to meditation.
The mandala is "a support for the meditating person",something to be repeatedly contemplated to the point of saturation, such that the image of the mandala becomes fully internalised in even the minutest detail and can then be summoned and contemplated at will as a clear and vivid visualized image. 
With every mandala comes what Tucci calls "its associated liturgy ... contained in texts known as tantras", instructing practitioners on how the mandala should be drawn, built and visualised, and indicating the mantras to be recited during its ritual use.
By visualizing "pure lands", one learns to understand experience itself as pure, and as the abode of enlightenment. 
The protection that we need, in this view, is from our own minds, as much as from external sources of confusion.
In many tantric mandalas, this aspect of separation and protection from the outer samsaric world is depicted by "the four outer circles: the purifying fire of wisdom, the vajra circle, the circle with the eight tombs, the lotus circle". 
The ring of vajras forms a connected fence-like arrangement running around the perimeter of the outer mandala circle. 
</p>
<p>As a meditation on impermanence (a central teaching of Buddhism), after days or weeks of creating the intricate pattern of a sand mandala, the sand is brushed together into a pile and spilled into a body of running water to spread the blessings of the mandala.
Kværne in his extended discussion of sahaja, discusses the relationship of sadhana interiority and exteriority in relation to mandala thus:
...external ritual and internal sadhana form an indistinguishable whole, and this unity finds its most pregnant expression in the form of the mandala, the sacred enclosure consisting of concentric squares and circles drawn on the ground and representing that adamant plane of being on which the aspirant to Buddha hood wishes to establish himself. \
The unfolding of the tantric ritual depends on the mandala; and where a material mandala is not employed, the adept proceeds to construct one mentally in the course of his meditation." 

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