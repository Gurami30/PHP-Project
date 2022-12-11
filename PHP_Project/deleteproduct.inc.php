<?php

$conn = new mysqli('localhost', 'root', '', 'test');

if(isset($_POST['delete'])){
    if(isset($_POST["delete_checkbox"]) != 0 || isset($_POST["delete_checkbox"]) != null){
        $ids = $_POST["delete_checkbox"];
        $extract_id = implode(",", $ids);
        $query = "DELETE FROM ScandiwebTest WHERE id IN($extract_id)";
        $query_run = mysqli_query($conn, $query);
        $_SESSION['status'] = "Product deleted successfully!";
        header("Location: index.php");
        exit;
    }else{
        echo "<script>history.back();</script>";
    }
}

?>