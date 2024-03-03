<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Shree Trading Company</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Header content -->
    </header>
    
    <div class="content">
        <div class="container">
            <h2>Checkout</h2>
            <div class="cart">
                <h3>Your Cart</h3>
                <?php foreach($cart as $item): ?>
                    <p><?php echo $item['name']; ?> - ₹<?php echo $item['price']; ?></p>
                <?php endforeach; ?>
                <p>Total: ₹<?php echo calculateTotal(); ?></p>
                <form action="process_payment.php" method="post">
                    <!-- Payment gateway form fields -->
                    <button type="submit">Pay Now</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <!-- Footer content as previous example -->
    </footer>
</body>
</html>
