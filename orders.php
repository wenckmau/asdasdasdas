<?php



include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Comenzi</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>Comenzi</h3>
   <p><a href="html.php">Acasa</a> <span> / comenzi</span></p>
</div>

<section class="orders">

   <h1 class="title">Comenzile tale</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">please login to see your orders</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p>plasta pe  : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>nume : <span><?= $fetch_orders['name']; ?></span></p>
      <p>email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>telefon : <span><?= $fetch_orders['number']; ?></span></p>
      <p>addresa : <span><?= $fetch_orders['address']; ?></span></p>
      <p>metoda de plata : <span><?= $fetch_orders['method']; ?></span></p>
      <p>produs : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>total de plata : <span><?= $fetch_orders['total_price']; ?>Lei /-</span></p>
      <p> status comanda : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">Nu ai facut nici o comanda</p>';
      }
      }
   ?>

   </div>

</section>










<?php include 'components/footer.php'; ?>








<script src="js/script.js"></script>

</body>
</html>