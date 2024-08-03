<?php

session_start();


if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){

        $products_array_ids = array_column($_SESSION['cart'], "product_id"); 
    
        if(!in_array($_POST['product_id'], $products_array_ids)){
    
            $product_id = $_POST['product_id'];
    
            $product_array = array(
                             'product_id'=>$product_id,
                             'product_name'=>$_POST['product_name'],
                             'product_price'=>$_POST['product_price'],
                             'product_image'=>$_POST['product_image'],
                             'product_category'=> $_POST['product_category'],
                             'product_special_offer'=>$_POST['product_special_offer'],
                             'product_quantity'=>$_POST['product_quantity']
            );
    
            $_SESSION['cart'][$product_id] = $product_array;
        }else{

            echo "<script>alert('Product has already been added to cart')</script>";
        }
    
    }else{
    
        $product_id = $_POST['product_id'];
    
        $product_array = array(
                            'product_id'=>$product_id,
                            'product_name'=>$_POST['product_name'],
                            'product_price'=>$_POST['product_price'],
                            'product_image'=>$_POST['product_image'],
                            'product_category'=> $_POST['product_category'],
                            'product_special_offer'=>$_POST['product_special_offer'],
                            'product_quantity'=>$_POST['product_quantity']
        );

        $_SESSION['cart'][$product_id] = $product_array;
    
    }

    calculateTotalCart();



}else if(isset($_POST['remove_btn'])){

    $product_id = $_POST["product_id"];
    unset($_SESSION['cart'][$product_id]);

    calculateTotalCart();



}else if(isset($_POST['edit_quantity_btn'])){

    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product = $_SESSION['cart'][$product_id];

    $product['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product;

    calculateTotalCart();
}

function calculateTotalCart(){

    $total_price = 0;
    $total_quantity = 0;

    foreach($_SESSION['cart'] as $key=>$value){

        $product = $_SESSION['cart'][$key];

        $price = $product['product_price'];
        $quantity = $product['product_quantity'];

        $total_price = $total_price + ($price * $quantity);
        $total_quantity = $total_quantity + $quantity;
    }

    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;
}

?>
<body>

<?php include('header.php'); ?>
<div class="container">
    <br>
    <div class="container mt-2 text-center">
            <h4>Your Cart</h4>
            <hr class="mx-auto">
        </div>
    <hr>
    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
                <tr class="text-center" style="background-color: #ffc453;">
                    <th scope="col">Product</th>
                    <th scope="col" width="20">Quantity</th>
                    <th scope="col" width="20"></th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="120" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($_SESSION['cart'])){ ?>
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <?php foreach($_SESSION['cart'] as $key=>$value) {?>
                        <tr>
                            <td style="background-color: transparent">
                                <figure class="media">
                                    <div class="img-wrap"><img src="assets/images/products/<?php echo $value['product_image']; ?>" style="width: 120px; height:100px;" class="img-thumbnail image-fluid img-sm"></div>
                                    <figcaption class="media-body">
                                        <h6 class="title text-truncate"><?php echo $value['product_name']; ?> </h6>
                                        <dl class="param param-inline small">
                                        <dt><?php echo $value['product_category']; ?> </dt>
                                        </dl>
                                    </figcaption>
                                </figure> 
                            </td>
                            <td> 
                                <div class="row">
                                    <form method="POST" action="cart.php">
                                        <input class="col-md input-sm" type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                        
                                </div>
                            </td>
                            <td>
                                <input type="submit" name="edit_quantity_btn" class="btn-sm edit-btn" value="Edit">
                                </form>
                            </td>
                            <td> 
                                <div class="price-wrap"> 
                                    <span class="product-price" style="color: black">₱<?php echo $value['product_price'] * $value['product_quantity']; ?> </span><br>
                                    <small class="text-muted" >(₱<span style="color: black"><?php echo $value['product_price']; ?> each)</span></small> 
                                </div> <!-- price-wrap .// -->
                            </td>
                            <td class="text-right"> 
                                <form action="cart.php"  method="POST">
                                    <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                    <p><input class="btn btn-outline-danger" type="submit" name="remove_btn" class="remove-btn" value="Remove"></p>
                                </form>   
                            </td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                        <tr>
                            <td></td> 
                            <td></td>
                            <td style="color: black">Total:</td>
                            <?php if(isset($_SESSION['cart'])){ ?>
                            <td style="color: black" class="text-left"><?php echo "₱".$_SESSION['total']; ?></td>
                            <?php } ?>

                            <td class="text-right">
                                <div class="checkout-container">
                                    <form method="GET" action="checkout.php">
                                        <input type="submit" name="checkout_btn" class="btn checkout-btn" value="Checkout"> 
                                    </form> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- card.// -->
        </div> 
                <?php }else{ ?>
                    <tr>
                    <td class="text-center">
                        <figure class="media">
                            <figcaption class="media-body">
                                <br>
                                <h6 class="title text-truncate">Cart is Empty</h6>
                            </figcaption>
                        </figure> 
                    </tr>
                <?php } ?>
</body>


<?php include('footer.php'); ?>