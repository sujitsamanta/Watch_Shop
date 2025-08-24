<x-admin_navbar>
    <x-slot name="body">
        <div class="container mx-auto px-6 py-8">
            <!-- Header -->
            <div class="mb-12">
                <h1 class="text-4xl font-bold text-side mb-3">
                    Admin Settings
                </h1>
                <p class="text-side opacity-70 text-lg">Configure your watch e-shop dashboard preferences</p>
            </div>

            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12">
                
                <!-- Left Column -->
                <div class="space-y-12">
                    
                    <!-- General Settings Section -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-side to-purple-darkest rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">General Settings</h2>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Dark Mode</h3>
                                    <p class="text-side opacity-60 text-sm">Enable dark theme for better visibility</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Push Notifications</h3>
                                    <p class="text-side opacity-60 text-sm">Receive real-time updates and alerts</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Auto Save</h3>
                                    <p class="text-side opacity-60 text-sm">Automatically save changes every 5 minutes</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Security Settings Section -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-dark to-side rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">Security & Privacy</h2>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Two-Factor Authentication</h3>
                                    <p class="text-side opacity-60 text-sm">Add an extra layer of security to your account</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Session Timeout</h3>
                                    <p class="text-side opacity-60 text-sm">Automatically log out after inactivity</p>
                                </div>
                                <select class="bg-lav1 border border-lav2 rounded-lg px-4 py-2 text-side text-sm focus:outline-none focus:ring-2 focus:ring-peri/50 min-w-[120px]">
                                    <option>15 minutes</option>
                                    <option>30 minutes</option>
                                    <option>1 hour</option>
                                    <option>4 hours</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Login Notifications</h3>
                                    <p class="text-side opacity-60 text-sm">Get notified of new login attempts</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Performance Settings Section -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-peri to-purple-dark rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">Performance & Optimization</h2>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Cache System</h3>
                                    <p class="text-side opacity-60 text-sm">Enable caching for faster page loads</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Image Optimization</h3>
                                    <p class="text-side opacity-60 text-sm">Automatically compress and optimize images</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Lazy Loading</h3>
                                    <p class="text-side opacity-60 text-sm">Load content only when needed</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-12">
                    
                    <!-- Email Configuration Section -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-darkest to-side rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">Email Configuration</h2>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-side font-medium text-sm">SMTP Server</label>
                                <input type="text" value="smtp.gmail.com" class="w-full bg-lav1 border border-lav2 rounded-lg px-4 py-3 text-side text-sm focus:outline-none focus:ring-2 focus:ring-peri/50 transition-all duration-200">
                            </div>
                            <div class="space-y-2">
                                <label class="text-side font-medium text-sm">Port</label>
                                <input type="text" value="587" class="w-full bg-lav1 border border-lav2 rounded-lg px-4 py-3 text-side text-sm focus:outline-none focus:ring-2 focus:ring-peri/50 transition-all duration-200">
                            </div>
                            <div class="space-y-2">
                                <label class="text-side font-medium text-sm">Username</label>
                                <input type="email" value="admin@watchshop.com" class="w-full bg-lav1 border border-lav2 rounded-lg px-4 py-3 text-side text-sm focus:outline-none focus:ring-2 focus:ring-peri/50 transition-all duration-200">
                            </div>
                            <div class="space-y-2">
                                <label class="text-side font-medium text-sm">Password</label>
                                <input type="password" value="••••••••" class="w-full bg-lav1 border border-lav2 rounded-lg px-4 py-3 text-side text-sm focus:outline-none focus:ring-2 focus:ring-peri/50 transition-all duration-200">
                            </div>

                            <div class="flex items-center justify-between py-4 border-b border-lav2/30">
                                <div>
                                    <h3 class="text-lg font-medium text-side">Email Notifications</h3>
                                    <p class="text-side opacity-60 text-sm">Send notifications for important events</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-peri/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-side"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- System Status -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-side to-peri rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">System Status</h2>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-lav1/50 rounded-lg border border-lav2/30">
                                <div class="text-2xl font-bold text-green-600 mb-1">99.9%</div>
                                <div class="text-side opacity-70 text-sm">Uptime</div>
                            </div>
                            <div class="text-center p-4 bg-lav1/50 rounded-lg border border-lav2/30">
                                <div class="text-2xl font-bold text-blue-600 mb-1">2.3s</div>
                                <div class="text-side opacity-70 text-sm">Response Time</div>
                            </div>
                            <div class="text-center p-4 bg-lav1/50 rounded-lg border border-lav2/30">
                                <div class="text-2xl font-bold text-purple-600 mb-1">1.2GB</div>
                                <div class="text-side opacity-70 text-sm">Storage Used</div>
                            </div>
                            <div class="text-center p-4 bg-lav1/50 rounded-lg border border-lav2/30">
                                <div class="text-2xl font-bold text-side mb-1">Online</div>
                                <div class="text-green-600 text-sm">● Active</div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-dark to-purple-darkest rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-semibold text-side">Quick Actions</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <button class="w-full bg-gradient-to-r from-peri to-purple-dark text-white px-6 py-3 rounded-lg text-sm font-medium hover:from-purple-dark hover:to-purple-darkest transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                                Create System Backup
                            </button>
                            <button class="w-full bg-gradient-to-r from-lav2 to-peri text-side px-6 py-3 rounded-lg text-sm font-medium hover:from-peri hover:to-lav2 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                                Clear Cache
                            </button>
                            <button class="w-full bg-gradient-to-r from-purple-dark to-side text-white px-6 py-3 rounded-lg text-sm font-medium hover:from-side hover:to-purple-dark transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                                Test Email Connection
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-12 pt-8 border-t border-lav2/30">
                <button class="bg-white border-2 border-lav2 text-side px-8 py-3 rounded-xl text-sm font-semibold hover:bg-lav1 hover:border-peri transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                    Reset to Default
                </button>
                <button class="bg-gradient-to-r from-side to-purple-darkest text-white px-8 py-3 rounded-xl text-sm font-semibold hover:from-purple-darkest hover:to-side transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 border-0">
                    Save Changes
                </button>
            </div>
        </div>
    </x-slot>
</x-admin_navbar>