 document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const searchToggle = document.getElementById('search-toggle');
            const searchBarMobile = document.getElementById('search-bar-mobile');
            const mobileProductsBtn = document.getElementById('mobile-products-btn');
            const mobileProductsMenu = document.getElementById('mobile-products-menu');
            const mobileBrandsBtn = document.getElementById('mobile-brands-btn');
            const mobileBrandsMenu = document.getElementById('mobile-brands-menu');
            
            // Mobile menu toggle
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    mobileMenu.classList.toggle('active');
                    
                    const icon = mobileMenuBtn.querySelector('svg');
                    if (mobileMenu.classList.contains('active')) {
                        icon.innerHTML = `
                            <path d="M18 6 6 18"/>
                            <path d="m6 6 12 12"/>
                        `;
                    } else {
                        icon.innerHTML = `
                            <line x1="4" x2="20" y1="6" y2="6"/>
                            <line x1="4" x2="20" y1="12" y2="12"/>
                            <line x1="4" x2="20" y1="18" y2="18"/>
                        `;
                    }
                });
            }
            
            // Mobile search toggle
            if (searchToggle && searchBarMobile) {
                searchToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    searchBarMobile.classList.toggle('active');
                    if (searchBarMobile.classList.contains('active')) {
                        setTimeout(() => {
                            const input = searchBarMobile.querySelector('input');
                            if (input) input.focus();
                        }, 300);
                    }
                });
            }
            
            // Mobile submenu toggles
            if (mobileProductsBtn && mobileProductsMenu) {
                mobileProductsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    mobileProductsMenu.classList.toggle('active');
                    const chevron = mobileProductsBtn.querySelector('.mobile-chevron');
                    if (chevron) {
                        chevron.style.transform = mobileProductsMenu.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                    }
                });
            }
            
            if (mobileBrandsBtn && mobileBrandsMenu) {
                mobileBrandsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    mobileBrandsMenu.classList.toggle('active');
                    const chevron = mobileBrandsBtn.querySelector('.mobile-chevron');
                    if (chevron) {
                        chevron.style.transform = mobileBrandsMenu.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                    }
                });
            }
            
           
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('nav')) {
            if (mobileMenu) mobileMenu.classList.remove('active');
            if (searchBarMobile) searchBarMobile.classList.remove('active');
            
            const icon = mobileMenuBtn ? mobileMenuBtn.querySelector('svg') : null;
            if (icon) {
                icon.innerHTML = `
                    <line x1="4" x2="20" y1="6" y2="6"/>
                    <line x1="4" x2="20" y1="12" y2="12"/>
                    <line x1="4" x2="20" y1="18" y2="18"/>
                `;
            }
        }
    });
    
    // Search functionality (demo)
    const searchInputs = document.querySelectorAll('input[type="text"]');
    searchInputs.forEach(input => {
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for: ${e.target.value}`);
            }
        });
    });
    
    // Handle window resize to ensure proper responsive behavior
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            if (mobileMenu) mobileMenu.classList.remove('active');
            if (searchBarMobile) searchBarMobile.classList.remove('active');
        }
    });
});