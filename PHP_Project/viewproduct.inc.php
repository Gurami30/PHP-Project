<?php

class ViewProduct extends Product{

    public function showAllProducts(){
        $datas = $this->getAllProducts();
        foreach($datas as $data){
            $id = $data['id'];
            echo "<div class='product'>";
                echo "<input type='checkbox' class='delete-checkbox' id='checkbox$id' name='delete_checkbox[]' value='$id'></input>";
                echo "<div class='info'>";
                    echo $data['sku']."<br>";
                    echo $data['name']."<br>";
                    echo $data['price']."$<br>";
                    if($data['productType'] == "d"){
                        echo $data['size']."MB";
                    }
                    if($data['productType'] == "b"){
                        echo $data['weight']."KG";
                    }
                    if($data['productType'] == "f"){
                        echo $data['height']."x";
                        echo $data['width']."x";
                        echo $data['length'];
                    }               
                echo "</div>";
            echo "</div>";
        }
    }
}
?>