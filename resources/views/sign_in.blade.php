
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1a4d2e 0%, #6b7280 50%, #f4a460 100%);
        }

        .succesful {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;

        }

        .not_succesful {
            background-color: #fffbeb;
            border: 1px solid #fed7aa;
            color: #92400e;

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
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Create Account</h1>
            <!-- <p class="text-gray-600">Join us today and get started</p> -->
        </div>

        <form class="space-y-6" action="signin_submit" method="post">
            @csrf

            @if (session('alert'))
                @if (session('alert') == 'succesful')
                    <x-alert alert="succesful" message="Account is succesfuly created.." />
                @elseif(session('alert') == 'not_succesful')
                    <x-alert alert="not_succesful" message="Delete.." />
                @else
                @endif
            @endif

            <div>
                <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input type="text" id="fullName" name="name"
                    class="@error('name') border-red-500 @else border-gray-300 @enderror
                         w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-green-600 focus:ring-2  focus:border-transparent transition duration-200"
                    placeholder="Enter your full name" value="{{ old('name') }}">
                <div class="text-sm text-red-500 h-2">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>

            </div>

            

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email"
                    class="@error('email') border-red-500 @else border-gray-300 @enderror w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition duration-200"
                    placeholder="Enter your email" value="{{ old('email') }}">
                <div class="text-sm text-red-500 h-2">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>

             

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="@error('password') border-red-500 @else border-gray-300 @enderror w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition duration-200"
                    placeholder="Create a password" value="{{ old('password') }}">
                <div class="text-sm text-red-500 h-2">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div>
                <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                    Password</label>
                <input type="password" id="confirmPassword" name="password_confirmation"
                    class="@error('password_confirmation') border-red-500 @else border-gray-300 @enderror w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent transition duration-200"
                    placeholder="Confirm your password" value="{{ old('password_confirmation') }}">
                <div class="text-sm text-red-500 h-2">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <!-- <div class="flex items-center">
                <input type="checkbox" id="terms" name="terms"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="terms" class="ml-2 block text-sm text-gray-700">
                    I agree to the <a href="#" class=" text-purple-600 hover:text-purple-800 underline">Terms of
                        Service</a> and <a href="#" class=" text-purple-600 hover:text-purple-800 underline">Privacy
                        Policy</a>
                </label>
            </div> -->

            <button type="submit"
                class="w-full bg-green-700 text-white py-3 px-4 rounded-lg hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500  focus:ring-offset-2 transition duration-200 font-medium">
                Create Account
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">
                Already have an account?
                <a href="/log_in"
                    class="text-green-600 hover:text-green-800 font-medium underline">login</a>
            </p>
        </div>

        
    </div>
</body>

</html>