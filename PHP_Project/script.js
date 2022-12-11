var quantity = 0
const productType = document.querySelector("#productType");
const description = document.querySelector("#description");
const rightSIde = document.querySelector("#rightSide");
const dvdCont = document.querySelector("#forDVD");
const bookCont = document.querySelector("#forBook");
const furnitureCont = document.querySelector("#forFurniture");
const saveButton = document.querySelector("#saveButton");
const skuInp = document.querySelector("#sku");
const nameInp = document.querySelector("#name");
const priceInp = document.querySelector("#price");
const sizeInp = document.querySelector("#size");
const weightInp = document.querySelector("#weight");
const heightInp = document.querySelector("#height");
const widthInp = document.querySelector("#width");
const lengthInp = document.querySelector("#length");

if (productType) {
    productType.addEventListener("change", function () {
        if (productType.selectedIndex == 0) {
            rightSIde.style.display = "none";
            description.innerHTML = "Please select type above";
        }
        if (productType.value == "d") {
            dvdCont.style.display = "block";
            rightSIde.style.display = "block";
            description.innerHTML = "Please, provide size.";
        } else {
            dvdCont.style.display = "none";
        }
        if (productType.value == "b") {
            bookCont.style.display = "block";
            rightSIde.style.display = "block";
            description.innerHTML = "Please, provide weight";
        } else {
            bookCont.style.display = "none";
        }
        if (productType.value == "f") {
            furnitureCont.style.display = "block";
            rightSIde.style.display = "block";
            description.innerHTML = "Please, provide dimensions.";
        } else {
            furnitureCont.style.display = "none";
        }
    });
}