<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>meniu</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>Meniu</h3>
   <p><a href="home.php">acasa</a> <span> / meniu</span></p>
</div>





<section class="category">

<h1 class="title">Preparate</h1>

<div class="box-container">

   <a href="category.php?category=fast food" class="box">
      <img src="images/cat-1.png" alt="">
      <h3>fast food</h3>
   </a>

   <a href="category.php?category=Felul 1" class="box">
      <img src="images/cat-2.png" alt="">
      <h3>Felul intai</h3>
   </a>

   <a href="category.php?category=Bauturi" class="box">
      <img src="images/cat-3.png" alt="">
      <h3>Bauturi</h3>
   </a>

   <a href="category.php?category=Desert" class="box">
      <img src="images/cat-4.png" alt="">
      <h3>Deserturi</h3>
   </a>

</div>

</section>




























<!-- footer section starts  -->

<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>