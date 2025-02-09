document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const liveSearchContainer = document.getElementById("live-search");
    const liveSearchList = liveSearchContainer.querySelector("ul");
    const resultText = liveSearchContainer.querySelector(".result-text");

    searchInput.addEventListener("input", function () {
        const query = searchInput.value.trim();
        if (query.length < 3) {
            liveSearchContainer.style.display = "none";
            return;
        }

        const searchUrl = `index.php?route=extension/module/live_search&filter_name=${encodeURIComponent(query)}`;

        fetch(searchUrl)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                liveSearchList.innerHTML = "";
                resultText.innerHTML = "";

                if ( data.products && data.products.length > 0  ) {
                    data.products.forEach(product => {
                        const listItem = document.createElement("li");
                        listItem.innerHTML = `
                            <a href="${product.url}">
                                ${product.image ? `<img src="/image/${product.image}" alt="${product.name}" style="filter: none;width: 40px; height: 40px; margin-right: 10px;">` : ""}
                                ${product.name} - ${product.price}
                            </a>`;
                        liveSearchList.appendChild(listItem);
                    });
                } else {
                    liveSearchList.innerHTML = `<li style="text-align: center;">nic nie znaleziono</li>`;
                }

                liveSearchContainer.style.display = "block";
            })
            .catch(error => console.error("Ошибка загрузки данных:", error));
    });

    document.addEventListener("click", function (e) {
        if (!liveSearchContainer.contains(e.target) && e.target !== searchInput) {
            liveSearchContainer.style.display = "none";
        }
    });
});
