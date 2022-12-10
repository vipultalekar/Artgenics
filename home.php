<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="./css/all.min.css">
   <link rel="stylesheet" href="./css/home.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<script src="js/script.js"></script>

   <!--slider-->
   <div class="slider">
        <div class="myslide fade">
            <div class="txt">
                <h1>Artgenics</h1>
                <p>The beauty of art unfolded</p>
            </div>
            <img src="img/slider1.png" style="width: 100%; height: 100%" />
        </div>

        <div class="myslide fade">
            <div class="txt">
               
            </div>
            <img src="img/slider2.jpg" style="width: 100%; height: 100%" />
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>Follow us on instagram </h1>
                <a href="https://www.instagram.com/artgenics_website/">@artgenics</a>
            </div>
            <img src="img/slider3.jpg" style="width: 100%; height: 100%" />
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h2>Get discount on brand new products</h2>
                <a href="faq.php">KNOW HOW ></a>
                
            </div>
            <img src="img/slider4.jpg" style="width: 100%; height: 100%" />
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>Like it ! buy it! </h1>
                
            </div>
            <img src="img/slider5.jpg" style="width: 100%; height: 100%" />
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  
    <script src="./js/home1.js"></script>

    <!--services-->
    <div class="detail">
        <div class="grey">
            <div class="det1">
                <h2>
                    <span> BROWSE THE ART </span>
                </h2>
            </div>

            <div class="det2">
                <div class="IT">
                    <a href="./Browse/Abstract.php">
                    <img src="./img/abstract.jpg" alt="" />
                    <h1>
                        <span> Abstract Art </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/charcoal.php">
                    <img src="./img/charcoal.jpg" alt="" />
                    <h1>
                        <span> Charcoal Painting </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/glass.php">
                    <img src="./img/glass.jpg" alt="" />
                    <h1>
                        <span> Glass Painting </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/impasto.php">
                    <img src="./img/impasto.jpg" alt="" />
                    <h1>
                        <span> Impasto Art </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/madhubani.php">
                    <img src="./img/madhubani-art.jpg" alt="" />
                    <h1>
                        <span> Madhubani Art </span>
                    </h1>
                </a>
                </div>

                <div class="IT">
                <a href="./Browse/mandala.php">
                    <img src="./img/mandala.jfif" alt="" />
                    <h1>
                        <span> Mandala Art </span>
                    </h1>
                </a>
                </div>

                <div class="IT">
                <a href="./Browse/minimalistic.php">
                    <img src="./img/minimalist.jpg" alt="" />
                    <h1>
                        <span> Minimalistic Art </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/portrait.php">
                    <img src="./img/potrait.jpg" alt="" />
                    <h1>
                        <span> Potrait Painting </span>
                    </h1>           
                </a>
                </div>

                <div class="IT">
                <a href="./Browse/warli.php">
                    <img src="./img/warli.jpg" alt="" />
                    <h1>
                        <span> Warli Painting </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/ink.php">
                    <img src="./img/ink.jpg" alt="" />
                    <h1>
                        <span> Ink Painting </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/collage.php">
                    <img src="./img/collage.jpg" alt="" />
                    <h1>
                        <span> Collage Art </span>
                    </h1>
                    </a>
                </div>

                <div class="IT">
                <a href="./Browse/gond.php">
                    <img src="./img/gond-painting.jpg" alt="" />
                    <h1>
                        <span> Gond Painting </span>
                    </h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--How we work-->
    <div class="hero">
        <div class="color">
            <h1>Famous Historic Paintings</h1>

            <div class="containers">
                <div class="Testimonials">
                    <div class="indicator">
                        <span class="btn2 actives"></span>
                        <span class="btn2"></span>
                        <span class="btn2"></span>
                        <span class="btn2"></span>
                    </div>
                    <div class="slide-row" id="slide">
                        <div class="slide-col">
                            <div class="user-text">
                                <h3>Mona Lisa</h3>
                                <p>
                                Leonardo da Vinci, “Mona Lisa,” ca. 1503-1516 
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="./img/2slider1.jpg" alt="" />
                            </div>
                        </div>

                        <div class="slide-col">
                            <div class="user-text">
                                <h3>Le Demoiselles d'Avignon</h3>
                                <p>
                                Pablo Picasso, “Le Demoiselles d'Avignon,” 1907. 
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="./img/2slider2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="slide-col">
                            <div class="user-text">
                                <h3>The Anatomy Lesson of Dr Nicolaes Tulp</h3>
                                <p>
                                Rembrandt, “The Anatomy Lesson of Dr Nicolaes Tulp,” 1632 
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="./img/2slider3.jpg" alt="" />
                            </div>
                        </div>

                        <div class="slide-col">
                            <div class="user-text">
                                <h3>Judith Slaying Holofernes</h3>
                                <p>
                                Artemisia Gentileschi, “Judith Slaying Holofernes,” 1614-1620 
                                </p>
                            </div>
                            <div class="user-img">
                                <img src="./img/2slider4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
    <script src="./js/home2.js"></script>





<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



</body>
</html>