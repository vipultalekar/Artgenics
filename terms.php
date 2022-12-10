<?php

include 'components/connect.php';

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
    <title>Terms</title>

    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="term">
    <div class="terms">
<h1> Terms and conditions </h1>
<br>
<br>
<p>Welcome to Artgenics.com Our services and products are provided subject to the following terms and 
    conditions. By using the website, you agree to be <br>bound by these terms and conditions. 
    Please read them carefully, as they contain important provisions relating to your use of the site, 
    including an agreement to engage in binding arbitration to resolve any disputes between us. The website 
    is owned and operated by Artgenics.com, Inc. ("Artgenics.com").

<br>
<br>
 <h2> Terms of Use  </h2> <br>
<br>
<h3>Declaration</h3>
<br>
<p> 
This claims that the artwork provided by the users to us is the orignal work of the user.
No copying of work has taken place. 
In any case , an issue is raised regarding the ownership of artwork , 'Artgenics' would not be responsible in any way</p>

<br>
<h3> License and Website Access  </h3> <br>
<p>We grant you a limited, revocable license to access and make personal use of the website as our customer. 
    However, you are not permitted to:</p>
<br><br>

<p> reproduce, duplicate, copy, sell or otherwise exploit the website or any product image, product listing, 
    product description, price, page layout, page design, trade dress, trademark, logo or other content 
    ("Website Content") for any commercial purpose, except as expressly provided;
use a robot, spider or data mining or extraction tool or process to monitor, extract or copy Website Content 
(except in the operation or use of internet "search engines," hit counters or similar technology);<br>
use any meta tags, search terms, key terms, or the like that contain the website's name or trademarks 
used on the website;
engage in any activity that interferes with the website or another user's ability to use the website;
modify, create derivative works from, reverse engineer, decompile or disassemble any technology used to 
provide the website and the services offered on the website; or<br>
assist or encourage any third party in engaging in any activity prohibited by these Terms of Use.
Any use of the website or Website Content that is not expressly authorized herein is prohibited and 
immediately terminates the license granted herein.<br> </p>
<br>
<br>
<p> Electronic Communications 
You consent to receive communications from us by e-mail. You agree that all agreements, notices, disclosures 
and other communications that we provide to you by e-mail satisfy any legal requirement that such 
communications be in writing. </p>
<br>
<br>
<p> If you opt in to receive SMS (text messages) from Artgenics.com (as/when available), or use a mobile 
    application, the following additional terms and conditions ("Mobile Terms") also apply to you. Your access
     to the Sites via your mobile device or use of a mobile application confirms your agreement to these 
     Mobile Terms, as well as the rest of the Terms and Conditions. </p>
<br>
<br>
<p> By opting in, you agree to receive promotional SMS text messages on your mobile device. Your consent is 
    not required as a condition of purchasing any goods or services from Artgenics.com. By agreeing to receive 
    SMS messages from Art.com, you certify that you are over 18 years of age and (a) you are the mobile 
    account holder or (b) you have the account holder's permission to enroll the designated mobile phone 
    \number and can incur any mobile message or data charges. You agree that you are solely responsible 
    for all message and data charges that apply to use of your mobile device to access the Sites or use of a 
    mobile application. All such charges are billed by and payable to your mobile service provider. Please 
    contact your participating mobile service provider for pricing plans, participation status and details. 
    You understand that wireless through Wi-Fi or a participating mobile service provider may not be 
    available in all areas at all times and may be affected by product, software, coverage or other 
    service changes made by your mobile service provider or otherwise. Additional terms and conditions may 
    apply to your use of a mobile application, based on the type of mobile device on which you install and 
    use the mobile application. You can opt out of receiving SMS messages at any time. </p>
<br><br>
<h3> Your Account </h3> <br>
<p> If you use the website, you are responsible for maintaining the confidentiality of your account and 
    password and for restricting access to your computer, and you agree to accept responsibility for all 
    activities that occur under your account or password. We reserve the right to refuse service, terminate 
    accounts, remove or edit content, or cancel orders in our sole discretion. </p>
<br><br>
 
