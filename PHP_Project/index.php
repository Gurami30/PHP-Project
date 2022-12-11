<?php
    include 'dbh.inc.php';
    include 'product.inc.php';
    include 'viewproduct.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <form action="deleteproduct.inc.php" method="POST">
    <div class="header">
        <h1 style="padding: 0; margin: 0;">Product List</h1>
        <div id="rightButtons">
            <button type="button" class="rightBTN"><a
                    style="height: fit-content; text-decoration: none; color: inherit;"
                    href="productadd.php">ADD</a></button>
            <button type="submit" id="delete-product-btn" class="rightBTN" name="delete">MASS DELETE</button>
        </div>
    </div>
    <hr>
    &emsp;
    <div id="content">
        <?php 
            $products = new ViewProduct();
            $products->showAllProducts();
        ?>
    </div>

    <div style="position: fixed; left: 0; width: 100%; bottom: 0;">
        <hr>
        <p style="text-align: center;">PHP Project</p>
    </div>
</form>
</body>

</html>