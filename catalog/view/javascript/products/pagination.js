const productsContainer = document.getElementById('products-container');
const productsPromoContainer = document.getElementById('products-container-promo');

const limit = 4;

let currentSlide = 0;
let products = [];  // Массив для хранения всех товаров
let displayedProducts = [];  // Массив для хранения товаров, которые отображаются на странице

let currentPromoSlide = 0;
let promoProducts = [];  // Массив для хранения всех товаров
let displayedPromoProducts = [];  // Массив для хранения товаров, которые отображаются на странице

const apiUrl = 'index.php?route=product/all/index';
const apiPromoUrl = 'index.php?route=product/all/index';

async function loadProducts() {
    try {

        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        products = data.products;
        
        const ui = products.slice(0,4)
        ui.map((product)=>{
            productsContainer.innerHTML+=createProductCard(product)
        })
    } catch (error) {
        console.error('Error loading products:', error);
    }
}

async function loadPromoProducts() {
    try {
        const response = await fetch(apiPromoUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        promoProducts = data.products;
        
        const ui = promoProducts.slice(0,4)
        ui.map((product)=>{
            productsPromoContainer.innerHTML+=createProductCard(product)
        })
    } catch (error) {
        console.error('Error loading products:', error);
    }
}

function changeSlide(dirrection){

    if(currentSlide==0 & dirrection<1){
        return
    }
    if(products.length==currentSlide+4 & dirrection==1){
        return
    }

    currentSlide+=dirrection;

    displayedProducts = products.slice(currentSlide, currentSlide+4)
    productsContainer.innerHTML="";
    displayedProducts.map((product)=>{
        productsContainer.innerHTML+=createProductCard(product)
    })

}

function changePromoSlide(dirrection){

    if(currentPromoSlide==0 & dirrection<1){
        return
    }
    if(promoProducts.length==currentPromoSlide+4 & dirrection==1){
        return
    }

    currentPromoSlide+=dirrection;

    displayedPromoProducts = promoProducts.slice(currentPromoSlide, currentPromoSlide+4)
    productsPromoContainer.innerHTML="";
    displayedPromoProducts.map((product)=>{
        productsPromoContainer.innerHTML+=createProductCard(product)
    })

}

// Загружаем продукты при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    loadProducts();
    loadPromoProducts();

    // Добавляем обработчики для кнопок переключения слайдов
    document.getElementById('prev-button').addEventListener('click', () => changeSlide(-1));
    document.getElementById('next-button').addEventListener('click', () => changeSlide(+1));
    
    document.getElementById('prev-promo-button').addEventListener('click', () => changePromoSlide(-1));
    document.getElementById('next-promo-button').addEventListener('click', () => changePromoSlide(+1));
});