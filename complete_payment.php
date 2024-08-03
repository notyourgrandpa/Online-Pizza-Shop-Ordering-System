<?php


session_start();

include("connection.php");

if(isset($_GET['transaction_id']) && isset($_SESSION['order_id'])){

        $order_status = "paid";
        $order_id = $_SESSION['order_id'];
        $payment_date = date("Y-m-d h:i:s");
        $transaction_id = $_GET['transaction_id'];

        $stmt = $conn->prepare("UPDATE orders SET order_status = ? WHERE order_id = ?");
        $stmt->bind_param("si", $order_status, $order_id);
        $stmt->execute();

        $stmt1 = $conn->prepare("INSERT INTO payments(order_id, transaction_id, payment_date) VALUES (?,?,?)");
        $stmt1->bind_param("iss", $order_id,$transaction_id,$payment_date);
        $stmt1->execute();

        header("location: thank_you.php?success_message= Thank you for Shopping");
        exit;
    }else{

        header("location: index.php");
        exit;
    }


?>