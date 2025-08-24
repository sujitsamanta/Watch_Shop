<!DOCTYPE html>
<html lang="en" class="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HandWatch Admin Dashboard</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="css/admin_style.css">
	<!-- @notifyCss -->

	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
					colors: {
						lav1: '#F4EFFF',
						lav2: '#E4DEFF',
						peri: '#A9B4E6',
						side: '#3F4673',
						'purple-light': '#E8E2F4',
						'purple-medium': '#C8B8E0',
						'purple-dark': '#8B7BAD',
						'purple-darkest': '#4A4461',
						// Dark mode colors
						'dark-bg': '#0f172a',
						'dark-sidebar': '#1e293b',
						'dark-card': '#334155',
						'dark-text': '#f1f5f9',
						'dark-border': '#475569',
					}
				}
			}
		}
	</script>
	<style>
		.notify {
			z-index: 1001 !important;
		}

		/* Dark mode styles */
		:root {
			--bg-primary: #F4EFFF;
			--bg-secondary: #E4DEFF;
			--bg-tertiary: #A9B4E6;
			--bg-sidebar: #3F4673;
			--text-primary: #1e293b;
			--text-secondary: #475569;
			--card-bg: rgba(255, 255, 255, 0.7);
			--border-color: rgba(71, 85, 105, 0.3);
		}

		[data-theme="dark"] {
			--bg-primary: #0f172a;
			--bg-secondary: #1e293b;
			--bg-tertiary: #334155;
			--bg-sidebar: #1e293b;
			--text-primary: #f1f5f9;
			--text-secondary: #cbd5e1;
			--card-bg: rgba(51, 65, 85, 0.7);
			--border-color: rgba(71, 85, 105, 0.5);
		}

		body {
			transition: background-color 0.3s ease, color 0.3s ease;
		}

		.dark-mode-toggle {
			transition: all 0.3s ease;
		}

		/* Dark mode specific overrides */
		[data-theme="dark"] .bg-white\/70 {
			background-color: var(--card-bg);
		}

		[data-theme="dark"] .text-slate-900 {
			color: var(--text-primary);
		}

		[data-theme="dark"] .border-indigo-100 {
			border-color: var(--border-color);
		}

		[data-theme="dark"] .bg-white {
			background-color: var(--card-bg);
		}
	</style>
</head>

