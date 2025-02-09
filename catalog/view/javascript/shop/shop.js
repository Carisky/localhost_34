const productsContainer = document.getElementById("products-list");
const paginationContainer = document.getElementById("pagination");

const categoriesSorter = document.getElementById("categories-sort");
const parametersSorter = document.getElementById("parameters-sort");

const categories_menu_icon = document.getElementById("categories-sort");
const categories_menu = document.getElementById("categories-menu");
const categories_menu_close = document.getElementById("categories-menu-close");

const parameters_menu_icon = document.getElementById("parameters-sort");
const parameters_menu = document.getElementById("parameters-menu");
const parameters_menu_close = document.getElementById("parameters-menu-close");

const productsPerPage = 16;
// URL для получения продуктов

const apiUrl = 'index.php?route=product/all/index';

let allProducts = [];
let currentPage = 1;

const changeCategoriesVisability = () => {
  if (categories_menu.classList.contains("active")) {
    categories_menu.classList.remove("active");
  } else if (!categories_menu.classList.contains("active")) {
    categories_menu.classList.add("active");
  }
};

const changeParametersVisability = () => {
    if (parameters_menu.classList.contains("active")) {
        parameters_menu.classList.remove("active");
    } else if (!parameters_menu.classList.contains("active")) {
        parameters_menu.classList.add("active");
    }
  };

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
      <div class="pagination-btn ${
        i === currentPage ? "active" : ""
      }" data-page="${i}">${i}</div>
    `;
  }

  // Кнопка "Вперед"
  if (currentPage < totalPages) {
    paginationContainer.innerHTML += `
      <div class="pagination-btn" data-page="${currentPage + 1}">&gt;</div>
    `;
  }

  // Добавляем обработчики событий на кнопки
  const buttons = document.querySelectorAll(".pagination-btn");
  buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
      const page = parseInt(e.target.dataset.page, 10);
      currentPage = page;
      renderUI(page);
      renderPagination(); // Обновляем кнопки и класс active
    });
  });
}

// Загружаем данные при загрузке страницы
document.addEventListener("DOMContentLoaded", ()=>{
    loadProducts();
});

// Открыть меню
categories_menu_icon.addEventListener("click", changeCategoriesVisability);
parameters_menu_icon.addEventListener("click", changeParametersVisability);

// Закрыть меню
categories_menu_close.addEventListener("click", changeCategoriesVisability);
parameters_menu_close.addEventListener("click", changeParametersVisability);