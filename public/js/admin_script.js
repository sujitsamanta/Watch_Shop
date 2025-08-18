// Mobile menu functionality
		const menuToggle = document.getElementById('menu-toggle');
		const closeMenu = document.getElementById('close-menu');
		const sidebar = document.getElementById('sidebar');
		const overlay = document.getElementById('mobile-overlay');

		function openMobileMenu() {
			sidebar.classList.remove('-translate-x-full');
			sidebar.classList.add('translate-x-0');
			overlay.classList.remove('opacity-0', 'pointer-events-none');
			overlay.classList.add('opacity-100');
			document.body.style.overflow = 'hidden';
		}

		function closeMobileMenu() {
			sidebar.classList.remove('translate-x-0');
			sidebar.classList.add('-translate-x-full');
			overlay.classList.remove('opacity-100');
			overlay.classList.add('opacity-0', 'pointer-events-none');
			document.body.style.overflow = '';
		}

		menuToggle?.addEventListener('click', openMobileMenu);
		closeMenu?.addEventListener('click', closeMobileMenu);
		overlay?.addEventListener('click', closeMobileMenu);

		// Close menu on escape key
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape') {
				closeMobileMenu();
			}
		});

		// Close mobile menu when window is resized to desktop
		window.addEventListener('resize', function() {
			if (window.innerWidth >= 768) {
				closeMobileMenu();
			}
		});

		// Ensure menu is properly positioned on page load
		document.addEventListener('DOMContentLoaded', function() {
			if (window.innerWidth < 768) {
				sidebar.classList.add('-translate-x-full');
			}
		});