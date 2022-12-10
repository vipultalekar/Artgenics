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
   <img src="Charcoal.jpg" alt="">
</div>
<div class="content">
<p>
Artists' charcoal is a form of a dry art medium made of finely ground organic materials that are held together by a gum or wax binder or produced without the use of binders by eliminating the oxygen inside the material during the production process. These charcoals are often used by artists for their versatile properties, such as the rough texture that leaves marks less permanent than other visual arts media. Charcoal can produce lines that are very light or intensely black, while being hard to remove completely. The dry medium can be applied to almost any surface from smooth to very coarse. Fixatives are often used with charcoal drawings to solidify the position to prevent erasing or rubbing off of charcoal dusts.
The method used to create artists' charcoal is similar to that employed in other fields, such as producing gunpowder and cooking fuel. The type of wood material and preparation method allow a variety of charcoal types and textures to be produced. 

</p>  
<p><b>Types:-</b></p>
<p>
There are various types and uses of charcoal as an art medium, but the commonly used types are: Compressed, Vine, and Pencil.
<p><b><i>Vine charcoal</i></b> is a long and thin charcoal stick that is the result of burning grape vines in a kiln without air. It comes in shades of gray. 
</p><p><b><i>Willow charcoal </i></b>is a long and thin charcoal stick that is the result of burning willow sticks in a kiln without air. It is darker in color than vine charcoal. 
The removable properties of willow and vine charcoal, through dusting and erasing, are favored by artists for making preliminary sketches or basic compositions. This also makes such charcoal less suitable for creating detailed images.
</p><p><b><i>Compressed charcoal</i></b> (also referred as charcoal sticks) is shaped into a block or a stick. Intensity of the shade is determined by hardness. The amount of gum or wax binders used during the production process affects the hardness, softer producing intensely black markings while firmer leaves light markings. 
</p><p><b><i>Charcoal pencils</i></b> consist of compressed charcoal enclosed in a jacket of wood. Designed to be similar to graphite pencils while maintaining most of the properties of charcoal, they are often used for fine and crisp detailed drawings, while keeping the user's hand from being marked

</p>
<p><b>Art techniques:-</b></p>
<p>
Paper used with artists' charcoal can vary in quality. Rough texture may allow more charcoal to adhere to the paper. The use of toned paper allows different possibilities as white oil pastels (commonly referred to by the brand name Conté) can be used in combination with charcoal to create contrast. 
<p><b><i>1)Hatching</i></b></p><p>
Hatching is a method in which thin, dark lines are continuously placed parallel to each-other. When done with charcoal, it comes out smoother and darker.
</p><p><b><i>2)Rubbing</i></b></p><p>
Rubbing is done by pressing a sheet of paper against a targeted surface, then rubbing charcoal against the paper to create an image of the texture of the surface.
</p><p><b><i>3)Blending</i></b></p><p>
Blending is done to create smooth transitions between darker and lighter areas of a drawing. It can also create a shadow effect. Two common methods of blending are, using a finger to rub or spread charcoal which has been applied to the paper or the use of paper blending stumps also called a Tortillon. Many prefer to use a chamois, which is a soft square piece of leather.
</p><p><b><i>4)Lifting (Erasing)</i></p><p></b> 
Erasing is often performed with a kneaded rubber eraser. This is a malleable eraser that is often claimed to be self-cleaning. It can be shaped by kneading it softly with hands, into tips for smaller areas or flipped inside out to clean.

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