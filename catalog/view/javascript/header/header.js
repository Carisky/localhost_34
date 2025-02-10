const menuIcon = document.getElementById("menu-icon");
const modalMenu = document.getElementById("modalMenu");
const closeMenu = document.getElementById("closeMenu");

const cartIcon = document.getElementById("cart-icon");
const modalCart = document.getElementById("modalCart");
const closeCart = document.getElementById("closeCart");

const togglePageImg = document.querySelector("#togglePage img");
const searchInputContainer = document.getElementById("search-input-container");
const searchIcon = document.getElementById("search-icon"); // Предполагается, что у иконки поиска есть id="search-icon"
const closeSearch = document.getElementById("close-search");

// Открытие поиска
searchIcon.addEventListener("click", () => {
  searchInputContainer.classList.add("active");
});

// Закрытие поиска
closeSearch.addEventListener("click", () => {
  searchInputContainer.classList.remove("active");
});

const cartList = document.getElementById("cart-list");


function updateShopingCartSummary(products) {
  let totalPrice = 0;
  
  products.forEach(product => {
    totalPrice += parseFloat(product.total.replace("$", "").replace(",", "."));
  });

  document.getElementById("total").textContent = `${totalPrice.toFixed(0)} zł`;
  updateLocalStorageProductsCount(products.length)
}

// Toggle visibility of cart items
function renderCartItems(products) {
  cartList.innerHTML = "";
  if (products.length === 0) {
    cartList.innerHTML = "<p>Корзина пуста</p>";
    return;
  }

  products.forEach((product) => {
    cartList.innerHTML += createProductCartCard(product);
  });

  attachEventListeners();
}

// Fetch cart items from the server
const fetchCartItems = async () => {
  try {
    const response = await fetch("index.php?route=checkout/cart/getList", { method: "GET" });

    if (!response.ok) {
      throw new Error(`Ошибка: ${response.status}`);
    }

    const data = await response.json();
    renderCartItems(data.products);
    updateShopingCartSummary(data.products)
  } catch (error) {
    console.error("Ошибка при запросе товаров:", error);
    cartList.innerHTML = "<p>Ошибка при загрузке корзины</p>";
  }
};

// Add event listeners for quantity change and item removal
function attachEventListeners() {
  document.querySelectorAll(".quantity-increase").forEach((button) => {
    button.addEventListener("click", (event) => {
      const cartId = event.target.getAttribute("data-cart-id");
      console.log(`Increase quantity for cart_id: ${cartId}`);
    });
  });

  document.querySelectorAll(".quantity-decrease").forEach((button) => {
    button.addEventListener("click", (event) => {
      const cartId = event.target.getAttribute("data-cart-id");
      console.log(`Decrease quantity for cart_id: ${cartId}`);
    });
  });

  document.querySelectorAll(".remove-product").forEach((button) => {
    button.addEventListener("click", (event) => {
      const cartId = event.target.getAttribute("data-cart-id");
      console.log(`Remove product with cart_id: ${cartId}`);
    });
  });
}

// Functions to toggle visibility of modal windows
const changeVis = () => {
  modalMenu.classList.toggle("active");
};

const changeCartVis = () => {
  modalCart.classList.toggle("active");
};

cartIcon.addEventListener("click", async () => {
  changeCartVis();
  await fetchCartItems();
});

closeCart.addEventListener("click", changeCartVis);

// Open and close menu
menuIcon.addEventListener("click", changeVis);
closeMenu.addEventListener("click", changeVis);

// Switch between pages
const togglePageBtn = document.getElementById("togglePage");
const firstPage = document.getElementById("first-page");
const secondPage = document.getElementById("second-page");

togglePageBtn.addEventListener("click", () => {
  firstPage.classList.toggle("active");
  secondPage.classList.toggle("active");

  // Change button text based on current state
  if (firstPage.classList.contains("active")) {
    togglePageImg.src = "image/catalog/assets/arrow_right.svg";  // Set the arrow to right
  } else {
    togglePageImg.src = "image/catalog/assets/arrow_left.svg";  // Set the arrow to left
  }
});

// Check if the device is mobile
function isMobile() {
  return window.matchMedia("(max-width: 768px)").matches;
}

if (isMobile()) {
  firstPage.classList.add("active");
  secondPage.classList.remove("active");
} else {
  firstPage.classList.add("active");
  secondPage.classList.add("active");
}

fetchCartItems();