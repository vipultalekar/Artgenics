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
    <title>Artgenics</title>
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    
<?php include 'components/user_header.php'; ?>

<div class="divide">

    <h1>Choose Your Category</h1>

    <a href="painting_sell.php">
        <button class="main">Sell your Paintaings</button>
    </a>

    <a href="recycled_sell.php">
        <button class="main">Sell your Old Art Products</button>
    </a>
</div>




<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>