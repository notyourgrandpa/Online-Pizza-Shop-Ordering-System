<?php include('header.php'); ?>
<?php include('get_products.php');?>
<?php include('get_pizza.php');?>

    <section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Services</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Services</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Behind a good restaurant are a great services. </p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Fresh from the Farm. From spices, to flours, toppings, etc. We care for you health. You request, we listen!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Fresh from the Oven. Upon paying the order, we'll be at your door within 30 minutes! No need to pay for Delivery Fee!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Made with originality and creativity. Our some pizza were made with a better version than any other shop. Better quality, better prices </p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Hot Pizza Meals</h2>
            <p>Check our Menu! </p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">

				<?php foreach($products as $product){ ?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(assets/images/products/<?php echo $product['product_image']; ?>);"></a>
    					<div class="text p-4">
    						<h3><?php echo $product['product_name']; ?></h3>
    						<p><?php echo $product['product_description']; ?></p>
    						<p class="price">₱<span><?php echo $product['product_price']; ?></span> 
							<form method="POST" action="cart.php">
									<input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>"/>
									<input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>"/>
									<input type="hidden" name="product_description" value="<?php echo $product['product_description']; ?>"/>
									<input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>"/>
									<input type="hidden" name="product_special_offer" value="<?php echo $product['product_special_offer']; ?>"/>
									<input type="hidden" name="product_category" value="<?php echo $product['product_category']; ?>"/>
									<input type="hidden" name="product_image" value="<?php echo $product['product_image']; ?>"/>
									<input type="hidden" name="product_quantity" value="1"/>
									<input type="submit" name="add_to_cart" value="Order"/>
								</form>
    					</div>
    				</div>
    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Zappi is your Companion with it's Delicious Pizza! Someone says a certain individual is made up of sugar, spice, and everything nice. It applies to Pizzas too!</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(assets/ images/image_2.jpg);"></a>
                <div class="text">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">#139 to the moon. Roadtrip Broom Broom. Skrrt Skrrt</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+63 938-703-5247</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">zappizappi@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <?php include('footer.php'); ?>