<h3> Copyright </h3> <br>
<p> All Website Content is our property or the property of our content suppliers and is protected by 
    international copyright laws. The purchase of any product does not provide the purchaser with any c
    opyright interest or other intellectual property right in the product. All Website Content that is not 
    our property is used with permission. The arrangement and compilation of all Website Content is our 
    exclusive property and is protected by international copyright laws. All software used on the website 
    is our property or the property of our software suppliers and is protected by international copyright 
    laws. </p>
<br><br>
<h3> Trademarks </h3> <br>
<p> Certain graphics, logos, page headers, button icons, scripts, and service names are trademarks, service
     marks, or trade dress of our company or our affiliated companies. Our trademarks and trade dress may not 
     be used for any commercial or other purposes without our prior written consent. All other trademarks and 
     service marks not owned by Artgenics.com or our affiliated companies that appear on the website are the 
     property of their respective owners and may or may not be used without their prior written consent. </p>
<br><br>

<h3> Copyright & Trademark Compliance; Complaints </h3> <br>
<p> We honor the intellectual property rights of others. If you believe that your work has been copied or used 
    on the website in a way that constitutes copyright or trademark infringement, please notify us by following
     the procedure set forth in the immediately following paragraph. Except in limited instances under 
     authorized agreements, we do not reproduce or manufacture the products offered on our site, but rather 
     we purchase or license products from third party suppliers that represent to us that they have sufficient 
     rights to allow us to display and sell the products on the website. Upon receipt of any bona fide claim of
      infringement, or upon becoming aware of any actual or alleged infringement by any other means, we will 
      remove such actual or alleged infringing product(s) from the website and/or cease sales of the product(s)
       pending our investigation. </p>
<br><br>
<h3> Statement on Human Trafficking and Slavery </h3> <br>
<p> We are part of a global community and supply chain. We are selective of our vendors and make efforts to 
    ensure that the workers in this country and abroad that make up our supply chain are protected. We will 
    not tolerate the involvement of our suppliers in human trafficking and slavery, including sweatshops and 
    forced or child labor. We obtain contractual representations from our vendors of their compliance with 
    such laws and have the discretion to, with or without notice, inquire on their practices. </p>
<br><br>

<h3> Notice to California Residents </h3> <br>
<p> Some of our products, such as our wood mounts and SwitchArt™ products, are made with composite wood 
    products such as particleboard and medium density fiberboard (MDF). These wood components are tested 
    for safety in accordance with the California Composite Wood Products Airborne Toxic Control Measure 
    (ATCM). Our products comply with applicable Phase 2 formaldehyde emission standards. </p>
<br><br>

<h3> Reviews, Comments, Communications and Other Content </h3> <br>
<p> Visitors may post or submit reviews, comments, suggestions, communications and other information via our 
    website, by email or through one of our website operation partners, or social media channels. You agree 
    not to submit, transmit, or otherwise make available in any manner any content (i) that is unlawful, 
    harmful, obscene, hateful, threatening, abusive, defamatory, harassing, libelous, invasive of another's 
    privacy, or is otherwise objectionable, (ii) that infringes the intellectual property rights of any party 
    or (iii) which contains a chain letter or constitutes any form of commercial solicitation, political 
    campaign, mass mailing, "spam" or software virus. You may not use a false e-mail address or otherwise 
    provide information that would be misleading as to the origin of such content. Although we do not regularly
     review content you submit, we reserve the right to edit or remove any content that we find objectionable 
     for any reason. You represent and warrant that you possess all necessary rights to use the content that 
     you submit and that use of such content does not violate generally accepted standards of decency. You 
     agree to defend, indemnify, and hold us harmless from and against any and all claims arising out of or 
     relating to any content that you submit. By submitting content, you automatically grant to us, or warrant 
     that the owner of such content has expressly granted to us, a royalty-free, perpetual, irrevocable, 
     worldwide, unlimited, nonexclusive right and license to use, reproduce, create derivative works from, 
     modify, publish, edit, translate, distribute, perform and display your user name or the content in any 
     media, form, format, manner or forum now known or hereafter developed without compensation to you. We 
     take no responsibility and assume no liability for any content posted by visitors to our website </p>
</div>
</div>
    


<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>