<body class="min-h-screen font-sans transition-all duration-300" data-theme="light">
	<!-- @include('notify::components.notify') -->

	<div class="min-h-screen relative">
		<!-- Mobile Menu Overlay -->
		<div id="mobile-overlay"
			class="fixed inset-0 bg-black/50 z-40 md:hidden opacity-0 pointer-events-none transition-opacity duration-300">
		</div>

		<!-- Sidebar -->
		<aside id="sidebar" class="bg-side/95 text-indigo-50 p-4 md:p-6 flex flex-col gap-4 
			fixed inset-y-0 left-0 w-[280px] md:w-[260px] shadow-xl z-50 md:z-20 
			transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out
			overflow-y-auto">

			<!-- Mobile Close Button -->
			<button id="close-menu" class="md:hidden self-end p-2 hover:bg-white/10 rounded-lg transition-colors">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
					</path>
				</svg>
			</button>

			<div
				class="text-lg md:text-xl font-bold tracking-tight rounded-xl bg-white/10 px-4 py-2 transition-transform duration-200 hover:scale-[1.02] hover:shadow">
				HandWatch Admin
			</div>

			<div class="uppercase text-[11px] opacity-80 px-3">Main</div>
			<nav class="flex flex-col gap-2">
				<a href="/admin_home" aria-current="page"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/20 px-4 py-2.5 font-medium text-indigo-50 shadow-sm transition-all duration-200 hover:bg-white/30 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
						</path>
					</svg>
					Dashboard
				</a>
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
							clip-rule="evenodd"></path>
					</svg>
					Watches
				</a>
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
						</path>
					</svg>
					Orders
				</a>
				<a href="/admin_customer_accounts_view"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
						</path>
					</svg>
					Customers
				</a>
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
						</path>
					</svg>
					Analytics
				</a>
			</nav>

			<div class="uppercase text-[11px] opacity-80 px-3 mt-2">Manage</div>
			<nav class="flex flex-col gap-2">
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.934 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732L9.854 7.2l1.179-4.456A1 1 0 0112 2z"
							clip-rule="evenodd"></path>
					</svg>
					Discounts
				</a>
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
						</path>
					</svg>
					Inventory
				</a>
				<a href="#"
					class="flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
							clip-rule="evenodd"></path>
					</svg>
					Settings
				</a>
				<a href="/admin_logout"
					class="admin_logout flex items-center gap-3 rounded-lg border border-white/10 bg-white/5 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
							clip-rule="evenodd"></path>
					</svg>
					Logout
				</a>
			</nav>
		</aside>

		<!-- Main Content -->
		<main class="relative min-h-screen backdrop-blur-sm bg-white/70 p-3 sm:p-4 md:p-6 md:ml-[260px] transition-all duration-300" id="main-content">
			<!-- Header -->
			<div class="mb-4 md:mb-6 flex items-center gap-3 md:gap-4 justify-between flex-wrap">
				<div class="flex items-center gap-3">
					<!-- Mobile Menu Button -->
					<button id="menu-toggle" class="md:hidden p-2 hover:bg-white/50 rounded-lg transition-colors">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					<h1 class="text-lg sm:text-xl md:text-2xl font-bold transition-colors duration-300">Dashboard</h1>
				</div>

				<!-- Dark Mode Toggle -->
				<button id="dark-mode-toggle" class="p-2 rounded-lg transition-all duration-300 hover:bg-white/50 dark-mode-toggle">
					<!-- Sun Icon (Light Mode) -->
					<svg id="sun-icon" class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
					</svg>
					<!-- Moon Icon (Dark Mode) -->
					<svg id="moon-icon" class="w-6 h-6 text-blue-400 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
					</svg>
				</button>

				<!-- Search Bar -->
				<div
					class="flex-1 max-w-xl hidden sm:flex items-center gap-2 rounded-full border border-indigo-100 bg-white px-4 py-2 shadow-sm transition focus-within:ring-2 focus-within:ring-peri/50 order-3 sm:order-2 w-full sm:w-auto mt-3 sm:mt-0">
					<svg class="size-5 text-indigo-400 flex-shrink-0" viewBox="0 0 24 24" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21 21L16.65 16.65M18 10.5C18 14.0899 15.0899 17 11.5 17C7.91015 17 5 14.0899 5 10.5C5 6.91015 7.91015 4 11.5 4C15.0899 4 18 6.91015 18 10.5Z"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<input class="w-full border-0 outline-none bg-transparent text-sm transition-colors duration-300"
						placeholder="Search watches, orders..." />
				</div>

				<!-- Profile Avatar -->
				<div
					class="grid place-items-center size-9 rounded-full bg-[#5963A2] text-white font-bold transition-transform duration-150 hover:scale-105 hover:ring-2 hover:ring-white/60 order-2 sm:order-3">
					A
				</div>
			</div>

			<!-- Mobile Search Bar -->
			<div class="sm:hidden mb-4">
				<div
					class="flex items-center gap-2 rounded-full border border-indigo-100 bg-white px-4 py-2 shadow-sm transition focus-within:ring-2 focus-within:ring-peri/50">
					<svg class="size-5 text-indigo-400 flex-shrink-0" viewBox="0 0 24 24" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21 21L16.65 16.65M18 10.5C18 14.0899 15.0899 17 11.5 17C7.91015 17 5 14.0899 5 10.5C5 6.91015 7.91015 4 11.5 4C15.0899 4 18 6.91015 18 10.5Z"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<input class="w-full border-0 outline-none bg-transparent text-sm transition-colors duration-300" placeholder="Search..." />
				</div>
			</div>

			{{$body}}
		</main>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/admin_script.js"></script>

	<!-- Dark Mode Script -->
	<script>
		// Dark mode functionality
		function initDarkMode() {
			const darkModeToggle = document.getElementById('dark-mode-toggle');
			const sunIcon = document.getElementById('sun-icon');
			const moonIcon = document.getElementById('moon-icon');
			const body = document.body;
			const mainContent = document.getElementById('main-content');
			
			// Check for saved theme preference or default to light mode
			const currentTheme = localStorage.getItem('admin-theme') || 'light';
			body.setAttribute('data-theme', currentTheme);
			
			// Update UI based on current theme
			updateThemeUI(currentTheme);
			
			// Toggle theme function
			darkModeToggle.addEventListener('click', () => {
				const currentTheme = body.getAttribute('data-theme');
				const newTheme = currentTheme === 'light' ? 'dark' : 'light';
				
				body.setAttribute('data-theme', newTheme);
				localStorage.setItem('admin-theme', newTheme);
				
				updateThemeUI(newTheme);
				applyThemeStyles(newTheme);
			});
			
			// Apply initial theme
			applyThemeStyles(currentTheme);
		}
		
		function updateThemeUI(theme) {
			const sunIcon = document.getElementById('sun-icon');
			const moonIcon = document.getElementById('moon-icon');
			
			if (theme === 'dark') {
				sunIcon.classList.add('hidden');
				moonIcon.classList.remove('hidden');
			} else {
				sunIcon.classList.remove('hidden');
				moonIcon.classList.add('hidden');
			}
		}
		
		function applyThemeStyles(theme) {
			const mainContent = document.getElementById('main-content');
			
			if (theme === 'dark') {
				// Dark mode styles
				mainContent.classList.remove('bg-white/70');
				mainContent.classList.add('bg-dark-card/70');
				mainContent.classList.add('text-dark-text');
				
				// Update search bars
				const searchBars = document.querySelectorAll('.border-indigo-100, .bg-white');
				searchBars.forEach(bar => {
					bar.classList.remove('border-indigo-100', 'bg-white');
					bar.classList.add('border-dark-border', 'bg-dark-card');
				});
				
				// Update text colors
				const textElements = document.querySelectorAll('.text-slate-900');
				textElements.forEach(text => {
					text.classList.remove('text-slate-900');
					text.classList.add('text-dark-text');
				});
			} else {
				// Light mode styles
				mainContent.classList.remove('bg-dark-card/70', 'text-dark-text');
				mainContent.classList.add('bg-white/70');
				
				// Restore search bars
				const searchBars = document.querySelectorAll('.border-dark-border, .bg-dark-card');
				searchBars.forEach(bar => {
					bar.classList.remove('border-dark-border', 'bg-dark-card');
					bar.classList.add('border-indigo-100', 'bg-white');
				});
				
				// Restore text colors
				const textElements = document.querySelectorAll('.text-dark-text');
				textElements.forEach(text => {
					text.classList.remove('text-dark-text');
					text.classList.add('text-slate-900');
				});
			}
		}
		
		// Initialize dark mode when DOM is loaded
		document.addEventListener('DOMContentLoaded', initDarkMode);
	</script>

	<!-- sweet alert2 start -->
	<script>
		$(document).ready(function () {
			$(".admin_logout").on("click", function (e) {
				e.preventDefault(); // Stop default logout immediately

				// var form = $(this).parents("form"); 

				let url = $(this).attr("href"); // /logout

				Swal.fire({
					title: "Are you sure?",
					text: "You will be logged out from the system.",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Yes, log me out!"
				}).then((result) => {
					if (result.isConfirmed) {
						// Redirect to logout
                        // form.submit();
						window.location.href = url;
					}
				});
			});
		});
	</script>
	<!-- sweet alert2 end -->

	<!-- @notifyJs -->

</body>

</html>