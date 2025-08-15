<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discover Loog') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Loog - Basey, Samar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden border border-gray-200">
            <!-- Hero Section with Image -->
            <div class="relative h-80 bg-black">
                <div class="absolute inset-0 bg-gray-900 bg-opacity-20"></div>
                <div class="relative h-full flex items-center justify-center p-6">
                    <div class="w-full max-w-6xl">
                        <!-- Horizontal row of images with decorative frames -->
                        <div class="flex justify-center items-center space-x-4">
                            <!-- Image frame 1 -->
                            <div class="relative">
                                <div class="w-48 h-32 border-4 border-white rounded-lg transform rotate-1 bg-black"></div>
                                <img src="images/logo/loog7.jpg" alt="Loog Barangay" class="absolute inset-2 w-44 h-28 object-cover rounded">
                            </div>
                            
                            <!-- Image frame 2 -->
                            <div class="relative">
                                <div class="w-48 h-32 border-4 border-white rounded-lg transform -rotate-2 bg-black"></div>
                                <img src="images/logo/loog2.jpg" alt="Loog Community View" class="absolute inset-2 w-44 h-28 object-cover rounded">
                            </div>
                            
                            <!-- Image frame 3 (featured/center) -->
                            <div class="relative z-10">
                                <div class="w-56 h-36 border-4 border-white rounded-lg bg-white shadow-2xl">
                                    <img src="images/logo/loog.jpg" alt="Loog Landscape" class="w-full h-full object-cover rounded p-1">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-red-600 text-white px-3 py-1 rounded text-sm font-bold">
                                    BRGY LOOG
                                </div>
                            </div>
                            
                            <!-- Image frame 4 -->
                            <div class="relative">
                                <div class="w-48 h-32 border-4 border-white rounded-lg transform rotate-1 bg-black"></div>
                                <img src="images/logo/loog3.jpg" alt="Loog Cultural Site" class="absolute inset-2 w-44 h-28 object-cover rounded">
                            </div>
                            
                            <!-- Image frame 5 -->
                            <div class="relative">
                                <div class="w-48 h-32 border-4 border-white rounded-lg transform -rotate-1 bg-black"></div>
                                <img src="images/logo/loog4.jpg" alt="Loog Local Scene" class="absolute inset-2 w-44 h-28 object-cover rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-8 lg:p-12">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Main Description -->
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-semibold text-black mb-4">About Loog</h2>
                            <p class="text-gray-700 text-lg leading-relaxed">
                                Loog is a barangay in the municipality of Basey, in the province of Samar. 
                                This vibrant community represents an important part of Basey's cultural and 
                                social landscape.
                            </p>
                        </div>

                        <!-- Location Info -->
                        <div class="bg-black rounded-lg p-6 border border-gray-800">
                            <h3 class="text-lg font-semibold text-white mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                Location Details
                            </h3>
                            <div class="space-y-2 text-gray-300">
                                <p><span class="font-medium text-white">Municipality:</span> Basey</p>
                                <p><span class="font-medium text-white">Province:</span> Samar</p>
                                <p><span class="font-medium text-white">Region:</span> Eastern Visayas</p>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Card -->
                    <div class="bg-black rounded-xl p-8 border border-gray-800">
                        <h3 class="text-xl font-semibold text-white mb-6 text-center">Population Statistics</h3>
                        
                        <!-- Main Population Figure -->
                        <div class="text-center mb-8">
                            <div class="text-5xl font-bold text-white mb-2">1,456</div>
                            <p class="text-gray-300">Total Population (2020 Census)</p>
                        </div>

                        <!-- Percentage Breakdown -->
                        <div class="bg-white rounded-lg p-6 shadow-lg">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-black font-medium">Share of Basey Population</span>
                                <span class="text-2xl font-bold text-black">2.57%</span>
                            </div>
                            
                            <!-- Visual Progress Bar -->
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-black h-3 rounded-full" style="width: 2.57%"></div>
                            </div>
                            
                            <p class="text-sm text-gray-600 mt-2">
                                Loog represents a significant portion of Basey's community
                            </p>
                        </div>

                        <!-- Data Source -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-300">
                                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                Data from 2020 Philippine Census
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="mt-12 text-center">
                    <div class="bg-black rounded-lg p-8 text-white border border-gray-800">
                        <h3 class="text-2xl font-semibold mb-3">Explore More of Samar</h3>
                        <p class="text-gray-300 mb-6">
                            Discover the rich culture and beautiful communities throughout Samar province
                        </p>
                        <button class="bg-white text-black font-semibold px-8 py-3 rounded-lg hover:bg-gray-200 transition-colors duration-200 shadow-lg">
                            Learn More About Basey
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-black py-8 mt-16 border-t border-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-700">
                © 2024 Discover Samar. Celebrating the communities of Eastern Visayas.
            </p>
        </div>
    </footer>
</body>
</html>
</x-app-layout>