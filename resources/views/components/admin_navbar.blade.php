<!DOCTYPE html>
<html lang="en">

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
					fontFamily: {
						sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
					},
					colors: {
						lav1: '#F4EFFF',
						lav2: '#E4DEFF',
						peri: '#A9B4E6',
						side: '#3F4673',
						'purple-light': '#E8E2F4',
						'purple-medium': '#C8B8E0',
						'purple-dark': '#8B7BAD',
						'purple-darkest': '#4A4461',
					}
				}
			}
		}
	</script>
	<style>
		::-webkit-scrollbar {
			width: 0;
		}

		.notify {
			z-index: 1001 !important;
		}

		.active {
			background-color: #8686f4;
		}
	</style>
</head>

<body class="min-h-screen font-sans text-slate-900 bg-gradient-to-b from-lav1 via-peri to-side">
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
					class=" {{ request()->is('admin_home') ? "active" : "bg-white/5"}} flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 shadow-sm transition-all duration-200 hover:bg-white/30 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
						</path>
					</svg>
					Dashboard
				</a>
				<a href="/admin_products_view"
					class="{{ request()->is('admin_products_view') ? "active" : "bg-white/5"}} flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
							clip-rule="evenodd"></path>
					</svg>
					Products View
				</a>
				<a href="/admin_all_orders"
					class="{{ request()->is('admin_all_orders') ? "active" : "bg-white/5"}} flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
						</path>
					</svg>
					Orders
				</a>
				<a href="admin_customer_accounts_view"
					class="{{ request()->is('admin_customer_accounts_view') ? "active" : "bg-white/5"}} flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
						</path>
					</svg>
					Customers
				</a>
				<a href="/admin_analytics_view"
					class="{{ request()->is('admin_analytics_view') ? "active" : "bg-white/5"}} flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
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
				<a href="/admin_add_categorie"
					class="{{ request()->is('admin_add_categorie') ? "active" : "bg-white/5"}}  flex items-center gap-3 rounded-lg border border-white/10 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.934 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732L9.854 7.2l1.179-4.456A1 1 0 0112 2z"
							clip-rule="evenodd"></path>
					</svg>
					Add Categorie
				</a>
				<a href="/admin_add_product"
					class="{{ request()->is('admin_add_product') ? "active" : "bg-white/5"}}  flex items-center gap-3 rounded-lg border border-white/10  px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.934 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732L9.854 7.2l1.179-4.456A1 1 0 0112 2z"
							clip-rule="evenodd"></path>
					</svg>
					Add Product
				</a>
				<a href="/admin_discounts_view"
					class="{{ request()->is('admin_discounts_view') ? "active" : "bg-white/5"}}  flex items-center gap-3 rounded-lg border border-white/10 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.934 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732L9.854 7.2l1.179-4.456A1 1 0 0112 2z"
							clip-rule="evenodd"></path>
					</svg>
					Discounts
				</a>
				<a href="/admin_inventory_view"
					class="{{ request()->is('admin_inventory_view') ? "active" : "bg-white/5"}}  flex items-center gap-3 rounded-lg border border-white/10 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path
							d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
						</path>
					</svg>
					Inventory
				</a>
				<a href="/admin_setting"
					class="{{ request()->is('admin_setting') ? "active" : "bg-white/5"}}  flex items-center gap-3 rounded-lg border border-white/10 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-white/15 hover:-translate-y-0.5 hover:shadow-md">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd"
							d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
							clip-rule="evenodd"></path>
					</svg>
					Settings
				</a>
				<a href="/admin_logout"
					class="admin_logout flex items-center gap-3 rounded-lg border border-white/10 bg-red-500 px-4 py-2.5 font-medium text-indigo-50 transition-all duration-200 hover:bg-red-800 hover:-translate-y-0.5 hover:shadow-md">
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
		<main class="relative min-h-screen backdrop-blur-sm bg-white/70 p-3 sm:p-4 md:p-6 md:ml-[260px]">
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
					<h1 class="text-lg sm:text-xl md:text-2xl font-bold">Dashboard</h1>
				</div>

				<!-- Search Bar -->
				<div
					class="flex-1 max-w-xl hidden sm:flex items-center gap-2 rounded-full border border-indigo-100 bg-white px-4 py-2 shadow-sm transition focus-within:ring-2 focus-within:ring-peri/50 order-3 sm:order-2 w-full sm:w-auto mt-3 sm:mt-0">
					<svg class="size-5 text-indigo-400 flex-shrink-0" viewBox="0 0 24 24" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21 21L16.65 16.65M18 10.5C18 14.0899 15.0899 17 11.5 17C7.91015 17 5 14.0899 5 10.5C5 6.91015 7.91015 4 11.5 4C15.0899 4 18 6.91015 18 10.5Z"
							stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<input class="w-full border-0 outline-none bg-transparent text-sm"
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
					<input class="w-full border-0 outline-none bg-transparent text-sm" placeholder="Search..." />
				</div>
			</div>


			{{$body}}

		</main>


	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/admin_script.js"></script>

	<!-- sweet alert2 start -->
	<script>
		// $(document).ready(function() {

		// log out start
		$(".admin_logout").on("click", function(e) {
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
		// log out end


		// catagory add start

		$(".add_category").on("click", function(e) {
			e.preventDefault(); // stop direct submit

			let form = $(this).closest("form")[0]; // get native form element

			Swal.fire({
				title: "Are you sure?",
				text: "Do you want to add this category?",
				icon: "question",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, add it!",
				cancelButtonText: "Cancel"
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit(); // ✅ native submit
				}
			});
		});
		// catagory add end

		// add_product add start

		$(".add_product").on("click", function(e) {
			e.preventDefault(); // stop direct submit

			let form = $(this).closest("form")[0]; // get native form element

			Swal.fire({
				title: "Are you sure?",
				text: "Do you want to add this Product?",
				icon: "question",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, add it!",
				cancelButtonText: "Cancel"
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit(); // ✅ native submit
				}
			});
		});
		// add_product add end


		// add_product add start

		$(".update_product").on("click", function(e) {
			e.preventDefault(); // stop direct submit

			let form = $(this).closest("form")[0]; // get native form element

			Swal.fire({
				title: "Are you sure?",
				text: "Do you want to update this Product?",
				icon: "question",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, add it!",
				cancelButtonText: "Cancel"
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit(); // ✅ native submit
				}
			});
		});
		// add_product update end

		// product delete start

		$(".product_delete").on("click", function(e) {
			e.preventDefault(); // stop direct submit

			let form = $(this).closest("form")[0]; // get native form element

			Swal.fire({
				title: "Are you sure?",
				text: "Do you want to delete this Product?",
				icon: "question",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "Cancel"
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit(); // ✅ native submit
				}
			});
		});
		// product delete end

		// product delete start

		$(".admin_user_account_delete_btn").on("click", function(e) {
			e.preventDefault(); // stop direct submit

			let form = $(this).closest("form")[0]; // get native form element

			Swal.fire({
				title: "Are you sure?",
				text: "Do you want to delete this User Account?",
				icon: "question",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "Cancel"
			}).then((result) => {
				if (result.isConfirmed) {
					form.submit(); // ✅ native submit
				}
			});
		});
		// product delete end

		// });
	</script>
	<!-- sweet alert2 end -->

	<!-- @notifyJs -->

</body>

</html>