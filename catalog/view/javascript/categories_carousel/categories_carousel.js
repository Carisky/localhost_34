document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.categories-carousel');
    const content = document.querySelector('#carousel-content');
    const pagination = document.querySelector('#carousel-pagination');
    const slides = document.querySelectorAll('.categories-carousel .slide');
    const slidesToShow = 1.3; // Отображаем 1.5 слайда за раз
    const slideWidthPercentage = (100 / slidesToShow); // Ширина каждого слайда, если показываем 1.5
    let currentIndex = 0;
  
    // Function to update carousel position and pagination
    const updateCarousel = () => {
      content.style.transform = `translateX(-${currentIndex * slideWidthPercentage}%)`;
  
      // Remove existing active wrapper div, if any
      const activeWrapper = pagination.querySelector('.active-wrapper');
      if (activeWrapper) {
        activeWrapper.remove();
      }
  
      // Create a new wrapper div for the active button
      const activeDiv = document.createElement('div');
      activeDiv.classList.add("pagination-div", 'active');
  
      const wrapperDiv = document.createElement('div');
      wrapperDiv.classList.add('active-wrapper');
      wrapperDiv.appendChild(activeDiv);
  
      // Insert the new active wrapper into the correct place
      const buttons = pagination.querySelectorAll('div');
      buttons[currentIndex].parentNode.insertBefore(wrapperDiv, buttons[currentIndex].nextSibling);
    };
  
    // Initialize pagination buttons based on the number of slides
    const totalPages = Math.ceil(slides.length / slidesToShow);
    for (let i = 0; i < totalPages; i++) {
      const button = document.createElement('div');
      button.classList.add("pagination-div");
      button.addEventListener('click', () => {
        currentIndex = i;
        updateCarousel();
      });
      pagination.appendChild(button);
    }
  
    // Set the width of each slide
    slides.forEach((slide) => {
      slide.style.width = `${slideWidthPercentage}%`;
    });
  
    // Swipe detection for touch events
    let startX = 0;
    let isSwiping = false;
  
    // Touch events
    carousel.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
      isSwiping = true;
    });
  
    carousel.addEventListener('touchmove', (e) => {
      if (!isSwiping) return;
      const moveX = e.touches[0].clientX;
      const diffX = startX - moveX;
  
      // Detect swipe left (next slide) or swipe right (previous slide)
      if (Math.abs(diffX) > 50) {
        if (diffX > 0 && currentIndex < slides.length - slidesToShow) {
          currentIndex++;
        } else if (diffX < 0 && currentIndex > 0) {
          currentIndex--;
        }
        updateCarousel();
        isSwiping = false;
      }
    });
  
    carousel.addEventListener('touchend', () => {
      isSwiping = false;
    });
  
    // Mouse swipe detection
    let mouseStartX = 0;
    let isMouseSwiping = false;
  
    carousel.addEventListener('mousedown', (e) => {
      mouseStartX = e.clientX;
      isMouseSwiping = true;
      carousel.style.cursor = 'grabbing'; // Change cursor to indicate dragging
    });
  
    carousel.addEventListener('mousemove', (e) => {
      if (!isMouseSwiping) return;
  
      const moveX = e.clientX;
      const diffX = mouseStartX - moveX;
  
      // Detect mouse drag left (next slide) or drag right (previous slide)
      if (Math.abs(diffX) > 50) {
        if (diffX > 0 && currentIndex < slides.length - slidesToShow) {
          currentIndex++;
        } else if (diffX < 0 && currentIndex > 0) {
          currentIndex--;
        }
        updateCarousel();
        isMouseSwiping = false;
      }
    });
  
    carousel.addEventListener('mouseup', () => {
      isMouseSwiping = false;
      carousel.style.cursor = 'grab'; // Reset cursor
    });
  
    carousel.addEventListener('mouseleave', () => {
      isMouseSwiping = false;
      carousel.style.cursor = 'grab'; // Reset cursor when leaving carousel area
    });
  
    // Initial update
    updateCarousel();
  });
  