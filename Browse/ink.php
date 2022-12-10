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
	<title>Ink Painting</title>
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
   <img src="Ink.jpg" alt="">
</div>
<div class="content">
<p>
Ink wash painting is a type of Chinese ink brush painting which uses black ink, such as that used in Chinese calligraphy, in different concentrations. 
Emerging during the Tang dynasty of China (618–907), it overturned earlier, more realistic techniques. It is typically monochrome, using only shades of black, with a great emphasis on virtuoso brushwork and conveying the perceived "spirit" or "essence" of a subject over direct imitation.
 It flourished from the Song dynasty in China (960–1279) onwards, as well as in Japan after it was introduced by Zen Buddhist monks in the 14th century. 
 Some Western scholars divide Chinese painting (including ink wash painting) into three periods: times of representation, times of expression, and historical Oriental art. Chinese scholars have their own views different from this, and they believe that contemporary Chinese ink wash paintings are the pluralistic continuation of multiple historical traditions. 
In China and Japan, but much less so in Korea, ink wash painting formed a distinct stylistic tradition, with a different set of artists working in it from those doing other types of painting. 
Especially in China, it was a gentlemanly occupation associated with poetry and calligraphy, and often produced by the scholar-official or literati class, ideally illustrating their own poetry, and producing the paintings as gifts for friends or patrons, rather than painting for payment. 
In practice a talented painter often had a very useful advantage in climbing the bureaucratic ladder. 
In Korea, painters were less segregated, and more willing to paint in two techniques, such as mixing areas of colour with monochrome ink. 
The vertical hanging scroll was the classic format; the long horizontal handscroll format tended to be associated with professional coloured painting, but was also used for literati painting. In both formats, paintings were generally kept rolled up, and brought out for the owner to admire, often with a small group of friends. 
Chinese collectors liked to stamp paintings with their seals, usually in red inkpad, and sometimes added poems or notes of appreciation. Some old and famous paintings have become rather disfigured by this; the Qianlong Emperor was a particular offender. 
In landscape painting the scenes depicted are typically imaginary, or very loose adaptations of actual views. The shan shui style of mountain landscapes are by far the most common, often evoking particular areas traditionally famous for their beauty, from which the artist may have been very distant. Water is very often included.

