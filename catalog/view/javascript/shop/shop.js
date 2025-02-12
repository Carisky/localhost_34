const productsContainer = document.getElementById("products-list");
const paginationContainer = document.getElementById("pagination");

const categoriesSorter = document.getElementById("categories-sort");
const parametersSorter = document.getElementById("parameters-sort");

const categoriesMenuIcon = document.getElementById("categories-sort");
const categoriesMenu = document.getElementById("categories-menu");
const categoriesMenuClose = document.getElementById("categories-menu-close");

const parametersMenuIcon = document.getElementById("parameters-sort");
const parametersMenu = document.getElementById("parameters-menu");
const parametersMenuClose = document.getElementById("parameters-menu-close");

const productsPerPage = 16;
const apiUrl = 'index.php?route=product/all/index';

let allProducts = [];
let currentPage = 1;

// Вспомогательная функция для смены видимости меню
const toggleMenuVisibility = (menu) => {
  menu.classList.toggle("active");
}

// Открытие/закрытие меню категорий
const changeCategoriesVisibility = () => toggleMenuVisibility(categoriesMenu);

// Открытие/закрытие меню параметров
const changeParametersVisibility = () => toggleMenuVisibility(parametersMenu);

// Загрузка всех продуктов
async function fetchAllProducts() {
  try {
    const response = await fetch(apiUrl);
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const data = await response.json();
    return data.products;
  } catch (error) {
    console.error("Error loading products:", error);
  }
}

// Загрузка всех продуктов
async function loadProducts() {
  try {
    const response = await fetch(apiUrl);
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const data = await response.json();
    allProducts = data.products;

    renderUI(currentPage); // Отображаем первую страницу
    renderPagination();
  } catch (error) {
    console.error("Error loading products:", error);
  }
}

// Отображение продуктов для текущей страницы
function renderUI(page) {
  productsContainer.innerHTML = ""; // Очищаем контейнер
  const startIndex = (page - 1) * productsPerPage;
  const endIndex = page * productsPerPage;

  const productsToDisplay = allProducts.slice(startIndex, endIndex);
  productsToDisplay.forEach((product) => {
    productsContainer.innerHTML += createProductCard(product);
  });
}

// Отображение кнопок пагинации
function renderPagination() {
  const totalPages = Math.ceil(allProducts.length / productsPerPage);
  paginationContainer.innerHTML = ""; // Очищаем контейнер

  // Кнопка "Назад"
  if (currentPage > 1) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn" data-page="${currentPage - 1}">&lt;</div>
    `;
  }

  // Кнопки для каждой страницы
  for (let i = 1; i <= totalPages; i++) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn ${i === currentPage ? "active" : ""}" data-page="${i}">${i}</div>
    `;
  }

  // Кнопка "Вперед"
  if (currentPage < totalPages) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn" data-page="${currentPage + 1}">&gt;</div>
    `;
  }

  // Добавляем обработчики событий на кнопки
  document.querySelectorAll(".pagination-btn").forEach((button) => {
    button.addEventListener("click", (e) => {
      currentPage = parseInt(e.target.dataset.page, 10);
      renderUI(currentPage);
      renderPagination(); // Обновляем кнопки и класс active
    });
  });
}

// Загружаем данные при загрузке страницы
document.addEventListener("DOMContentLoaded", loadProducts);

// Обработчики для открытия/закрытия меню
categoriesMenuIcon.addEventListener("click", changeCategoriesVisibility);
parametersMenuIcon.addEventListener("click", changeParametersVisibility);

// Закрытие меню
categoriesMenuClose.addEventListener("click", changeCategoriesVisibility);
parametersMenuClose.addEventListener("click", changeParametersVisibility);
