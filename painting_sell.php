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
   <title>Sell your Paintings</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="./css/all.min.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Sell Your Paintings Here</h3>
      
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      
      <input type="text" name="Painting_name" min="0" max="9999999999" placeholder="enter name of painting" required onkeypress="if(this.value.length == 10) return false;" class="box">
     
      <label class="boxs" for="">Image 1 (required)</label>
      <input type="file" name="image1" id="image1" required onkeypress="if(this.value.length == 10) return false;" class="box">
     
      <label class="boxs" for="">Image 2 (required)</label>
      <input type="file" name="image2" id="image2" required onkeypress="if(this.value.length == 10) return false;" class="box">
      
      <input type="number" name="price" min="0" max="9999999999" placeholder="enter price of product" required onkeypress="if(this.value.length == 10) return false;" class="box">     
    
      <textarea name="discription" placeholder="enter product discription" id="" cols="30" rows="10" class="box" ></textarea>  
      <textarea name="message" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
     
      <input type="checkbox" class="boxsss">
      <label class="boxss" for="">Accept all <a href="terms.php"> Terms and condition </a></label>
      
      <input type="submit" value="send message" name="send" class="btn">

   </form>

</section>



<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'products');

if(isset($_POST['send']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $Painting_name = $_POST['Painting_name'];
   $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
   $file = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
   $price = $_POST['price'];
   $discription = $_POST['discription'];
   $message = $_POST['message'];

   $query = "INSERT INTO `paintings`(`name`, `email`, `number`, `Painting_name`, `image1`, `image2`, `price`, `discription`, `message`) VALUES ('$name', '$email', ' $number', '$Painting_name', '$file', '$file', '$price', '$discription', '$message')";
   $query_run = mysqli_query($connection,$query);

   if($query_run)
   {
      echo '<script type="text/javascript"> alert("Paintaing details Uploaded") </script>';
   }
   else
   {
      echo '<script type="text/javascript"> alert("Paintaing details Not Uploaded") </script>';
   }
}


?>









<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>