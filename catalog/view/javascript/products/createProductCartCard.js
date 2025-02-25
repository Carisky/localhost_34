// Функция для создания карточки товара
function createProductCartCard(product) {

  return `
      <div class="product-cart-card">
        <div class="product-thumb">
          <img src="image/${product.thumb}" alt="${product.name}" onerror="this.onerror=null; this.src='image/no_image.png';">
        </div>
        <div class="product-details">
          <p class="product-name">${product.name}</p>
          <div class="quantity-control">
          <button onclick="decrease(${product.product_id})" class="quantity-decrease" data-cart-id="${product.cart_id}">-</button>
          <span class="product-quantity">${product.quantity}</span>
          <button onclick="add(${product.product_id})" class="quantity-increase" data-cart-id="${product.cart_id}">+</button>
        </div>
        </div>
        <div class="product-price">
          <p>${product.price}</p>
        </div>
        <button onclick="remove(${product.product_id},${product.quantity})" class="remove-product" data-cart-id="${product.cart_id}">×</button>
      </div>
    `;
}

// Функция для добавления товара (увеличение счётчика)
async function add(productId) {
  let currentCount = parseInt(sessionStorage.getItem("productsCount")) || 0;
  updateLocalStorageProductsCount(currentCount + 1);
  fetch("index.php?route=checkout/cart/add", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ product_id: productId, quantity: 1 }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        fetchCartItems();
      } else if (data.error) {
        console.error(data.error);
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error adding product to cart:", error);
    });
}

// Функция для уменьшения количества товара
async function decrease(productId) {
  let currentCount = parseInt(sessionStorage.getItem("productsCount")) || 0;
  updateLocalStorageProductsCount(currentCount - 1);
  fetch("index.php?route=checkout/cart/add", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ product_id: productId, quantity: -1 }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        fetchCartItems();
      } else if (data.error) {
        console.error(data.error);
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error decreasing product quantity:", error);
    });
}

// Функция для удаления товара (уменьшение счётчика на count)
async function remove(productId, count) {
  let currentCount = parseInt(sessionStorage.getItem("productsCount")) || 0;
  updateLocalStorageProductsCount(currentCount - count);
  fetch("index.php?route=checkout/cart/add", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ product_id: productId, quantity: -count }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        fetchCartItems();
      } else if (data.error) {
        console.error(data.error);
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error removing product from cart:", error);
    });
}
