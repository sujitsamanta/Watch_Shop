<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-light': '#E8E0FF',
                        'primary-medium': '#C8B5FF',
                        'primary-dark': '#8B7BC7',
                        'primary-darker': '#5A4B8C'
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #E8E0FF 0%, #C8B5FF 30%, #8B7BC7 70%, #5A4B8C 100%);
        }
        .succesful {
            background-color: #E8E0FF;
            border: 1px solid #8B7BC7;
            color: #5A4B8C;
        }

        .not_succesful {
            background-color: #FFEEF0;
            border: 1px solid #DC2626;
            color: #DC2626;
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
</head>

<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-primary-darker mb-2">Login Now</h1>
            <!-- <p class="text-gray-600">Sign in to your account</p> -->
        </div>

        <form class="space-y-6" action="/login_submit" method="post">
            @csrf
            @if (session('alert'))
                @if (session('alert') == 'succesful')
                    <x-alert alert="succesful" message="Account is succesfuly created.." />
                @elseif(session('alert') == 'not_succesful')
                    <x-alert alert="not_succesful" message="Incorrect data.." />
                @else

                @endif
            @endif
            <div>
                <label for="email" class="block text-sm font-medium text-primary-darker mb-2">Email Address</label>
                <input type="email" id="email" name="email"
                    class="@error('email') border-red-500 @else border-primary-medium @enderror w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-dark focus:border-transparent transition duration-200"
                    placeholder="Enter your email" value="{{ old('email') }}">
                <div class="text-sm text-red-500 h-2">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-primary-darker mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="@error('password') border-red-500 @else border-primary-medium @enderror w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-dark focus:border-transparent transition duration-200"
                    placeholder="Enter your password">
                <div class="text-sm text-red-500 h-2">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <!-- <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Remember me
                    </label>
                </div>
                <a href="#" class="text-sm text-green-600 hover:text-green-800 underline">
                    Forgot password?
                </a>
            </div> -->

            <button type="submit"
                class="w-full bg-primary-dark text-white py-3 px-4 rounded-lg hover:bg-primary-darker focus:outline-none focus:ring-2 focus:ring-primary-dark focus:ring-offset-2 transition duration-200 font-medium">
                LogIn
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">
                Don't have an account?
                <a href="/signin"
                    class="text-primary-dark hover:text-primary-darker font-medium underline">Create Account</a>
            </p>
        </div>

       

       
    </div>
</body>

</html>