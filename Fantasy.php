<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fantasy Books</h1>
        <div class="book-list">
            <!-- Book 1 -->
            <div class="book">
                <img src="images/book1.jpg" alt="Bloodguard by Cecy Robson">
                <h2><a href="processorder.php?book=Bloodguard&price=15.99&image=images/book1.jpg">Bloodguard by Cecy Robson</a></h2>
                <p>Price: $15.99</p>
                <p>Author: Cecy Robson</p>
                <p>Rating: ★★★★☆</p>
                <p class="book-description">An epic fantasy novel that follows the journey of a skilled warrior caught between light and darkness.</p> <!-- New description -->

            </div>

            <!-- Book 2 -->
            <div class="book">
                <img src="images/book2.jpg" alt="Dune by Frank Herbert">
                <h2><a href="processorder.php?book=Dune&price=20.99&image=images/book2.jpg">Dune by Frank Herbert</a></h2>
                <p>Price: $20.99</p>
                <p>Author: Frank Herbert</p>
                <p>Rating: ★★★★★</p>
                <p class="book-description">A science fiction masterpiece set in a vast desert world, blending politics, religion, and ecology.</p> <!-- New description -->
            
            </div>
        </div>
        <a href="index.php" class="continue-btn">Back to Homepage</a>
    </div>
</body>
</html>