</p> 
<p><b>Technique, materials and tools</b></p> 
<p>
Ink wash painting uses tonality and shading achieved by varying the ink density, both by differential grinding of the ink stick in water and by varying the ink load and pressure within a single brushstroke. 
Ink wash painting artists spend years practicing basic brush strokes to refine their brush movement and ink flow. 
These skills are closely related to those needed for basic writing in East Asian characters, and then for calligraphy, which essentially use the same ink and brushes. 
In the hand of a master, a single stroke can produce considerable variations in tonality, from deep black to silvery gray. Thus, in its original context, shading means more than just dark-light arrangement: It is the basis for the nuance in tonality found in East Asian ink wash painting and brush-and-ink calligraphy. 
Once a stroke is painted, it cannot be changed or erased. 
This makes ink and wash painting a technically demanding art form requiring great skill, concentration, and years of training.
</p> 
<p>
<b>1)Brush:-</b>The earliest intact ink brush was found in 1954 in the tomb of a Chu citizen from the Warring States period (475-221 BCE) located in an archaeological dig site Zuo Gong Shan 15 near Changsha . 
This primitive version of an ink brush found had a wooden stalk and a bamboo tube securing the bundle of hair to the stalk. 
Legend wrongly credits the invention of the ink brush to the later Qin general Meng Tian. Traces of a writing brush, however, were discovered on the Shang jades, and were suggested to be the grounds of the Oracle bone script inscriptions. 
The writing brush entered a new stage of development in the Han dynasty. 
First, the decorative craft of engraving and inlaying on the pen-holder appeared. 
Second, some writings on the production of writing brush have also survived. For example, the first Monograph on the selection, production and function of writing brush was written by Cai Yong in the eastern Han dynasty .
Third, the special form of "hairpin white pen" appeared. Officials in the Han dynasty often sharpened the end of the brush and stuck it in their hair or hat for their convenience. Worshipers also often put pen on their heads to show respect. 
To the Yuan and Ming dynasty, Huzhou emerged a group of pen making experts, such as Wu Yunhui, Feng Yingke, Lu Wenbao, Zhang Tianxi, etc. Huzhou has been the center of Chinese brush making since the Qing dynasty.
At the same time, there was many famous brushes in other places, such as Ruyang Liu brush in Henan province, Li Dinghe brush in Shanghai, Wu Yunhui in Jiangxi province. 
Ink wash painting brushes are similar to the brushes used for calligraphy and are traditionally made from bamboo with goat, cattle, horse, sheep, rabbit, marten, badger, deer, boar and wolf hair. The brush hairs are tapered to a fine point, a feature vital to the style of wash paintings. 
Different brushes have different qualities. A small wolf-hair brush that is tapered to a fine point can deliver an even thin line of ink (much like a pen). 
A large wool brush (one variation called the 'big cloud') can hold a large volume of water and ink. When the big cloud brush rains down upon the paper, it delivers a graded swath of ink encompassing myriad shades of gray to black. 
</p>
<p><b>2)Inkstick:-</b>Ink wash painting is usually done on rice paper (Chinese) or washi (Japanese paper) both of which are highly absorbent and unsized. Silk is also used in some forms of ink painting. Many types of Xuan paper and washi do not lend themselves readily to a smooth wash the way watercolor paper does. Each brush stroke is visible, so any "wash" in the sense of Western style painting requires partially sized paper. Paper manufacturers today understand artists' demands for more versatile papers and work to produce kinds that are more flexible. If one uses traditional paper, the idea of an "ink wash" refers to a wet-on-wet technique, applying black ink to paper where a lighter ink has already been applied, or by quickly manipulating watery diluted ink once it has been applied to the paper by using a very large brush. 
In ink wash paintings, as in calligraphy, artists usually grind inkstick over an inkstone to obtain black ink, but prepared liquid inks are also available. Most inksticks are made of soot from pine or oil combined with animal glue. An artist puts a few drops of water on an inkstone and grinds the inkstick in a circular motion until a smooth, black ink of the desired concentration is made. Prepared liquid inks vary in viscosity, solubility, concentration, etc., but are in general more suitable for practicing Chinese calligraphy than executing paintings.[20] Inksticks themselves are sometimes ornately decorated with landscapes or flowers in bas-relief and some are highlighted with gold. 
</p>
<p><b>3)Xuan paper:-</b>Paper was first developed in China in the first decade of 100 AD. Previous to its invention, bamboo slips and silks were used for writing material. Several methods of paper production developed over the centuries in China. However, the paper which was considered of highest value was that of the Jingxian in Anhui province. Xuan paper features great tensile strength, smooth surface, pure and clean texture and clean stroke, great resistance to crease, corrosion, moth and mold. Xuan paper has a special ink penetration effect, which is not readily available in paper made in Western countries. Xuan paper was first mentioned in ancient Chinese books Notes of Past Famous Paintings and New Book of Tang. It was originally produced in the Tang dynasty in Jing County, which was under the jurisdiction of Xuan Prefecture (Xuanzhou), hence the name Xuan paper. During the Tang dynasty, the paper was often a mixture of hemp (the first fiber used for paper in China) and mulberry fiber. 
The materials used in Xuan paper are closely related to the geographical environment of Jing County. The bark of the Pteroceltis tatarinowii, a common variety of elm, is used as the main material for the production of rice paper in this area. Rice and several other materials were later added to the recipe in the Song and Yuan Dynasties. Around that time, bamboo and mulberry also began to be used to produce rice paper. 
The production of Xuan paper is roughly eighteen-step processes - taken in detail, over a hundred steps may be counted. Some paper makers keep their process strictly secret. The process includes cooking and bleaching the bark of Pteroceltis tatarinowii and adding various fruit juices. 
</p>
<p><b>4)Inkstone:-</b>The inkstone is not only a traditional Chinese stationery device, but also an important tool of ink painting. 
It is a stone mortar used for the grinding and containment of ink. In addition to stones, inkstones are also made of clay, bronze, iron and porcelain. 
This device evolved from the friction tool used to rub dyes about six to seven thousand years ago.</p>


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