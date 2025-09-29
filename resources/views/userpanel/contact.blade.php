<x-user_navbar>
    <x-slot name="body">
        <div>
            <!-- Contact Page Header -->
            <section class="relative via-lav1 to-lav2 py-8 px-4">
                <div class="container mx-auto text-center">
                    <h1 class="text-3xl md:text-4xl font-bold text-purple-darkest mb-3">Contact Us</h1>
                    <p class="text-base text-purple-dark max-w-2xl mx-auto">
                        Get in touch with our watch experts. We're here to help you find the perfect timepiece.
                    </p>
                </div>
            </section>

            <!-- Contact Content -->
            <section class="py-8 px-4 bg-lav1">
                <div class="container mx-auto">
                    <div class="grid lg:grid-cols-2 gap-8">

                        <!-- Contact Form -->
                        <div class="bg-white rounded-2xl shadow-card p-6">
                            <h2 class="text-xl font-bold text-purple-darkest mb-4">Send us a Message</h2>

                            <form class="space-y-4" action="#" method="POST">
                                @csrf
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-purple-dark mb-2">First Name</label>
                                        <input type="text" id="first_name" name="first_name" required
                                            class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-purple-dark mb-2">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" required
                                            class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-purple-dark mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300">
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-purple-dark mb-2">Phone Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300">
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-purple-dark mb-2">Subject</label>
                                    <select id="subject" name="subject" required
                                        class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300">
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="product">Product Information</option>
                                        <option value="warranty">Warranty & Service</option>
                                        <option value="order">Order Support</option>
                                        <option value="returns">Returns & Exchanges</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-purple-dark mb-2">Message</label>
                                    <textarea id="message" name="message" rows="5" required
                                        class="w-full px-4 py-3 border border-purple-light rounded-lg focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-300 resize-none"
                                        placeholder="Tell us how we can help you..."></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-purple-medium hover:bg-purple-dark text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:shadow-card transform hover:scale-105">
                                    Send Message
                                </button>
                            </form>
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-6">

                            <!-- Map Placeholder -->
                            <div class="bg-white rounded-2xl shadow-card p-6">
                                <h2 class="text-xl font-bold text-purple-darkest mb-4">Find Us</h2>
                                <div class="bg-purple-lightest rounded-lg h-48 flex items-center justify-center">
                                    <div class="text-center text-purple-dark">
                                        <i class="fas fa-map-marked-alt text-4xl mb-4"></i>
                                        <p class="text-lg font-medium">Interactive Map</p>
                                        <p class="text-sm">123 Watch Street, New York, NY 10001</p>
                                    </div>
                                </div>
                            </div>


                            <!-- Contact Details -->
                            <div class="bg-white rounded-2xl shadow-card p-6">
                                <h2 class="text-xl font-bold text-purple-darkest mb-4">Get in Touch</h2>

                                <div class="space-y-4">
                                    <!-- Phone -->
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-purple-medium rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-phone text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-purple-darkest mb-1">Phone</h3>
                                            <p class="text-purple-dark">+1 (555) 123-4567</p>
                                            <p class="text-sm text-purple-dark">Mon-Fri 9AM-6PM EST</p>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-purple-medium rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-envelope text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-purple-darkest mb-1">Email</h3>
                                            <p class="text-purple-dark">support@handwatchshop.com</p>
                                            <p class="text-sm text-purple-dark">We respond within 24 hours</p>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-purple-medium rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-map-marker-alt text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-purple-darkest mb-1">Visit Our Store</h3>
                                            <p class="text-purple-dark">123 Watch Street<br>Luxury District<br>New York, NY 10001</p>
                                            <p class="text-sm text-purple-dark">Mon-Sat 10AM-8PM, Sun 12PM-6PM</p>
                                        </div>
                                    </div>
                                    <div class="flex space-x-12">
                                        <a href="#" class="w-12 h-12 bg-purple-medium hover:bg-purple-dark rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                            <i class="fab fa-facebook-f text-white"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 bg-purple-medium hover:bg-purple-dark rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                            <i class="fab fa-instagram text-white"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 bg-purple-medium hover:bg-purple-dark rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                            <i class="fab fa-twitter text-white"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 bg-purple-medium hover:bg-purple-dark rounded-lg flex items-center justify-center transition-all duration-300 hover:scale-110">
                                            <i class="fab fa-youtube text-white"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-8 px-4 ">
                <div class="container mx-auto">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-purple-darkest mb-3">Frequently Asked Questions</h2>
                        <p class="text-purple-dark max-w-2xl mx-auto">
                            Quick answers to common questions about our watches and services.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        <div class="bg-white rounded-xl shadow-card p-4">
                            <h3 class="font-semibold text-purple-darkest mb-2">What is your return policy?</h3>
                            <p class="text-purple-dark text-sm">We offer a 30-day return policy for all unworn watches in original condition.</p>
                        </div>

                        <div class="bg-white rounded-xl shadow-card p-4">
                            <h3 class="font-semibold text-purple-darkest mb-2">Do you offer international shipping?</h3>
                            <p class="text-purple-dark text-sm">Yes, we ship worldwide with tracking and insurance included.</p>
                        </div>

                        <div class="bg-white rounded-xl shadow-card p-4">
                            <h3 class="font-semibold text-purple-darkest mb-2">How long is the warranty?</h3>
                            <p class="text-purple-dark text-sm">All watches come with a 2-year manufacturer warranty.</p>
                        </div>

                        <div class="bg-white rounded-xl shadow-card p-4">
                            <h3 class="font-semibold text-purple-darkest mb-2">Can I get my watch serviced?</h3>
                            <p class="text-purple-dark text-sm">We provide professional watch servicing and maintenance services.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </x-slot>
</x-user_navbar>