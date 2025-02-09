const productsContainer = document.getElementById('products-container');
const addBtn = document.getElementById("add");
const minusBtn = document.getElementById("minus");
const value = document.getElementById("value");

const apiUrl = 'index.php?route=product/all/index';

let products = [];  // Массив для хранения всех товаров

async function loadProducts() {
    try {

        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const data = await response.json();
        products = data.products;
        console.log(products)
        
        const ui = products.slice(0,4)
        ui.map((product)=>{
            productsContainer.innerHTML+=createProductCard(product)
        })

    } catch (error) {
        console.error('Error loading products:', error);
    }
}

const addHandler = () => {
    const val = Number(value.innerHTML)
    value.innerHTML=val+1
}

const minusHandler = () => {
    const val = Number(value.innerHTML)
    if(val>1){
        value.innerHTML=val-1
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    addBtn.addEventListener("click",addHandler)
    minusBtn.addEventListener("click",minusHandler)
});



document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
        header.addEventListener("click", function () {
            const content = this.nextElementSibling;

            // Переключение видимости
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                // Закрытие других элементов
                document.querySelectorAll(".accordion-content").forEach(c => {
                    c.style.display = "none";
                });
                content.style.display = "block";
            }
        });
    });
});



document.addEventListener('DOMContentLoaded', () => {
    loadProducts();
});