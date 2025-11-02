











// small carasol section start
class Carousel {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.carousel-slide');
        this.totalSlides = this.slides.length;
        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');
        this.dotIndicators = document.querySelectorAll('.dot-indicator');

        this.init();
    }

    init() {
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());

        this.dotIndicators.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });

        // Auto-play every 5 seconds
        setInterval(() => this.nextSlide(), 5000);
    }

    updateSlides() {
        this.slides.forEach((slide, index) => {
            slide.classList.remove('active', 'prev');

            if (index === this.currentSlide) {
                slide.classList.add('active');
            } else if (index < this.currentSlide) {
                slide.classList.add('prev');
            }
        });

        // Update dot indicators
        this.dotIndicators.forEach((dot, index) => {
            if (index === this.currentSlide) {
                dot.classList.remove('bg-white/30');
                dot.classList.add('bg-white/50', 'active-dot');
            } else {
                dot.classList.remove('bg-white/50', 'active-dot');
                dot.classList.add('bg-white/30');
            }
        });
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlides();
    }

    prevSlide() {
        this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
        this.updateSlides();
    }

    goToSlide(slideIndex) {
        this.currentSlide = slideIndex;
        this.updateSlides();
    }
}

// Initialize carousel when page loads
document.addEventListener('DOMContentLoaded', () => {
    new Carousel();
});

// small carasol section end



// Main Single Product view start

// Color selection functionality
// const colorButtons = document.querySelectorAll('button[class*="rounded-full"]');
// colorButtons.forEach(button => {
//     button.addEventListener('click', function() {
//         // Remove active border from all buttons
//         colorButtons.forEach(btn => {
//             btn.classList.remove('border-purple-dark');
//             btn.classList.add('border-transparent');
//         });

//         // Add active border to clicked button
//         this.classList.remove('border-transparent');
// this.classList.add('border-purple-dark');
//     });
// });

// Size selection functionality

// const sizeButtons = document.querySelectorAll('button[class*="px-4 py-3"]');
// sizeButtons.forEach(button => {
//     button.addEventListener('click', function() {
//         // Remove active state from all size buttons
//         sizeButtons.forEach(btn => {
//             btn.classList.remove('bg-purple-medium', 'text-white', 'shadow-md');
//             btn.classList.add('border', 'border-purple-light', 'hover:border-purple-medium', 'hover:bg-lav2');
//             btn.querySelector('div').classList.remove('text-white');
//             btn.querySelector('div').classList.add('text-purple-darkest');
//         });

//         // Add active state to clicked button
//         this.classList.add('bg-purple-medium', 'text-white', 'shadow-md');
//         this.classList.remove('border', 'border-purple-light', 'hover:border-purple-medium', 'hover:bg-lav2');
//         this.querySelector('div').classList.add('text-white');
//         this.querySelector('div').classList.remove('text-purple-darkest');
//     });
// });

// Add to cart functionality
const addToCartBtn = document.querySelector('button[class*="bg-purple-darkest"]');
addToCartBtn.addEventListener('click', function () {
    // Create notification
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-purple-medium text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
    notification.textContent = 'Added to cart successfully!';
    document.body.appendChild(notification);

    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);

    // Animate out and remove
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 2000);
});
// Main Single Product view end




// address_view_page start



// address_view_page end


























