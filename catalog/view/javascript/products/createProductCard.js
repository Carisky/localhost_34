function createProductCard(product) {
    const imageUrl = `image/${product.image_url}`;
    const defaultImage = 'image/no_image.png'; // Путь к дефолтному изображению
    console.log(product.rating)
    return `
        <div class="product-card">
            <div class="product-header">
                <div class="product-image">
                    <a href="/index.php?route=common/singleproduct&id=${product.product_id}/">
                        <img src="${imageUrl}" alt="${product.name || 'Нет фото'}"
                             onerror="this.onerror=null; this.src='${defaultImage}';">
                    </a>
                </div>
            </div>

            <div class="product-info">
                <div class="product-rating">
                    ${Array.from({ length: 5 }, (_, i) => 
                        i < product.rating ? '<span>★</span>' : '<span>☆</span>'
                    ).join('')}
                </div>

                <div class="name-price-block">
                    <div class="product-name" title="${product.name}">
                    <a class="product-link" href="/index.php?route=common/singleproduct&id=${product.product_id}/">
                        ${product.name}
                        </a>
                    </div>
                    <div class="product-price">
                        ${product.price}
                    </div>
                </div>
            </div>

            <div class="product-actions">
                <div>
                    <button class="add-to-cart" onclick="addToCart(${product.product_id})">
                        DO KOSZYKA
                        <img src="image/catalog/assets/add_to_cart_ico.svg" />
                    </button>
                </div>
            </div>
        </div>
    `;
}



// Функция для добавления товара в корзину
function addToCart(productId) {
    updateLocalStorageProductsCount(parseInt(localStorage.getItem("productsCount"))+1);
    fetch('index.php?route=checkout/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            product_id: productId,
            quantity: 1,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log(`Product ${productId} with amount ${1} added to cart.`);
        } else if (data.error) {
            console.error(data.error);
            alert(data.error);
        }
    })
    .catch(error => {
        console.error('Error adding product to cart:', error);
    });
}
