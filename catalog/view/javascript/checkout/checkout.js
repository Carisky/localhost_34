// Функция для обновления итоговой суммы
function updateCartSummary(products) {
    let totalPrice = 0;
    products.forEach(product => {
      totalPrice += parseFloat(product.total.replace("$", "").replace(",", "."));
    });
  
    const shippingCost = 19; // Установите фиксированную стоимость доставки
    document.getElementById("total-price").textContent = `Cena: ${totalPrice.toFixed(2)} zł`;
    document.getElementById("shipping-cost").textContent = `Koszt przesyłki: ${shippingCost} zł`;
    document.getElementById("grand-total").textContent = `Wszystko: ${(totalPrice + shippingCost).toFixed(2)} zł`;
  }
  
  // Функция для отображения товаров в корзине
  function renderCartProducts(products) {
    const cartList = document.getElementById("checkout-list");
    cartList.innerHTML = ""; // Очищаем текущий список
  
    if (products.length === 0) {
      cartList.innerHTML = "<p>Корзина пуста</p>";
      return;
    }
  
    products.forEach(product => {
      cartList.innerHTML += createProductCartCard(product);
    });
  
    attachCartEventListeners(); // Добавляем обработчики событий
    updateCartSummary(products); // Обновляем подытог
  }
  
  // Функция для загрузки данных корзины
  const fetchCartProducts = async () => {
    try {
      console.log("Запрашиваю товары..."); // Отладка
      const response = await fetch("index.php?route=checkout/cart/getList", {
        method: "GET",
      });
  
      if (!response.ok) {
        throw new Error(`Ошибка: ${response.status}`);
      }
  
      const data = await response.json();
      console.log("Получены данные корзины:", data); // Отладка
  
      if (data && data.products) {
        renderCartProducts(data.products);
      } else {
        console.error("Нет товаров в ответе от сервера.");
        document.getElementById("cart-list").innerHTML = "<p>Корзина пуста</p>";
      }
    } catch (error) {
      console.error("Ошибка при запросе товаров:", error);
      document.getElementById("cart-list").innerHTML = "<p>Ошибка при загрузке корзины</p>";
    }
  };
  
  // Функция для привязки событий к элементам корзины
  function attachCartEventListeners() {
    document.querySelectorAll(".quantity-increase").forEach(button => {
      button.addEventListener("click", event => {
        const cartId = event.target.getAttribute("data-cart-id");
        console.log(`Увеличить количество для cart_id: ${cartId}`);
        // Добавьте логику увеличения количества на сервере
      });
    });
  
    document.querySelectorAll(".quantity-decrease").forEach(button => {
      button.addEventListener("click", event => {
        const cartId = event.target.getAttribute("data-cart-id");
        console.log(`Уменьшить количество для cart_id: ${cartId}`);
        // Добавьте логику уменьшения количества на сервере
      });
    });
  
    document.querySelectorAll(".remove-product").forEach(button => {
      button.addEventListener("click", event => {
        const cartId = event.target.getAttribute("data-cart-id");
        console.log(`Удалить товар с cart_id: ${cartId}`);
        // Добавьте логику удаления товара из корзины на сервере
      });
    });
  }
  
  // Инициализация загрузки корзины при загрузке страницы
  document.addEventListener("DOMContentLoaded", async () => {
    console.log("DOM загружен, инициализирую корзину...");
    await fetchCartProducts(); // Обязательно используем await
  });
  