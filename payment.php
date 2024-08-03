<?php

session_start(); ?>

<?php include('header.php'); ?>
    
    <section class=" my-5 my-5 py-5 checkout">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Payment</h2>
            <h2 class="mx-auto">
        </div>

        <div class="mx-auto container text-center">

            <?php if(isset($_SESSION['order_id']) && $_SESSION['order_id'] != 0
                     && isset($_SESSION['total']) && $_SESSION['total'] !=0) {?>
                
                <?php $amount = strval($_SESSION['total']);?>

                <p class="text-light">Total: <?php echo "₱".$_SESSION['total']; ?></p>

                <!-- Set up a container element for the button -->
                <div id="paypal-button-container"></div>
            <?php } else {?>

                <p>You don't have an Order</p>

                <?php }?>

        </div>
    </section>

</body>

<!-- Replace "test" with your own sandbox Business account app client ID -->
<script src="https://www.paypal.com/sdk/js?client-id=AT_Vsw5WA9s_MecOBrVlGdW1e1G1rPdpP6r01SL2OkCtMYTxKjgvwyKVFpXG0dvMA2oik9OdvMP6bNNt&currency=USD"></script>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: <?php echo $amount; ?> // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);


            window.location.href = "complete_payment.php?transaction_id="+transaction.id;

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>

<?php include('footer.php'); ?>