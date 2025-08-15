<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Barangay Dashboard') }}
            </h2>
            <div class="text-sm text-gray-600">
                <span class="font-medium">{{ now()->format('F d, Y') }}</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Quick Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Residents -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-500">Total Residents</div>
                                <div class="text-2xl font-bold text-gray-900">1,456</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="text-sm text-green-600">
                                <span class="font-medium">+2.3%</span> from last month
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Officials -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-500">Active Officials</div>
                                <div class="text-2xl font-bold text-gray-900">12</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="text-sm text-gray-600">
                                <span class="font-medium">Including</span> Captain & Kagawads
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Documents -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-500">Pending Documents</div>
                                <div class="text-2xl font-bold text-gray-900">23</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="text-sm text-yellow-600">
                                <span class="font-medium">8 urgent</span> requests
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Incidents -->
                <div class="bg-white overflow-hidden shadow-lg rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-500">Recent Incidents</div>
                                <div class="text-2xl font-bold text-gray-900">7</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="text-sm text-red-600">
                                <span class="font-medium">2 unresolved</span> cases
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Recent Activities -->
                <div class="lg:col-span-2 bg-white shadow-lg rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Recent Activities</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-900">New resident registration: <span class="font-medium">Maria Santos</span></p>
                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-900">Barangay Clearance issued to <span class="font-medium">Juan Dela Cruz</span></p>
                                    <p class="text-xs text-gray-500">4 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-500 rounded-full mt-2"></div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-900">Incident report filed: <span class="font-medium">Noise complaint</span></p>
                                    <p class="text-xs text-gray-500">1 day ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-900">Community meeting scheduled for <span class="font-medium">August 20, 2025</span></p>
                                    <p class="text-xs text-gray-500">2 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-2 h-2 bg-red-500 rounded-full mt-2"></div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-900">Emergency response: <span class="font-medium">Medical assistance</span></p>
                                    <p class="text-xs text-gray-500">3 days ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                                View all activities →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white shadow-lg rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Quick Actions</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <a href="#" class="block w-full bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-4 transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z"></path>
                                </svg>
                                <span class="text-sm font-medium text-blue-800">Add New Resident</span>
                            </div>
                        </a>

                        <a href="#" class="block w-full bg-green-50 hover:bg-green-100 border border-green-200 rounded-lg p-4 transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium text-green-800">Issue Certificate</span>
                            </div>
                        </a>

                        <a href="#" class="block w-full bg-yellow-50 hover:bg-yellow-100 border border-yellow-200 rounded-lg p-4 transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium text-yellow-800">File Incident Report</span>
                            </div>
                        </a>

                        <a href="#" class="block w-full bg-purple-50 hover:bg-purple-100 border border-purple-200 rounded-lg p-4 transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium text-purple-800">Schedule Event</span>
                            </div>
                        </a>

                        <a href="#" class="block w-full bg-red-50 hover:bg-red-100 border border-red-200 rounded-lg p-4 transition-colors duration-200">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium text-red-800">Send Announcement</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                
                <!-- Upcoming Events -->
                <div class="bg-white shadow-lg rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Upcoming Events</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                        20<br><span class="text-xs">AUG</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Community Assembly</h4>
                                    <p class="text-xs text-gray-500">Barangay Hall - 2:00 PM</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                        25<br><span class="text-xs">AUG</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Health Check-up</h4>
                                    <p class="text-xs text-gray-500">Community Center - 8:00 AM</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center text-white font-bold text-sm">
                                        30<br><span class="text-xs">AUG</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Clean-up Drive</h4>
                                    <p class="text-xs text-gray-500">Throughout Barangay - 6:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Document Requests Status -->
                <div class="bg-white shadow-lg rounded-lg border border-gray-200">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800">Document Requests</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Barangay Clearance</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-900">15</span>
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">Ready</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Certificate of Indigency</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-900">8</span>
                                    <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded">Processing</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Business Permit</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-900">3</span>
                                    <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded">Pending</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Certificate of Residency</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-medium text-gray-900">12</span>
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">Ready</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex justify-between text-sm">
                                <span class="font-medium text-gray-900">Total Requests:</span>
                                <span class="font-bold text-gray-900">38</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>