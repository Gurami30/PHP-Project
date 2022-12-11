<?php

$conn = new mysqli('localhost', 'root', '', 'test');
$sku = $_POST['sku'];
$sql_u = "SELECT * FROM ScandiwebTest WHERE sku='$sku'";
$res_u = mysqli_query($conn, $sql_u);
$name = $_POST['name'];
$price = $_POST['price'];
$productType = $_POST['productType'] ?? null;
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];

if(trim($sku) != "" && trim($name) != "" && trim($price) != "" && (trim($size) != "" || trim($weight) != "" || (trim($height) != "" && trim($width) != "" && trim($length) != ""))){
    if (mysqli_num_rows($res_u) > 0) {
        echo '<script type="text/javascript">alert("Product already exists!"); window.open("productadd.php", "_self");</script>';
    }else{
        $stmt = $conn->prepare("Insert into ScandiwebTest(sku, name, price, productType, size, weight, height, width, length) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdsddddd", $sku, $name, $price, $productType, $size, $weight, $height, $width, $length);
        $stmt->execute();
        header("Location: index.php");
    }
}else{
    echo "<script>alert('Please, submit required data')</script>";
    header("Location: productadd.php");
}

?>