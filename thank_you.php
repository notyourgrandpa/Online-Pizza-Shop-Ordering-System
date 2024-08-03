<?php session_start(); ?>

<?php include('header.php'); ?>

<?php

    if(isset($_SESSION['order_id']) && $_SESSION['order_id'] != 0
    && isset($_SESSION['total']) && $_SESSION['total'] !=0){

        $order_id = $_SESSION['order_id'];
        $total = $_SESSION['total'];
        $products_bought = $_SESSION['cart'];


        session_unset();
        session_destroy();
        //unset($_SESSION['cart']);

    }else{
        header("location: index.php");
    }

?>
<section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

<div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center">
        <?php if(isset($_GET['success_message'])){ ?>

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread"><?php echo $_GET['success_message']; ?></h1>
        <?php }?>
            <p><?php echo "Order ID: ". $order_id; ?></p><br>
            <p><?php echo "Please keep Order ID for future reference.";?></p>
            <p>We will deliver your meals within 30 minutes</p>
            <span class="mr-2"><a href="index.php">Home</a></span></p>
      </div>

    </div>
  </div>
</div>
</section>

<?php include('footer.php'); ?>