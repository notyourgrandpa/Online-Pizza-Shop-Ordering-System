<?php

session_start();


if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){

    header('location: index.php');


}

?>

<?php include('header.php'); ?>
    
    <section class="checkout">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Check out</h2>
            <h2 class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="place_order.php">
                <div class="form-group">
                    <label class="text-light" for="">Name</label><br>
                    <input type="text" class="form-outline w-100" id="checkout-name" name="name" required>
                </div>

                <div class="form-group">
                    <label class="text-light" for="">Email</label><br>
                    <input type="email" class="form-outline w-100" id="checkout-email" name="email" required>
                </div>

                <div class="form-group">
                    <label class="text-light" for="">Phone</label><br>
                    <input type="tel" class="form-outline w-100" id="checkout-phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label class="text-light" for="">City</label><br>
                    <input type="text" class="form-outline w-100" id="checkout-city" name="city" required>
                </div>

                <div class="form-group">
                    <label class="text-light" for="">Address</label><br>
                    <input type="text" class="form-outline w-100" id="checkout-address" name="address" required>
                </div>

                <div class="form-group checkout-btn-container">
                    <p class="text-light">Total Amount: <?php echo"$". $_SESSION['total'];?></p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn">
                </div>
            </form>
        </div>
        </table>
            </div>
    </section>

</body>


<?php include('footer.php'); ?>