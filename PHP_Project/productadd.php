<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="padding: 0 50px 0 50px">
    <form id="product_form" action="productadd.inc.php" method="POST">
        <div class="header">
            <h1 style="padding: 0; margin: 0;">Product Add</h1>
            <div id="rightButtons">
                <button id="cancelButton" class="rightBTN"><a style="text-decoration: none; color: inherit;"
                        href="index.php">Cancel</a></button>
                <input type="submit" class="rightBTN" name="save" id="saveButton" value="Save"></input>
            </div>
        </div>
        <hr>
        <div id="addContent">
            <div id="leftSide">
                <label for="#sku">SKU</label>
                <input type="text" id="sku" name="sku"><br>
                <label for="#name">Name</label>
                <input type="text" id="name" name="name"><br>
                <label for="#price">Price</label>
                <input type="text" id="price" name="price" onkeypress="return No_Letters(event)"><br>
                <select id="productType" name="productType">
                    <option selected disabled>Select Type</option>
                    <option value="d">DVD</option>
                    <option value="b">Book</option>
                    <option value="f">Furniture</option>
                </select>
            </div>
            &emsp;
            <div>
                <p id="description" style="color: gray;">Please select type above</p>
            </div>
            <div id="rightSide"
                style="border: 3px solid black; border-radius: 5px; margin-left: 200px; height: fit-content;">
                <div id="forDVD">
                    <label for="#dvdSize">Size (MB)</label>
                    <input type="text" name="size" id="size" onkeypress="return No_Letters(event)">
                </div>
                <div id="forBook">
                    <label for="#dvdSize">Weight (KG)</label>
                    <input type="text" name="weight" id="weight" onkeypress="return No_Letters(event)">
                </div>
                <div id="forFurniture">
                    <label for="#dvdSize">Height (CM)</label>
                    <input type="text" name="height" id="height" onkeypress="return No_Letters(event)"><br>
                    <label for="#dvdSize">Width (CM)</label>
                    <input type="text" name="width" id="width" onkeypress="return No_Letters(event)"><br>
                    <label for="#dvdSize">Length (CM)</label>
                    <input type="text" name="length" id="length" onkeypress="return No_Letters(event)">
                </div>
            </div>
        </div>
    </form>
    <div style="position: fixed; left: 0; width: 100%; bottom: 0;">
        <hr>
        <p style="text-align: center;">PHP Project</p>
    </div>

    <script>
        $(window).on('load', function () {
            productType.value = "Select Type";
            if (productType.selectedIndex == 0) {
                rightSIde.style.display = "none";
                description.innerHTML = "Please select type above";
            }
        });
        document.getElementById("cancelButton").addEventListener("click", function () {
            skuInp.value = "";
            nameInp.value = "";
            priceInp.value = "";
            productType.selectedIndex = 0;
        });
        function No_Letters(e) {
            var x = e.which || e.keycode;
            if (x >= 48 && x <= 57 || x == 46) {
                return true;
            } else {
                alert("Please, provide the data of indicated type");
                return false;
            }
        }
    </script>
</body>

</html>