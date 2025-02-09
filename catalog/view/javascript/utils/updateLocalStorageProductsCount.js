// Function to update localStorage and dispatch a custom event
function updateLocalStorageProductsCount(value) {
  if(value){
    localStorage.setItem("productsCount", value);
    document.getElementById("cart-count").textContent = `${value}`;
  }
}
