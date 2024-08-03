<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products where product_category = 'pizza'");
    $stmt->execute();

    $pizzas = $stmt->get_result();


    $stmt1 = $conn->prepare("SELECT * FROM products where product_category = 'Beverages'");
    $stmt1->execute();
    
    $drinks = $stmt1->get_result();
    
    $stmt2 = $conn->prepare("SELECT * FROM products where product_category = 'Pasta'");
    $stmt2->execute();
    
    $pasta = $stmt2->get_result();
    
    $stmt3 = $conn->prepare("SELECT * FROM products where product_category = 'Chicken'");
    $stmt3->execute();
    
    $chickens = $stmt3->get_result();
    
    $stmt4 = $conn->prepare("SELECT * FROM staff");
    $stmt4->execute();
    
    $staffs = $stmt4->get_result();

$sort_option = "none";
if(isset($_GET['sort_by'])){
    if($_GET['sort_by'] == "artisan"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'artisan'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "almond"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'almond'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "cheesy"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'cheesy'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "sourdough"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'sourdough'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "detroit"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'detroit'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "neapolitan"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'neapolitan'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "st louis"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'st louis'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "americana"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'americana'");
        $stmt5->execute();

        $pizzas = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "espresso"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'espresso'");
        $stmt5->execute();

        $drinks = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "refreshments"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'refreshments'");
        $stmt5->execute();

        $drinks = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "soda"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'soda'");
        $stmt5->execute();

        $drinks = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "soup"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'soup'");
        $stmt5->execute();

        $chickens = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "fried"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'fried'");
        $stmt5->execute();

        $chickens = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "gnocchi"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'gnocchi'");
        $stmt5->execute();

        $pasta = $stmt5->get_result();
    }
    elseif($_GET['sort_by'] == "elbow"){
        $stmt5 = $conn->prepare("SELECT * FROM products where product_subcategory = 'elbow pasta'");
        $stmt5->execute();

        $pasta = $stmt5->get_result();
    }


}
    





?>