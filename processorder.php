<?php

if (isset($_GET['book']) && isset($_GET['price']) && isset($_GET['image'])) {
    $selectedBook = $_GET['book'];
    $bookPrice = $_GET['price'];
    $bookImage = $_GET['image'];
} else {
    
    $selectedBook = 'No book selected';
    $bookPrice = 0.00;
    $bookImage = 'images/default.jpg';
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $book = $_POST['book'];
    $price = $_POST['price'];

    
    header("Location: thankyou.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Order for <?php echo htmlspecialchars($selectedBook); ?></h1>

        
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="<?php echo htmlspecialchars($bookImage); ?>" alt="<?php echo htmlspecialchars($selectedBook); ?>" width="100">
                        <?php echo htmlspecialchars($selectedBook); ?>
                    </td>
                    <td>$<?php echo number_format($bookPrice, 2); ?></td>
                    <td>1</td>
                    <td>$<?php echo number_format($bookPrice, 2); ?></td>
                </tr>
            </tbody>
        </table>

        
        <div class="total">
            Total Price: $<?php echo number_format($bookPrice, 2); ?>
        </div>

        
        <form action="processorder.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="hidden" name="book" value="<?php echo htmlspecialchars($selectedBook); ?>">
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($bookPrice); ?>">

            
            <div class="buttons">
                <a href="index.php" class="continue-btn">Continue Shopping</a>
                <button type="submit">Checkout</button>
            </div>
        </form>
    </div>
</body>
</html>
