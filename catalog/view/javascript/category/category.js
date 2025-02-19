const productsContainer = document.getElementById("products-list");
const paginationContainer = document.getElementById("pagination");
const apiUrl = 'index.php?route=product/all/index';

const productsPerPage = 16;
let allProducts = [];
let currentPage = 1;

// Функция нормализации строки категории: приводит к нижнему регистру и заменяет дефисы на пробелы
function normalizeCategory(category) {
  return category.toLowerCase().replace(/-/g, ' ').trim();
}

// Извлечение категории из URL (например, site/category)
function getCategoryFromUrl() {
  const pathSegments = window.location.pathname.split('/').filter(Boolean);
  return pathSegments[pathSegments.length - 1] || "";
}

async function fetchAndRenderProducts() {
  try {
    const response = await fetch(apiUrl);
    if (!response.ok) {
      throw new Error(`HTTP error: ${response.status}`);
    }
    const data = await response.json();

    // Фильтрация продуктов по категории из URL
    const urlCategory = normalizeCategory(getCategoryFromUrl());
    console.log("URL категория:", urlCategory);
    allProducts = data.products.filter(product =>
      product.categories.some(prodCat => normalizeCategory(prodCat).includes(urlCategory))
    );

    renderUI(currentPage);
    renderPagination();
  } catch (error) {
    console.error("Ошибка при загрузке продуктов:", error);
    productsContainer.innerHTML = "<p>Ошибка загрузки продуктов.</p>";
  }
}

function renderUI(page) {
  productsContainer.innerHTML = "";
  const startIndex = (page - 1) * productsPerPage;
  const endIndex = page * productsPerPage;
  const productsToDisplay = allProducts.slice(startIndex, endIndex);
  
  if (productsToDisplay.length === 0) {
    productsContainer.innerHTML = "<p>Продукты не найдены.</p>";
    return;
  }

  productsToDisplay.forEach(product => {
    productsContainer.innerHTML += createProductCard(product);
  });
}

function renderPagination() {
  const totalPages = Math.ceil(allProducts.length / productsPerPage);
  paginationContainer.innerHTML = "";

  if (totalPages <= 1) return; // Если страниц одна — пагинация не нужна

  // Кнопка "назад"
  if (currentPage > 1) {
    paginationContainer.innerHTML += `<div class="pagination-btn" data-page="${currentPage - 1}">&lt;</div>`;
  }

  // Номера страниц
  for (let i = 1; i <= totalPages; i++) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn ${i === currentPage ? "active" : ""}" data-page="${i}">${i}</div>
    `;
  }

  // Кнопка "вперёд"
  if (currentPage < totalPages) {
    paginationContainer.innerHTML += `<div class="pagination-btn" data-page="${currentPage + 1}">&gt;</div>`;
  }

  // Добавляем обработчики кликов для кнопок пагинации
  document.querySelectorAll(".pagination-btn").forEach(button => {
    button.addEventListener("click", (e) => {
      currentPage = parseInt(e.target.dataset.page, 10);
      renderUI(currentPage);
      renderPagination();
    });
  });
}



document.addEventListener("DOMContentLoaded", fetchAndRenderProducts);
