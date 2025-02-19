const productsContainer = document.getElementById("products-list");
const paginationContainer = document.getElementById("pagination");
const categoriesMenu = document.getElementById("categories-menu");
const categoriesMenuIcon = document.getElementById("categories-sort");
const categoriesMenuClose = document.getElementById("categories-menu-close");

const paramsMenu = document.getElementById("parameters-menu");
const paramsMenuClose = document.getElementById("parameters-menu-close");
const paramsMenuIcon = document.getElementById("parameters-sort");

const productsPerPage = 16;
const apiUrl = 'index.php?route=product/all/index';

let allProducts = [];
let currentPage = 1;
let selectedCategories = [];
let selectedSort = "default";  // Default sorting parameter

const toggleMenuVisibility = (menu) => {
  menu.classList.toggle("active");
};

 categoriesMenuIcon.addEventListener("click", () => toggleMenuVisibility(categoriesMenu));
 categoriesMenuClose.addEventListener("click", () => toggleMenuVisibility(categoriesMenu));

 paramsMenuIcon.addEventListener("click", () => toggleMenuVisibility(paramsMenu));
 paramsMenuClose.addEventListener("click", () => toggleMenuVisibility(paramsMenu));

// Получение параметров из URL
function getQueryParams() {
  const params = new URLSearchParams(window.location.search);
  return {
    category: params.get("category") || "", // Получаем категорию
  };
}

// Устанавливаем категорию из URL при загрузке
function updateFiltersFromURL() {
  const { category } = getQueryParams();
  if (category) {
    selectedCategories = [category]; // Фильтруем по категории
    document.querySelectorAll('.category-checkbox').forEach(checkbox => {
      if (checkbox.value === category) {
        checkbox.checked = true; // Чекбокс становится активным
      }
    });
  }
}

// Загружаем все продукты
async function fetchAllProducts() {
  try {
    const response = await fetch(apiUrl);
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    const data = await response.json();
    allProducts = data.products;
    console.log(data.products)
    updateFiltersFromURL(); // Фильтруем сразу при загрузке
    renderUI(currentPage);
    renderPagination();
  } catch (error) {
    console.error("Error loading products:", error);
  }
}

// Фильтрация продуктов по выбранным категориям
function filterProductsByCategories(products) {
  if (selectedCategories.length === 0) {
    return products;
  }
  return products.filter((product) => {
    return selectedCategories.some(category => 
      product.categories.some(productCategory => 
        productCategory.toLowerCase().includes(category.toLowerCase())
      )
    );
  });
}

function parsePrice(priceString) {
  const regex = /(\d+,\d+)(zł)?/;
  const match = priceString.match(regex);
  if (match) {
    return parseFloat(match[1].replace(',', '.'));
  }
  return 0;
}

function sortProducts(products) {
  switch (selectedSort) {
    case 'popularity':
      return products.sort((a, b) => b.popularity - a.popularity);
    case 'rating':
      return products.sort((a, b) => b.rating - a.rating);
    case 'newest':
      return products.sort((a, b) => new Date(b.date_added) - new Date(a.date_added));
    case 'price-asc':
      return products.sort((a, b) => parsePrice(a.price) - parsePrice(b.price));
    case 'price-desc':
      return products.sort((a, b) => parsePrice(b.price) - parsePrice(a.price));
    default:
      return products;
  }
}

// Отображение продуктов
function renderUI(page) {
  productsContainer.innerHTML = "";
  const startIndex = (page - 1) * productsPerPage;
  const endIndex = page * productsPerPage;

  const filteredProducts = filterProductsByCategories(allProducts);
  const sortedProducts = sortProducts(filteredProducts);
  const productsToDisplay = sortedProducts.slice(startIndex, endIndex);
  
  productsToDisplay.forEach((product) => {
    productsContainer.innerHTML += createProductCard(product);
  });
}

// Отображение пагинации
function renderPagination() {
  const totalPages = Math.ceil(allProducts.length / productsPerPage);
  paginationContainer.innerHTML = "";

  if (currentPage > 1) {
    paginationContainer.innerHTML += `<div class="pagination-btn" data-page="${currentPage - 1}">&lt;</div>`;
  }

  for (let i = 1; i <= totalPages; i++) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn ${i === currentPage ? "active" : ""}" data-page="${i}">${i}</div>
    `;
  }

  if (currentPage < totalPages) {
    paginationContainer.innerHTML += `<div class="pagination-btn" data-page="${currentPage + 1}">&gt;</div>`;
  }

  document.querySelectorAll(".pagination-btn").forEach((button) => {
    button.addEventListener("click", (e) => {
      currentPage = parseInt(e.target.dataset.page, 10);
      renderUI(currentPage);
      renderPagination();
    });
  });
}

// Обработчик изменения фильтров категорий
document.querySelectorAll('.category-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', (e) => {
    const categoryValue = e.target.value;
    if (e.target.checked) {
      selectedCategories.push(categoryValue);
    } else {
      selectedCategories = selectedCategories.filter(category => category !== categoryValue);
    }
    renderUI(currentPage);
  });
});

// Обработчик изменения сортировки
document.querySelectorAll('.parameters-radio').forEach(radio => {
  radio.addEventListener('change', (e) => {
    selectedSort = e.target.value;
    renderUI(currentPage);
  });
});

// Загружаем данные при загрузке страницы
document.addEventListener("DOMContentLoaded", fetchAllProducts());
