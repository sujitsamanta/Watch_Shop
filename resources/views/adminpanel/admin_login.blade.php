<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- @notifyCss -->

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-light': '#f3f0ff',
                        'purple-medium': '#e5dbff',
                        'purple-dark': '#8b7fb8',
                        'purple-darker': '#4a4363'
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #000000 0%, #8B0000 50%, #008080 100%);
        }

        .succesful {
            background-color: #F5F5F5;
            border: 1px solid #008080;
            color: #000000;
        }

        .not_succesful {
            background-color: #F5F5F5;
            border: 1px solid #8B0000;
            color: #8B0000;
        }

        .alert {
            border-radius: 0.5rem;
            padding: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .alert-icon {
            height: 1.25rem;
            width: 1.25rem;
            margin-top: 0.125rem;
            flex-shrink: 0;
        }

        .alert-content {
            flex: 1;
        }

        .alert-title {
            font-size: 0.875rem;
            font-weight: 500;
            margin: 0;
        }
    </style>

      <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full-screen loader */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            /* blurred background */
            background: rgba(0, 0, 0, 0.2);
            /* dark overlay */
            z-index: 99999;
            animation: fadeIn 0.4s ease;
        }

        /* Loader content (centered) */
        .loader-content {
            text-align: center;
        }

        /* Spinner style */
        .spinner {
            width: 80px;
            height: 80px;
            border: 6px solid rgba(157, 141, 241, 0.2);
            border-top: 6px solid #9D8DF1;
            /* purple-medium */
            border-radius: 50%;
            margin: 0 auto 20px;
            animation: spin .5s ease-in-out infinite;
            box-shadow: 0 0 15px rgba(157, 141, 241, 0.5);
        }

        /* Loader text */
        .loader-text {
            font-size: 18px;
            color: #fff;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Spinner rotation animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Smooth fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

</head>

<body
    class="min-h-screen bg-gradient-to-b from-purple-light via-purple-medium to-purple-dark flex items-center justify-center p-4">
    <!-- @include('notify::components.notify') -->

 <!--  Loader Section start -->
    <div id="loader" style="display: none;">
        <div class="loader-content">
            <div class="spinner"></div>
            <p class="loader-text">Please wait...</p>
        </div>
    </div>
    <!--  Loader Section end -->

    
    <div class="w-full max-w-md">
        <!-- Login Card -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-white/20">
            <!-- Header -->
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-gradient-to-br from-purple-dark to-purple-darker rounded-full mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-purple-darker mb-2">Admin Login</h1>
                <p class="text-purple-dark">Please sign in to access the admin panel</p>
            </div>

            <!-- Login Form -->
            <form id="loder_out" class="space-y-6" method="post" action="admin_login_submit">
                @csrf

                @if (session('alert'))
                @if (session('alert') == 'succesful')
                <x-alert alert="succesful" message="Account is succesfuly created.." />
                @elseif(session('alert') == 'not_succesful')
                <x-alert alert="not_succesful" message="Invalid details.." />
                @else
                @endif
                @endif

                <!-- User ID Input -->
                <div class="space-y-2">
                    <label for="userId" class="block text-sm font-semibold text-purple-darker">User ID</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-purple-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input type="text" id="email" name="email"
                            class="@error('email') border-red-500 @else border-purple-medium @enderror w-full pl-10 pr-4 py-3 border-2  rounded-lg focus:outline-none focus:border-purple-dark focus:ring-2 focus:ring-purple-dark/20 transition-all duration-200 bg-white/50"
                            placeholder="Enter your email ID" value="{{ old('email') }}">
                        <div class="text-sm text-red-500 h-2">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-semibold text-purple-darker">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-purple-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input type="password" id="password" name="password"
                            class=" @error('password') border-red-500 @else border-purple-medium @enderror w-full pl-10 pr-12 py-3 border-2  rounded-lg focus:outline-none focus:border-purple-dark focus:ring-2 focus:ring-purple-dark/20 transition-all duration-200 bg-white/50"
                            placeholder="Enter your password">

                        <div class="text-sm text-red-500 h-2">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>

                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="">
                            <svg id="eyeIcon"
                                class="w-5 h-5 text-purple-dark hover:text-purple-darker transition-colors cursor-pointer"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <!-- <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-purple-dark bg-white border-purple-medium rounded focus:ring-purple-dark focus:ring-2">
                        <span class="ml-2 text-purple-darker">Remember me</span>
                    </label>
                    <a href="#" class="text-purple-dark hover:text-purple-darker font-medium transition-colors">
                        Forgot password?
                    </a>
                </div> -->

                <!-- Login Button -->
                <button id="loder_come" type="submit"
                    class="w-full bg-gradient-to-r from-purple-dark to-purple-darker text-white py-3 px-4 rounded-lg font-semibold hover:from-purple-darker hover:to-purple-dark focus:outline-none focus:ring-2 focus:ring-purple-dark focus:ring-offset-2 transform transition-all duration-200 hover:scale-105 active:scale-95">
                    Sign In
                </button>
            </form>

            <!-- Footer -->
            <!-- <div class="mt-8 text-center text-sm text-purple-dark">
                <p>Need help? <a href="#" class="font-medium text-purple-darker hover:underline">Contact Support</a></p>
            </div>
        </div> -->
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#loder_come").click(function() {
                    // Show loader
                    $("#loader").fadeIn(300);
                });

                // Optional: Hide loader when form submission completes
                $("#loder_out").on('submit', function() {
                    $("#loader").fadeIn(300); // show loader before submitting
                });
            });
        </script>


        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eyeIcon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                `;
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
                }
            }

            // function handleLogin(event) {
            //     event.preventDefault();
            //     const userId = document.getElementById('userId').value;
            //     const password = document.getElementById('password').value;

            //     // Simple validation demo
            //     if (userId && password) {
            //         // Show success message (in a real app, this would handle authentication)
            //         alert('Login attempt with User ID: ' + userId);
            //         // You would typically send this to your backend for authentication
            //     } else {
            //         alert('Please fill in both fields');
            //     }
            // }

            // Add subtle animations on load
            document.addEventListener('DOMContentLoaded', function() {
                const card = document.querySelector('.bg-white\\/90');
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease-out';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100);
            });
        </script>
        <!-- @notifyJs -->

</body>

</html>