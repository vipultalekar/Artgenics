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
    <title>Privacy Policy</title>

     <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="./css/all.min.css">
   <link rel="stylesheet" href="./css/home.css">

</head>
<body>
    
<?php include 'components/user_header.php'; ?>


<div class="policy">

<h1>PRIVACY POLICY</h1>
<br>
<br>

<p> www.artgenics.com website is owned by Artgenics, which is a data controller of your personal data. </p>
<br>
<p>We have adopted this Privacy Policy, which determines how we are processing the information collected 
   by www.artgenics.com, which also provides the reasons why we must collect certain personal data about you. 
   Therefore, you must read this Privacy Policy before using www.artgenics.com website. </p>
<br>
<p> We take care of your personal data and undertake to guarantee its confidentiality and security. </p>
<br>
<br>
<h3>Personal information we collect:</h3>
<p> When you visit the www.artgenics.com, we automatically collect certain information about your device, 
   including information about your web browser, IP address, time zone, and some of the installed cookies 
   on your device. Additionally, as you browse the Site, we collect information about the individual web 
   pages or products you view, what websites or search terms referred you to the Site, and how you interact 
   with the Site. We refer to this automatically-collected information as “Device Information.” Moreover, we 
   might collect the personal data you provide to us (including but not limited to Name, Surname, Address, 
   payment information, etc.) during registration to be able to fulfill the agreement. </p>
<br>
<br>
<h3>Why do we process your data?</h3>
<p> Our top priority is customer data security, and, as such, we may process only minimal user data, only 
   as much as it is absolutely necessary to maintain the website. Information collected automatically is
   used only to identify potential cases of abuse and establish statistical information regarding website 
   usage. This statistical information is not otherwise aggregated in such a way that it would identify any 
   particular user of the system. </p>
<br>
<p> You can visit the website without telling us who you are or revealing any information, by which someone 
   could identify you as a specific, identifiable individual. If, however, you wish to use some of the 
   website's features, or you wish to receive our newsletter or provide other details by filling a form, 
   you may provide personal data to us, such as your email, first name, last name, city of residence, 
   organization, telephone number. You can choose not to provide us with your personal data, but then you 
   may not be able to take advantage of some of the website's features. For example, you won't be able to 
   receive our Newsletter or contact us directly from the website. Users who are uncertain about what 
   information is mandatory are welcome to contact us via artgenicsweb@gmail.com. </p>
<br>
<br>
<p> Your rights:If you are a European resident, you have the following rights related to your personal data: </p>
<br>
<br>
<p> The right to be informed.</p>
<p> The right of access.<br></p>
<p> The right to rectification.<br></p>
<p> The right to erasure.<br></p>
<p> The right to restrict processing.<br></p>
<p> The right to data portability.<br></p>
<p> The right to object.<br></p>
<p> Rights in relation to automated decision-making and profiling.<br> </p>
<p> If you would like to exercise this right, please contact us through the contact information below.<br> </p>
<br>
<br>
<h3>Additionally,</h3>
<p>if you are a European resident, we note that we are processing your information in order to fulfill 
   contracts we might have with you (for example, if you make an order through the Site), or otherwise 
   to pursue our legitimate business interests listed above. Additionally, please note that your information 
   might be transferred outside of Europe, including Canada and the United States. </p>
<br>
<h3>Links to other websites:</h3>
<p> Our website may contain links to other websites that are not owned or controlled by us. Please be aware 
   that we are not responsible for such other websites or third parties' privacy practices. We encourage you 
   to be aware when you leave our website and read the privacy statements of each website that may collect 
   personal information.</p>
<br>
<h3>Information security:</h3>
<p> We secure information you provide on computer servers in a controlled, secure environment, protected 
   from unauthorized access, use, or disclosure. We keep reasonable administrative, technical, and physical 
   safeguards to protect against unauthorized access, use, modification, and personal data disclosure in its 
   control and custody. However, no data transmission over the Internet or wireless network can be guaranteed.</p>
<br>
<h3>Legal disclosure:</h3>
<p> We will disclose any information we collect, use or receive if required or permitted by law, such as to 
   comply with a subpoena or similar legal process, and when we believe in good faith that disclosure is 
   necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond 
   to a government request. </p>
<br>
<h3>Contact information: </h3>
<p> If you would like to contact us to understand more about this Policy or wish to contact us concerning any
matter relating to individual rights and your Personal Information, you may send an email to 
artgenicsweb@gmail.com </p>
<br>
<br>

</div>


<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>