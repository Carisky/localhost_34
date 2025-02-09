document.addEventListener("DOMContentLoaded", function () {
  const actions = document.querySelectorAll(".actions");

  actions.forEach(function (action) {
    const minusBtn = action.querySelector(".minus");
    const plusBtn = action.querySelector(".plus");
    const value = action.querySelector(".value");

    minusBtn.addEventListener("click", function () {
      let currentValue = parseInt(value.textContent);
      if (currentValue >= 1) {
        value.textContent = currentValue - 1;
        updateSumAndTotal(action.closest("tr"), "minus");
      }
    });

    plusBtn.addEventListener("click", function () {
      let currentValue = parseInt(value.textContent);
      value.textContent = currentValue + 1;
      updateSumAndTotal(action.closest("tr"), "plus");
    });
  });

  // === Обработчик чекбоксов вынесен отдельно ===
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("click", function () {
      select(checkbox.closest("tr"), checkbox.checked);
    });
  });

  function updateSumAndTotal(row, action) {
    const quantityPerPack = parseFloat(
      row.getAttribute("data-product-quantity-per-pack")
    );
    const packQuantityCell = row.querySelector(".actions .value");
    const packQuantity = parseInt(packQuantityCell.textContent);

    const checkoutPrice = document.getElementById("checkout-price");
    const checkoutPriceVal = parseInt(checkoutPrice.textContent);

    const sumCell = row.querySelector(".sum");
    sumCell.textContent = packQuantity * quantityPerPack;

    const totalPriceCell = row.querySelector(".total-price");
    const pricePerPack = parseFloat(row.getAttribute("data-price"));
    totalPriceCell.textContent = pricePerPack * packQuantity;

      if (action == "plus") {
        let newVal = checkoutPriceVal + parseInt(totalPriceCell.textContent);
        checkoutPrice.textContent = newVal - checkoutPriceVal;
      } else if (action == "minus") {
        let newVal = checkoutPriceVal + parseInt(totalPriceCell.textContent);
        checkoutPrice.textContent = newVal - checkoutPriceVal;
      }
  }
});

function select(row, checked) {
  const checkoutPrice = document.getElementById("checkout-price");
  const checkoutPriceVal = parseInt(checkoutPrice.textContent);
  const value = parseInt(row.querySelector(".total-price").textContent);

  if (checked) {
    checkoutPrice.textContent = checkoutPriceVal + value;
  } else {
    checkoutPrice.textContent = checkoutPriceVal - value;
  }
}
