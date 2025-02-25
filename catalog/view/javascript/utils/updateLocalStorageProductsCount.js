// Обновление localStorage и отображения счётчика
function updateLocalStorageProductsCount(value) {
  if (!isNaN(value)) {
    sessionStorage.setItem("productsCount", value);
    document.getElementById("cart-count").textContent = value;
  }
}