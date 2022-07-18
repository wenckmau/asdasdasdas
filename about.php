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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>Despre noi</h3>
   <p><a href="home.php">Acasa</a> <span> / Despre</span></p>
</div>



<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Istoric</h3>
         <p>B.S FOOD A început când Micheal, Lucian au deschis primul restaurant în Hunedoara, astfel pornind spre succes cu pași repezi. De-a lungul a 10 ani au fost deschise restaurante în toată țara, devenind una dintre cele mai populare lanțuri de mâncare din România</p>
         <a href="menu.php" class="btn">Meniu</a>
      </div>

   </div>

</section>



<section class="steps">

   <h1 class="title">De ce noi</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Usor de comandat</h3>
         <p>Mancarea ta preferta este doar la un click distanta</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Livrare rapida</h3>
         <p>Mancarea ta va ajunge mereu calda si gata de pus pe masa</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Mancare foarte gustoasa</h3>
         <p>Preparatele noastre sunt facute cu ingrediente proaspete si de bucatari cu experienta</p>
      </div>

   </div>

</section>



<section class="reviews">

   <h1 class="title">Parerea clientilor</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Mancare buna si servici ok</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Alex Darabant</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Am comanda mancarea si niic nu am apucat sa ma ridic din pat si mancarea era deja la mine la usa</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tabac Andrei</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Mancarea are gust bun si este perfecta pentru zilele in care nu vrei sa gatesti</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               
            </div>
            <h3>Tivda Andrei</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Nu am mancat mancare mai buna ca asta</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>

            </div>
            <h3>Vasilache Denis</h3>
         </div>

         

        

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>





















<?php include 'components/footer.php'; ?>







<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>