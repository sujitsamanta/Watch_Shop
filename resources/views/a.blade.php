



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <!-- @notifyCss -->

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
        <!-- @include('notify::components.notify') -->

    <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-primary-darker mb-2">Verify Now</h1>
            <!-- <p class="text-gray-600">Sign in to your account</p> -->
        </div>

        <form class="space-y-6" action="/otp_verification_form_submit" method="post">
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
                <label for="otp" class="block text-sm font-medium text-primary-darker mb-2">OTP</label>
                <input type="number" id="otp" name="otp"
                    class="@error('otp') border-red-500 @else border-primary-medium @enderror w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-dark focus:border-transparent transition duration-200"
                    placeholder="Enter OTP">
                <div class="text-sm text-red-500 h-2">
                    @error('otp')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <input type="text" name="user_id" value="{{ $user_id }}" hidden>
              <!-- ✅ Remember Me -->
        <!-- <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember"
                    class="h-4 w-4 text-primary-dark focus:ring-primary-dark border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-700">
                    Remember me
                </label>
            </div>
            <a href="#" class="text-sm text-primary-dark hover:text-primary-darker underline">
                Forgot password?
            </a>
        </div> -->

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
                Verify
            </button>
        </form>

        <!-- <div class="mt-6 text-center">
            <p class="text-gray-600">
                Don't have an account?
                <a href="/signin"
                    class="text-primary-dark hover:text-primary-darker font-medium underline">Create Account</a>
            </p>
        </div> -->
    </div>
 <!-- @notifyJs -->

</body>

</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
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
</head>
<body class="bg-gradient-to-br from-primary-light to-primary-medium min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="bg-primary-light w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-primary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Verify OTP</h1>
            <p class="text-gray-600 text-sm">We've sent a verification code to your phone</p>
            <p class="text-primary-dark font-semibold text-sm mt-1">+91 *****789</p>
        </div>

        <!-- OTP Input Fields -->
        <div class="mb-8">
            <div class="flex justify-center gap-3 mb-2" id="otp-container">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="0">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="1">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="2">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="3">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="4">
                <input type="text" maxlength="1" class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all" data-index="5">
            </div>
            <p class="text-red-500 text-sm text-center hidden" id="error-message">Invalid OTP. Please try again.</p>
        </div>

        <!-- Verify Button -->
        <button id="verify-btn" class="w-full bg-primary-dark text-white py-3 rounded-lg font-semibold hover:bg-primary-darker transition-colors mb-4 disabled:bg-gray-300 disabled:cursor-not-allowed">
            Verify OTP
        </button>

        <!-- Resend Section -->
        <div class="text-center">
            <p class="text-gray-600 text-sm mb-2">Didn't receive the code?</p>
            <button id="resend-btn" class="text-primary-dark font-semibold text-sm hover:text-primary-darker transition-colors">
                Resend OTP <span id="timer" class="text-gray-500"></span>
            </button>
        </div>

        <!-- Success Message (Hidden by default) -->
        <div id="success-message" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl p-8 max-w-sm text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Verified!</h2>
                <p class="text-gray-600">Your phone number has been successfully verified.</p>
            </div>
        </div>
    </div>

    <script>
        const inputs = document.querySelectorAll('.otp-input');
        const verifyBtn = document.getElementById('verify-btn');
        const resendBtn = document.getElementById('resend-btn');
        const errorMsg = document.getElementById('error-message');
        const successMsg = document.getElementById('success-message');
        const timerSpan = document.getElementById('timer');
        
        let timeLeft = 30;
        let timerInterval;

        // Start timer
        function startTimer() {
            timeLeft = 30;
            resendBtn.disabled = true;
            resendBtn.classList.add('opacity-50', 'cursor-not-allowed');
            
            timerInterval = setInterval(() => {
                timeLeft--;
                timerSpan.textContent = `(${timeLeft}s)`;
                
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    timerSpan.textContent = '';
                    resendBtn.disabled = false;
                    resendBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            }, 1000);
        }

        // Auto-focus next input
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;
                
                if (value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                
                errorMsg.classList.add('hidden');
                checkAllFilled();
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const pastedData = e.clipboardData.getData('text').slice(0, 6);
                
                pastedData.split('').forEach((char, i) => {
                    if (inputs[i]) {
                        inputs[i].value = char;
                    }
                });
                
                if (pastedData.length === 6) {
                    inputs[5].focus();
                }
                checkAllFilled();
            });
        });

        function checkAllFilled() {
            const allFilled = Array.from(inputs).every(input => input.value.length === 1);
            verifyBtn.disabled = !allFilled;
        }

        verifyBtn.addEventListener('click', () => {
            const otp = Array.from(inputs).map(input => input.value).join('');
            
            // Simulate OTP verification (replace with actual verification logic)
            if (otp === '123456') {
                successMsg.classList.remove('hidden');
                setTimeout(() => {
                    successMsg.classList.add('hidden');
                    inputs.forEach(input => input.value = '');
                    inputs[0].focus();
                }, 3000);
            } else {
                errorMsg.classList.remove('hidden');
                inputs.forEach(input => {
                    input.classList.add('border-red-500');
                    setTimeout(() => input.classList.remove('border-red-500'), 2000);
                });
            }
        });

        resendBtn.addEventListener('click', () => {
            if (!resendBtn.disabled) {
                alert('OTP resent successfully!');
                startTimer();
                inputs.forEach(input => input.value = '');
                inputs[0].focus();
            }
        });

        // Initialize
        startTimer();
        inputs[0].focus();
        checkAllFilled();
    </script>
</body>
</html>