<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smaller Watch (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center p-6">
    <!-- SCALE WRAPPER: adjust the scale to quickly decrease the whole watch size -->
    <div class="origin-center transform scale-75 sm:scale-75 md:scale-90 lg:scale-100">

        <!-- Premium Watch (unchanged inside) -->
        <div
            class="relative group rounded-3xl bg-gradient-to-br from-purple-200 via-indigo-300 to-indigo-800 p-4 shadow-2xl">
            <!-- Watch Case Outer Ring -->
            <div class="w-80 h-80 rounded-full bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 p-4 shadow-2xl">
                <!-- Watch Bezel -->
                <div
                    class="w-full h-full rounded-full bg-gradient-to-br from-gray-600 via-gray-500 to-gray-800 p-2 relative">
                    <!-- Bezel Markings -->
                    <div class="absolute inset-0 rounded-full">
                        <!-- 60 minute markers -->
                        <div class="absolute inset-0">
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-30"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-60"
                                style="transform-origin: 50% 152px;"></div>
                            <!-- <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-90" style="transform-origin: 50% 152px;"></div> -->
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-120"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-150"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-180"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-210"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-240"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-270"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-300"
                                style="transform-origin: 50% 152px;"></div>
                            <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-330"
                                style="transform-origin: 50% 152px;"></div>
                        </div>
                    </div>

                    <!-- Watch Face -->
                    <div
                        class="w-full h-full rounded-full bg-gradient-to-br from-white via-gray-50 to-gray-100 shadow-inner relative overflow-hidden">
                        <!-- Crystal Effect -->
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-br from-transparent via-white/20 to-transparent">
                        </div>
                        <div class="absolute top-8 left-8 w-16 h-16 rounded-full bg-white/30 blur-xl"></div>

                        <!-- Hour Markers -->
                        <div class="absolute inset-0">
                            <!-- 12 o'clock -->
                            <div class="absolute top-4 left-1/2 w-1 h-8 bg-gray-800 transform -translate-x-1/2 rounded">
                            </div>
                            <!-- 3 o'clock -->
                            <div
                                class="absolute right-4 top-1/2 w-8 h-1 bg-gray-800 transform -translate-y-1/2 rounded">
                            </div>
                            <!-- 6 o'clock -->
                            <div
                                class="absolute bottom-4 left-1/2 w-1 h-8 bg-gray-800 transform -translate-x-1/2 rounded">
                            </div>
                            <!-- 9 o'clock -->
                            <div class="absolute left-4 top-1/2 w-8 h-1 bg-gray-800 transform -translate-y-1/2 rounded">
                            </div>

                            <!-- Other hour markers -->
                            <div class="absolute top-8 right-12 w-0.5 h-6 bg-gray-600 transform rotate-30 rounded">
                            </div>
                            <div class="absolute top-12 right-8 w-0.5 h-6 bg-gray-600 transform rotate-60 rounded">
                            </div>
                            <div class="absolute bottom-12 right-8 w-0.5 h-6 bg-gray-600 transform -rotate-60 rounded">
                            </div>
                            <div class="absolute bottom-8 right-12 w-0.5 h-6 bg-gray-600 transform -rotate-30 rounded">
                            </div>
                            <div class="absolute bottom-8 left-12 w-0.5 h-6 bg-gray-600 transform rotate-30 rounded">
                            </div>
                            <div class="absolute bottom-12 left-8 w-0.5 h-6 bg-gray-600 transform rotate-60 rounded">
                            </div>
                            <div class="absolute top-12 left-8 w-0.5 h-6 bg-gray-600 transform -rotate-60 rounded">
                            </div>
                            <div class="absolute top-8 left-12 w-0.5 h-6 bg-gray-600 transform -rotate-30 rounded">
                            </div>
                        </div>

                        <!-- Watch Numbers -->
                        <div class="absolute top-6 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                            12</div>
                        <div
                            class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                            6</div>
                        <div
                            class="absolute right-6 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-800">
                            3</div>
                        <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-800">
                            9</div>

                        <!-- Watch Hands -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Hour Hand -->
                            <div id="hour-hand"
                                class="absolute w-16 h-1 bg-gradient-to-r from-gray-800 to-gray-600 rounded-full shadow-lg z-30"
                                style="left: 50%; top: 50%; transform-origin: 2px 50%;"></div>
                            <!-- Minute Hand -->
                            <div id="minute-hand"
                                class="absolute w-20 h-0.5 bg-gradient-to-r from-gray-700 to-gray-500 rounded-full shadow-lg z-20"
                                style="left: 50%; top: 50%; transform-origin: 2px 50%;"></div>
                            <!-- Second Hand -->
                            <div id="second-hand"
                                class="absolute w-24 h-0.5 bg-gradient-to-r from-red-600 to-red-400 rounded-full shadow-lg z-40"
                                style="left: 50%; top: 50%; transform-origin: 2px 50%;">
                                <div class="absolute -right-1 -top-0.5 w-2 h-2 bg-red-500 rounded-full"></div>
                            </div>
                            <!-- Center Dot -->
                            <div
                                class="w-3 h-3 bg-gradient-to-br from-gray-800 to-gray-600 rounded-full shadow-lg z-50 relative border border-gray-400">
                            </div>
                        </div>

                        <!-- Sub-dials (decorative) -->
                        <div
                            class="absolute top-16 left-16 w-8 h-8 rounded-full bg-white border border-gray-300 shadow-inner">
                            <div class="absolute inset-1 rounded-full bg-gray-50"></div>
                        </div>
                        <div
                            class="absolute top-16 right-16 w-8 h-8 rounded-full bg-white border border-gray-300 shadow-inner">
                            <div class="absolute inset-1 rounded-full bg-gray-50"></div>
                        </div>
                    </div>

                    <!-- Crown -->
                    <div
                        class="absolute right-0 top-1/2 w-3 h-6 bg-gradient-to-r from-gray-600 to-gray-400 transform -translate-y-1/2 translate-x-1 rounded-r shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Watch Band/Strap -->
            <div
                class="absolute -top-8 left-1/2 w-12 h-16 bg-gradient-to-b from-gray-700 to-gray-800 transform -translate-x-1/2 rounded-t-lg shadow-xl">
            </div>
            <div
                class="absolute -bottom-8 left-1/2 w-12 h-16 bg-gradient-to-t from-gray-700 to-gray-800 transform -translate-x-1/2 rounded-b-lg shadow-xl">
            </div>
        </div>

    </div>
</body>

</html>