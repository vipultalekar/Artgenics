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
	<title>Potrait Painting</title>
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
   <img src="Portrait.jpg" alt="">
</div>
<div class="content">
<p>
Portrait painting is a genre in painting, where the intent is to represent a specific human subject. 
The term 'portrait painting' can also describe the actual painted portrait. 
Portraitists may create their work by commission, for public and private persons, or they may be inspired by admiration or affection for the subject. 
Portraits often serve as important state and family records, as well as remembrances.
Historically, portrait paintings have primarily memorialized the rich and powerful. 
Over time, however, it became more common for middle-class patrons to commission portraits of their families and colleagues.
Today, portrait paintings are still commissioned by governments, corporations, groups, clubs, and individuals. 
In addition to painting, portraits can also be made in other media such as prints (including etching and lithography), photography, video and digital media.
It might seem obvious that a painted portrait is intended to achieve a likeness of the sitter that is recognisable to those who have seen them, and ideally is a very good record of their appearance. 
In fact this concept has been slow to grow, and it took centuries for artists in different traditions to acquire the distinct skills for painting a good likeness.
</p> 
<p><b>Technique and practice</b></p> 
<p>
A well-executed portrait is expected to show the inner essence of the subject (from the artist's point of view) or a flattering representation, not just a literal likeness. 
As Aristotle stated, "The aim of Art is to present not the outward appearance of things, but their inner significance; for this, not the external manner and detail, constitutes true reality. 
Artists may strive for photographic realism or an impressionistic similarity in depicting their subject, but this differs from a caricature which attempts to reveal character through exaggeration of physical features. 
The artist generally attempts a representative portrayal, as Edward Burne-Jones stated, "The only expression allowable in great portraiture is the expression of character and moral quality, not anything temporary, fleeting, or accidental.” 
In most cases, this results in a serious, closed lip stare, with anything beyond a slight smile being rather rare historically. Or as Charles Dickens put it, "there are only two styles of portrait painting: the serious and the smirk.
" Even given these limitations, a full range of subtle emotions is possible from quiet menace to gentle contentment. However, with the mouth relatively neutral, much of the facial expression needs to be created through the eyes and eyebrows. As author and artist Gordon C. Aymar states, "the eyes are the place one looks for the most complete, reliable, and pertinent information" about the subject. 
And the eyebrows can register, "almost single-handedly, wonder, pity, fright, pain, cynicism, concentration, wistfulness, displeasure, and expectation, in infinite variations and combinations." 
</p> 
<p>
Portrait painting can depict the subject "full-length" (the whole body), "half-length" (from head to waist or hips), "head and shoulders" (bust), or just the head. 
The subject's head may turn from "full face" (front view) to profile view (side view); a "three-quarter view" ("two-thirds view") is somewhere in between, ranging from almost frontal to almost profile (the fraction is the sum of the profile [one-half of the face] plus the other side's "quarter-face"; alternatively, it is quantified 2⁄3, also meaning this partial view is more than half a face). 
Occasionally, artists have created composites with views from multiple directions, as with Anthony van Dyck's triple portrait of Charles I in Three Positions.
There are even a few portraits where the front of the subject is not visible at all. 
Andrew Wyeth's Christina's World (1948) is a famous example, where the pose of the disabled woman – with her back turned to the viewer – integrates with the setting in which she is placed to convey the artist's interpretation. 
</p>
<p>Among the other possible variables, the subject can be clothed or nude; indoors or out; standing, seated, reclining; even horse-mounted. Portrait paintings can be of individuals, couples, parents and children, families, or collegial groups. 
They can be created in various media including oils, watercolor, pen and ink, pencil, charcoal, pastel, and mixed media.
Artists may employ a wide-ranging palette of colors, as with Pierre-Auguste Renoir's Mme. Charpentier and her children, 1878 or restrict themselves to mostly white or black, as with Gilbert Stuart's Portrait of George Washington (1796).</p>
<p>Sometimes, the overall size of the portrait is an important consideration. 
Chuck Close's enormous portraits created for museum display differ greatly from most portraits designed to fit in the home or to travel easily with the client. 
Frequently, an artist takes into account where the final portrait will hang and the colors and style of the surrounding décor. </p>
<p>Creating a portrait can take considerable time, usually requiring several sittings. Cézanne, on one extreme, insisted on over 100 sittings from his subject. Goya on the other hand, preferred one long day's sitting. 
The average is about four. Portraitists sometimes present their sitters with a portfolio of drawings or photos from which a sitter would select a preferred pose, as did Sir Joshua Reynolds. Some, such as Hans Holbein the Younger make a drawing of the face, then complete the rest of the painting without the sitter. 
In the 18th century, it would typically take about one year to deliver a completed portrait to a client.</p>
<p>Managing the sitter's expectations and mood is a serious concern for the portrait artist. 
As to the faithfulness of the portrait to the sitter's appearance, portraitists are generally consistent in their approach. 
Clients who sought out Sir Joshua Reynolds knew that they would receive a flattering result, while sitters of Thomas Eakins knew to expect a realistic, unsparing portrait. Some subjects voice strong preferences, others let the artist decide entirely.
Oliver Cromwell famously demanded that his portrait show "all these roughnesses, pimples, warts, and everything as you see me, otherwise I will never pay a farthing for it.” </p>
<p>After putting the sitter at ease and encouraging a natural pose, the artist studies his subject, looking for the one facial expression, out of many possibilities, that satisfies his concept of the sitter's essence. 
The posture of the subject is also carefully considered to reveal the emotional and physical state of the sitter, as is the costume. To keep the sitter engaged and motivated, the skillful artist will often maintain a pleasant demeanor and conversation. 
Élisabeth Vigée-Lebrun advised fellow artists to flatter women and compliment their appearance to gain their cooperation at the sitting. </p>
<p>Central to the successful execution of the portrait is a mastery of human anatomy. Human faces are asymmetrical and skillful portrait artists reproduce this with subtle left-right differences. 
Artists need to be knowledgeable about the underlying bone and tissue structure to make a convincing portrait.</p>
<p>For complex compositions, the artist may first do a complete pencil, ink, charcoal, or oil sketch which is particularly useful if the sitter's available time is limited. Otherwise, the general form then a rough likeness is sketched out on the canvas in pencil, charcoal, or thin oil. In many cases, the face is completed first, and the rest afterwards. In the studios of many of the great portrait artists, the master would do only the head and hands, while the clothing and background would be completed by the principal apprentices. There were even outside specialists who handled specific items such as drapery and clothing, such as Joseph van Aken Some artists in past times used lay-figures or dolls to help establish and execute the pose and the clothing. 
The use of symbolic elements placed around the sitter (including signs, household objects, animals, and plants) was often used to encode the painting with the moral or religious character of the subject, or with symbols representing the sitter's occupation, interests, or social status. The background can be totally black and without content or a full scene which places the sitter in their social or recreational milieu.</p>
<p>Self-portraits are usually produced with the help of a mirror, and the finished result is a mirror-image portrait, a reversal of what occurs in a normal portrait when sitter and artist are opposite each other. 
In a self-portrait, a righted handed artist would appear to be holding a brush in the left hand, unless the artist deliberately corrects the image or uses a second reversing mirror while painting.</p>
<p>Occasionally, the client or the client's family is unhappy with the resulting portrait and the artist is obliged to re-touch it or do it over or withdraw from the commission without being paid, suffering the humiliation of failure. 
Jacques-Louis David celebrated Portrait of Madame Récamier, wildly popular in exhibitions, was rejected by the sitter, as was John Singer Sargent's notorious Portrait of Madame X. John Trumbull's full-length portrait, General George Washington at Trenton, was rejected by the committee that commissioned it. 
The famously prickly Gilbert Stuart once replied to a client's dissatisfaction with his wife's portrait by retorting, "You brought me a potato, and you expect a peach!" </p>
<p>A successful portrait, however, can gain the lifelong gratitude of a client. 
Count Balthazar was so pleased with the portrait Raphael had created of his wife that he told the artist, "Your image…alone can lighten my cares. 
That image is my delight; I direct my smiles to it, it is my joy." 
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