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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Verify OTP</h1>
            <p class="text-gray-600 text-sm">We’ve sent a 6-digit code to your registered email.</p>
        </div>

        <!-- Laravel Error or Success Messages -->
        @if(session('error'))
            <p class="text-center text-red-500 text-sm mb-3">{{ session('error') }}</p>
        @elseif(session('success'))
            <p class="text-center text-green-500 text-sm mb-3">{{ session('success') }}</p>
        @endif

        <!-- OTP Form -->
        <form id="otpForm" action="/otp_verification_form_submit" method="post">
            @csrf

            <div class="flex justify-center gap-3 mb-6" id="otp-container">
                @for ($i = 0; $i < 6; $i++)
                    <input type="text" maxlength="1"
                        class="otp-input w-14 h-14 text-center text-2xl font-semibold border-2 border-gray-300 rounded-lg focus:border-primary-dark focus:outline-none transition-all"
                        data-index="{{ $i }}" >
                @endfor
            </div>

            <input type="hidden" name="otp" id="otp-value">

            <button type="submit" id="verify-btn"
                class="w-full bg-primary-dark text-white py-3 rounded-lg font-semibold hover:bg-primary-darker transition-colors disabled:bg-gray-300 disabled:cursor-not-allowed">
                Verify OTP
            </button>
        </form>

        <!-- Resend OTP -->
        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm mb-1">Didn’t receive the code?</p>
            <form action="/otp_verification_form_resubmit" method="get" class="inline">
                <button type="submit" id="resend-btn"
                    class="text-primary-dark font-semibold text-sm hover:text-primary-darker transition-colors">
                    Resend OTP <span id="timer" class="text-gray-500"></span>
                </button>
            </form>
        </div>

    </div>

    <!-- JS Section -->
    <script>
        const inputs = document.querySelectorAll('.otp-input');
        const otpValue = document.getElementById('otp-value');
        const verifyBtn = document.getElementById('verify-btn');
        const timerSpan = document.getElementById('timer');
        let timeLeft = 30;
        let timerInterval;

        // Timer for resend
        function startTimer() {
            timeLeft = 60;
            timerSpan.textContent = `(${timeLeft}s)`;
            const resendBtn = document.getElementById('resend-btn');
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

        startTimer();

        // Focus management and OTP combine
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value.replace(/[^0-9]/g, '');
                e.target.value = value;

                if (value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }

                otpValue.value = Array.from(inputs).map(i => i.value).join('');
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>
