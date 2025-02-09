document.addEventListener("DOMContentLoaded", () => {
    // Десктопная карусель
    const slides = document.querySelectorAll(".upper-slide");
    const bgImage = document.getElementById("carousel-bg");

    const items = [
        {
            bg: "image/catalog/assets/cherry_bg.png",
            img: "image/catalog/assets/cherry.png",
        },
        {
            bg: "image/catalog/assets/honey_bg.png",
            img: "image/catalog/assets/honey.png",
        },
        {
            bg: "image/catalog/assets/chocolate_bg.png",
            img: "image/catalog/assets/chocolate.png",
        },
        {
            bg: "image/catalog/assets/currant_bg.png",
            img: "image/catalog/assets/currant.png",
        },
    ];

    let currentIndex = 0;

    function updateDesktopCarousel() {
        const prevSlide = slides[currentIndex];
        prevSlide.classList.remove("active");

        currentIndex = (currentIndex + 1) % items.length;

        const nextSlide = slides[currentIndex];
        nextSlide.classList.add("active");

        const newBg = items[currentIndex].bg;
        bgImage.classList.remove("active"); // Скрываем старый фон
        setTimeout(() => {
            bgImage.src = newBg;
            bgImage.classList.add("active"); // Плавное появление нового фона
        }, 50);
    }

    setInterval(updateDesktopCarousel, 5000);

    // Мобильная карусель
    const mobileSlide = document.querySelector(".carousel-mobile .slide img");
    const mobileBackground = document.querySelector(".carousel-mobile .top img");

    let mobileIndex = 0;

    function updateMobileCarousel() {
        mobileSlide.classList.remove("active");
        mobileBackground.classList.remove("active");

        // Переходим к следующему индексу
        mobileIndex = (mobileIndex + 1) % items.length;

        const newBg = items[mobileIndex].bg;
        const newSlide = items[mobileIndex].img;

        setTimeout(() => {
            mobileBackground.src = newBg;
            mobileSlide.src = newSlide;

            mobileBackground.classList.add("active");
            mobileSlide.classList.add("active");
        }, 50); // Добавляем задержку перед появлением
    }

    // Устанавливаем начальный слайд для мобильной карусели
    mobileBackground.classList.add("active");
    mobileSlide.classList.add("active");

    // Запускаем цикл обновления мобильной карусели
    setInterval(updateMobileCarousel, 5000);
});
