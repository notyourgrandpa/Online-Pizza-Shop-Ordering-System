<?php include('header.php'); ?>
<?php include('get_products.php');?>
<?php include('get_pizza.php');?>

<section class="home-slider owl-carousel img" style="background-image: url(assets/images/top-pizza.jpg);">
<div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
              <p class="mb-4 mb-md-5" style="font-size: 1.1rem">Taste the Pizza that's made with Spice and Everything Nice</p>
              <p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>0938-703-5247</h3>
	    						<p style="font-size: 1.05rem">Phone Number</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>#139 to the Moon</h3>
	    						<p style="font-size: 1.05rem">Roadtrip Broom Broom. Skrrt Skrrt</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p style="font-size: 1.05rem">8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>
<section class="home-slider owl-carousel img" style="background-image: url(assets/images/top-pizza.jpg);">
      

<?php foreach($pizzas as $pizza){ ?>
	<div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate">
    
            	<span class="subheading">Delicious</span>
              <h1 class="mb-4"><?php echo $pizza['product_name']; ?></h1>
              <p class="mb-4 mb-md-5" style="font-size: 1.2rem"><?php echo $pizza['product_description']; ?></p>
			  <form method="POST" action="cart.php">
				<input type="hidden" name="product_id" value="<?php echo $pizza['product_id']; ?>"/>
				<input type="hidden" name="product_name" value="<?php echo $pizza['product_name']; ?>"/>
				<input type="hidden" name="product_description" value="<?php echo $pizza['product_description']; ?>"/>
				<input type="hidden" name="product_price" value="<?php echo $pizza['product_price']; ?>"/>
				<input type="hidden" name="product_special_offer" value="<?php echo $pizza['product_special_offer']; ?>"/>
				<input type="hidden" name="product_category" value="<?php echo $pizza['product_category']; ?>"/>
				<input type="hidden" name="product_image" value="<?php echo $pizza['product_image']; ?>"/>
				<input type="hidden" name="product_quantity" value="1"/>
				<p><input type="submit" name="add_to_cart" class="btn btn-primary p-3 px-xl-4 py-xl-3" value="Order Now"/>
				<a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
			</form>
            
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="assets/images/products/<?php echo $pizza['product_image']; ?>" class="rounded-circle mb-4 img-fluid" alt="">
            </div>
			</div>
        </div>
      </div>
<?php } ?>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(assets/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Zappi</span> Restaurant</h2>
        </div>
        <div>
  				<p style="font-size: 1.1rem">Zappi is your Companion with it's Delicious Pizza! Someone says a certain individual is made up of sugar, spice, and everything nice. It applies to Pizzas too!</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p style="font-size: 1.1rem">Behind a good restaurant are a great services. </p>
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
                <p style="font-size: 1.1rem">Fresh from the Farm. From spices, to flours, toppings, etc. We care for you health. You request, we listen!</p>
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
                <p style="font-size: 1.1rem">Fresh from the Oven. Upon paying the order, we'll be at your door within 30 minutes! No need to pay for Delivery Fee!</p>
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
            <p style="font-size: 1.1rem">Check our Menu! </p>
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
    						<p style="font-size: 1.1rem"><?php echo $product['product_description']; ?></p>
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

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(assets/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="1">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="1">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="69">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="5">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(assets/images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Chicken</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
							<?php foreach($pizzas as $pizza){ ?>
								<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/products/<?php echo $pizza['product_image'];?>)"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $pizza['product_name'];?></a></h3>
		              					<p class="price"><span>₱<?php echo $pizza['product_price']; ?></span></p>
										  <form method="POST" action="cart.php">
											<input type="hidden" name="product_id" value="<?php echo $pizza['product_id']; ?>"/>
											<input type="hidden" name="product_name" value="<?php echo $pizza['product_name']; ?>"/>
											<input type="hidden" name="product_description" value="<?php echo $pizza['product_description']; ?>"/>
											<input type="hidden" name="product_price" value="<?php echo $pizza['product_price']; ?>"/>
											<input type="hidden" name="product_special_offer" value="<?php echo $pizza['product_special_offer']; ?>"/>
											<input type="hidden" name="product_category" value="<?php echo $pizza['product_category']; ?>"/>
											<input type="hidden" name="product_image" value="<?php echo $pizza['product_image']; ?>"/>
											<input type="hidden" name="product_quantity" value="1"/>
											<p><input type="submit" name="add_to_cart" class="btn btn-white btn-outline-white" value="Add to Cart"/></p>
										  </form>
		              				</div>
		              			</div>
		              		</div>
							<?php } ?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
						<?php foreach($drinks as $drink){ ?>
							<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/products/<?php echo $drink['product_image'];?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $drink['product_name']; ?></a></h3>
		              					<p class="price"><span>₱<?php echo $drink['product_price']; ?></span></p>
		              					<form method="POST" action="cart.php">
											<input type="hidden" name="product_id" value="<?php echo $drink['product_id']; ?>"/>
											<input type="hidden" name="product_name" value="<?php echo $drink['product_name']; ?>"/>
											<input type="hidden" name="product_description" value="<?php echo $drink['product_description']; ?>"/>
											<input type="hidden" name="product_price" value="<?php echo $drink['product_price']; ?>"/>
											<input type="hidden" name="product_special_offer" value="<?php echo $drink['product_special_offer']; ?>"/>
											<input type="hidden" name="product_category" value="<?php echo $drink['product_category']; ?>"/>
											<input type="hidden" name="product_image" value="<?php echo $drink['product_image']; ?>"/>
											<input type="hidden" name="product_quantity" value="1"/>
											<p><input type="submit" name="add_to_cart" class="btn btn-white btn-outline-white" value="Add to Cart"/></p>
										  </form>
		              				</div>
		              			</div>
		              		</div>
						<?php } ?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
							<?php foreach($chickens as $chicken){ ?>
								<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/products/<?php echo $chicken['product_image']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $chicken['product_name']; ?></a></h3>
		              					<p class="price"><span>₱<?php echo $chicken['product_price']; ?></span></p>
		              					<form method="POST" action="cart.php">
											<input type="hidden" name="product_id" value="<?php echo $chicken['product_id']; ?>"/>
											<input type="hidden" name="product_name" value="<?php echo $chicken['product_name']; ?>"/>
											<input type="hidden" name="product_description" value="<?php echo $chicken['product_description']; ?>"/>
											<input type="hidden" name="product_price" value="<?php echo $chicken['product_price']; ?>"/>
											<input type="hidden" name="product_special_offer" value="<?php echo $chicken['product_special_offer']; ?>"/>
											<input type="hidden" name="product_category" value="<?php echo $chicken['product_category']; ?>"/>
											<input type="hidden" name="product_image" value="<?php echo $chicken['product_image']; ?>"/>
											<input type="hidden" name="product_quantity" value="1"/>
											<p><input type="submit" name="add_to_cart" class="btn btn-white btn-outline-white" value="Add to Cart"/></p>
										  </form>
		              				</div>
		              			</div>
		              		</div>
							<?php } ?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
							<?php foreach($pasta as $pasta){ ?>
								<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/products/<?php echo $pasta['product_image']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?php echo $pasta['product_name']; ?></a></h3>
		              					<p class="price"><span>₱<?php echo $pasta['product_price']; ?></span></p>
		              					<form method="POST" action="cart.php">
											<input type="hidden" name="product_id" value="<?php echo $pasta['product_id']; ?>"/>
											<input type="hidden" name="product_name" value="<?php echo $pasta['product_name']; ?>"/>
											<input type="hidden" name="product_description" value="<?php echo $pasta['product_description']; ?>"/>
											<input type="hidden" name="product_price" value="<?php echo $pasta['product_price']; ?>"/>
											<input type="hidden" name="product_special_offer" value="<?php echo $pasta['product_special_offer']; ?>"/>
											<input type="hidden" name="product_category" value="<?php echo $pasta['product_category']; ?>"/>
											<input type="hidden" name="product_image" value="<?php echo $pasta['product_image']; ?>"/>
											<input type="hidden" name="product_quantity" value="1"/>
											<p><input type="submit" name="add_to_cart" class="btn btn-white btn-outline-white" value="Add to Cart"/></p>
										  </form>
		              				</div>
		              			</div>
		              		</div>
							<?php } ?>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
		
	<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="">
					</div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form method="POST" class="appointment-form" action="contact_us.php">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="first_name" class="form-control" placeholder="First Name" required>
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
		    				</div>
	    				</div>
	    				<div class="form-group">
	              			<textarea id="message" name="message" cols="30" rows="3" class="form-control" placeholder="Message" required></textarea>
	            		</div>
						<div class="form-group">
						<input type="submit" name="contact_us_btn" value="Send" class="btn btn-primary py-3 px-4">
						</div>
	    			</form>
	    		</div>    			
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