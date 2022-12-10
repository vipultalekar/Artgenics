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
    <title>FAQ</title>
        <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>


<?php include 'components/user_header.php'; ?>

    <div class="faq">




   <h1> FAQs </h1> 
   <br>
   <br>
<p> Looking for a quick answer ? you've come to the right </p>
<br>
<h2>Shipping & Delivery</h2>
<br>
 <h3>What type of packaging do you use?</h3>

<p> Posters and art prints are rolled with thick paper to protect against dust before being packaged in 
    corrugated triangular shipping containers. Framed items are covered <br>securely and placed in adjustable 
    corrugated inserts that lock the frame in position. </p>
<br><br>
<h3>When will my art arrive?</h3>

<p> You can estimate your art's arrival by adding the processing and transit times. We typically process 
    in-stock posters, prints and photographs within 24 hours, and framed items within 5-7 business days. 
    See Details. </p>
<br><br>


<br><br>
<h3>How much will shipping cost?</h3>
<p> As our product sizes vary, you will be able to find accurate shipping costs on the cart and checkout pages.
     If you want your stuff there faster, see Expedited and Overnight shipping cost at checkout. </p>
<br><br>
<h3>Is my package insured?</h3>
<p> Artgenics.com guarantees your satisfaction and we will give you a refund or a replacement for purchased 
    items you are not satisfied with. In the remote event that your package is lost or damaged upon arrival, 
    please contact our Customer Support Team through LIVE CHAT or by email.</p>
<br><br>
<h3>What happens if only a portion of my order is available for immediate shipment?</h3>
<p> We combine similar items in one shipment subject to the processing times of all items in the shipment 
    (see processing & delivery times). If an unexpected delay should occur that prevents available items 
    on your order from shipping when expected, you may specifically request that the available items be 
    shipped separately. Contact our customer support team directly by email </p>
<br><br>
<h2>Ordering</h2>
<br><br>
<h3> How do I place an order?</h3>

<p> Add the product(s) you wish to order in your shopping cart by clicking on the "Add to Cart" button located 
    next to the product image. When you're ready to complete your order, click "Continue Checkout" from within 
    your cart and follow the instructions. </p>
<br><br>
<h3>What payment options do you accept?</h3>
<p> We accept upi and credit cards. </p>
<br><br>
<h3>Can I cancel my order?</h3>
<p> To cancel an order that has not yet shipped, have your order number available and contact our Customer 
    Support Team by LIVE CHAT or emailing support@artgenics.com. We are unable to process cancellations for 
    items that have already shipped. Please visit our returns page or contact us for alternate options. </p>
<br><br>
<p> We are unable to add additional items to existing orders or substitute individual items. You will need to 
    cancel your existing order and place a new one. Thanks for your patience! </p>
<br><br>
<h3>When will my credit card be billed?</h3>

<p> Prior to shipping, we have only received a pending pre-authorization request from your financial 
    institution. When we request an authorization for your purchase, your financial institution may place a 
    hold on your account for the amount of that pre-authorization request. While your financial institution 
    may place a hold on the pre-authorized amount, your account will only be charged for the actual 
    transaction amount when the first item on the order is shipped. Any pending refunds will process when 
    all items have shipped. </p>
<br><br>
<p> Most financial institutions will remove a pre-authorization hold from your account when the actual 
    transaction amount is debited from your account or 3-5 business days after the pre-authorization request, 
    whichever occurs sooner. Since policies vary between different financial institutions, we recommend that 
    you contact your financial institution with any further questions about a pre-authorization. Art.com will 
    not release pre-authorization holds. </p>
<br><br>
<h3>How do I find a specific item from your catalog?</h3>

<p>Enter the exact name of the artwork or the catalog item number into the search box that appears at the top 
    of each page. </p>
<br><br>
<h3>Does the image on your site accurately represent what I will be sent?</h3>

<p> We strive for a high degree of image accuracy. However, in some cases, the visual representation may be 
    approximate, or prints may vary. If you are not satisfied with the product you receive, you may return it 
    within 45 days for a refund. </p>
<br><br>
<h3>How accurate are the item dimensions listed on your web pages?</h3>

<p>Artgenics.com verifies the dimensions of all images on our site, but due to industry standards sizes can 
    vary slightly up to (1½"). If you are not satisfied with the product you receive, you may return it within 
    45 days for a refund. </p>
    
    <br>
    <br>
    <h3>How does the recycling works?</h3>  
    <p>First you give us your old painting materials ,we will pick up those and verify the same according
         to the form you field .based on the price of the old product you got to choose whether you need 
         amount of that product or else you can get a new product at that range. </p>

    <p>
        Products eligible for recycling - biodegradable brushes ,pens,palette,wooden easel board ,wooden brushes,wooden canvas frame,diposable palette,disposable brushes and etc.
    </p>
    
</div>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>