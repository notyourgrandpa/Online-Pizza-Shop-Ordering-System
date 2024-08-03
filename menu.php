
<?php include('header.php'); ?>
<?php include('get_products.php');?>
<?php include('get_pizza.php');?>

<head>
	<style>
		.nav-justified {
			.nav-item {
				flex-basis: 0;
				flex-grow: 1;
				text-align: center;
			}
}
		</style>
</head>

<section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

<section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-8 col-xl-10 offset-xl-1 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills nav-justified" id="v-pills-tab">
		              <a class="nav-item nav-link <?php if(isset($_GET['sort_by']) && ($_GET['sort_by'] == 'americana' ||
																						$_GET['sort_by'] == 'artisan' ||
					  																	$_GET['sort_by'] == 'almond' ||
																						$_GET['sort_by'] == 'cheesy' ||
																						$_GET['sort_by'] == 'sourdough' ||
																						$_GET['sort_by'] == 'detroit' ||
																						$_GET['sort_by'] == 'neapolitan' ||
																						$_GET['sort_by'] == 'st louis' ||
																						$_GET['sort_by'] == '') || !isset($_GET['sort_by'])){ echo 'active'; }?>" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-item nav-link <?php if(isset($_GET['sort_by']) && ($_GET['sort_by'] == 'refreshments' ||
					  																	$_GET['sort_by'] == 'espresso' ||
																						$_GET['sort_by'] == 'soda')){ echo 'active'; }?>" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-item nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Chicken</a>

		              <a class="nav-item nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
		            </div>
		          </div>
		          <div class="col-lg-8 col-xl-10 offset-xl-1 ftco-animate p-md-5">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade <?php if(isset($_GET['sort_by']) && ($_GET['sort_by'] == 'americana' ||
																						$_GET['sort_by'] == 'artisan' ||
					  																	$_GET['sort_by'] == 'almond' ||
																						$_GET['sort_by'] == 'cheesy' ||
																						$_GET['sort_by'] == 'sourdough' ||
																						$_GET['sort_by'] == 'detroit' ||
																						$_GET['sort_by'] == 'neapolitan' ||
																						$_GET['sort_by'] == 'st louis' ||
																						$_GET['sort_by'] == '') || !isset($_GET['sort_by'])){ echo 'show active'; }?>" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
						<form>
					  		<div class="input-group mb-5 nav-justified">
								<select class="nav-item nav-link" name="sort_by" style="center">
									<option value="">--Select Option--</option>
									<option value="americana" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "americana"){ echo "selected"; }?>>Americana Pizza</option>
									<option value="artisan" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "artisan"){ echo "selected"; }?>>Artisan Pizza</option>
									<option value="almond" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "almond"){ echo "selected"; }?>>Almond Pizza</option>
									<option value="cheesy" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "cheesy"){ echo "selected"; }?>>Cheesy Pizza</option>
									<option value="detroit" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "detroit"){ echo "selected"; }?>>Detroit Pizza</option>
									<option value="neapolitan" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "neapolitan"){ echo "selected"; }?>>Neapolitan Pizza</option>
									<option value="sourdough" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "sourdough"){ echo "selected"; }?>>Sourdough Pizza</option>
									<option value="st louis" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "st louis"){ echo "selected"; }?>>St. Louis Pizza</option>
								</select>
								<button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
									Sort
								</button>
							</div>
						</form>
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

		              <div class="tab-pane fade <?php if(isset($_GET['sort_by']) && ($_GET['sort_by'] == 'refreshments' ||
					  																	$_GET['sort_by'] == 'espresso' ||
					  																	$_GET['sort_by'] == 'soda')){ echo 'show active'; }?>" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
					  <form>
					  	<div class="input-group mb-5 nav-justified">
								<select class="nav-item nav-link" name="sort_by" style="center">
									<option value="">--Select Option--</option>
									<option value="espresso" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "espresso"){ echo "selected"; }?>>Espresso</option>
									<option value="refreshments" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "refreshments"){ echo "selected"; }?>>Refreshments</option>
									<option value="soda" <?php if(isset($_GET['sort_by']) && $_GET['sort_by'] == "soda"){ echo "selected"; }?>>Soda</option>
								</select>
								<button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
									Sort
								</button>
							</div>
						</form>
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
    
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Whole Menu</h2>
            <p>Check our Products! Fresh from the Oven!</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">

			<?php include("get_products.php"); ?>

			<?php foreach($products as $product){ ?>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(assets/images/products/<?php echo $product['product_image']; ?>);"></a>
    					<div class="text p-4">
    						<h2><?php echo $product['product_name']; ?></h3>
    						<p style="font-size: 1.1rem"><?php echo $product['product_description']; ?></p>
    						<p class="price"><span>₱<?php echo $product['product_price'];?></span>
							
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
							</p>
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