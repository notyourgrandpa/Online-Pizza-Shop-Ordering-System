<?php

session_start();

include('connection.php');

if(isset($_POST['contact_us_btn'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $message = $_POST['message'];
    $date = date("Y-m-d h:i:s");

    $stmt = $conn->prepare("INSERT INTO contact_us(first_name,
                                                    last_name,
                                                    message,
                                                    date)
                                                    VALUES (?,?,?,?)");

    $stmt ->bind_param("ssss", $first_name, $last_name, $message, $date);

    echo "<script>alert('Message sent Successfully')</script>";

    $stmt->execute();

    

}
if(isset($_POST['contact_btn'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact(name,
                                                email,
                                                subject,
                                                message)
                                                VALUES(?,?,?,?)");

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    $stmt->execute();

}



?>
<?php include('header.php'); ?>

<section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Thank you for contacting us!</h1>
	            <p class="breadcrumbs">We'll reach out as soon as possible <br><br>
                <span class="mr-2"><a href="index.php">Home</a></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>