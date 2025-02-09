document.addEventListener("DOMContentLoaded", function () {
    const images = [
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
        "image/catalog/assets/mobile_categories_demo.png",
    ]; // Замените на реальные пути изображений

    const slides = document.querySelectorAll(".categories-carousel-mobile p");
    const imageElement = document.getElementById("categories-carousel-mobile-slide");
    let currentIndex = 0;

    function changeSlide() {
        // Убираем активный класс у всех элементов
        slides.forEach(slide => {
            slide.classList.remove("categories-carousel-mobile-active-slide-text");
            slide.classList.add("categories-carousel-mobile-slide-text");
        });

        // Меняем изображение
        imageElement.src = images[currentIndex];

        // Добавляем активный класс к текущему слайду
        slides[currentIndex].classList.remove("categories-carousel-mobile-slide-text");
        slides[currentIndex].classList.add("categories-carousel-mobile-active-slide-text");

        // Увеличиваем индекс и зацикливаем
        currentIndex = (currentIndex + 1) % slides.length;
    }

    // Запускаем интервал смены слайдов каждые 3 секунды
    setInterval(changeSlide, 3000);
});
