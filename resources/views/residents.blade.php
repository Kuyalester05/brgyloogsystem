<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Residents') }}
            </h2>
            <div class="text-sm text-gray-600">
                <span class="font-medium">Total: 1,456 Residents</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Top Action Bar -->
            <div class="bg-white shadow-lg rounded-lg border border-gray-200 mb-6">
                <div class="p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                        
                        <!-- Search Bar -->
                        <div class="flex-1 max-w-lg">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input 
                                    type="text" 
                                    id="searchInput"
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 sm:text-sm" 
                                    placeholder="Search residents by name, ID, or address..."
                                    onkeyup="searchResidents()"
                                >
                            </div>
                        </div>

                        <!-- Filter and Add Button -->
                        <div class="flex items-center space-x-3">
                            <select id="statusFilter" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-gray-500 focus:border-gray-500" onchange="filterByStatus()">
                                <option value="all">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            
                            <button 
                                onclick="openAddModal()" 
                                class="bg-black text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200"
                            >
                                + Add Resident
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Residents Table -->
            <div class="bg-white shadow-lg rounded-lg border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200" id="residentsTable">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="residentsTableBody" class="bg-white divide-y divide-gray-200">
                            <!-- Sample Data -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RES-001</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Juan Dela Cruz</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">35</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Male</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">123 Main St., Loog</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <button onclick="editResident('RES-001')" class="text-gray-600 hover:text-black">Edit</button>
                                    <button onclick="deleteResident('RES-001')" class="text-gray-600 hover:text-black">Delete</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RES-002</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Maria Santos</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">28</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Female</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">456 Oak Ave., Loog</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <button onclick="editResident('RES-002')" class="text-gray-600 hover:text-black">Edit</button>
                                    <button onclick="deleteResident('RES-002')" class="text-gray-600 hover:text-black">Delete</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RES-003</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Pedro Rodriguez</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">42</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Male</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">789 Pine St., Loog</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded bg-gray-300 text-gray-700">Inactive</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <button onclick="editResident('RES-003')" class="text-gray-600 hover:text-black">Edit</button>
                                    <button onclick="deleteResident('RES-003')" class="text-gray-600 hover:text-black">Delete</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RES-004</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Ana Garcia</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">31</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Female</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">321 Elm St., Loog</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <button onclick="editResident('RES-004')" class="text-gray-600 hover:text-black">Edit</button>
                                    <button onclick="deleteResident('RES-004')" class="text-gray-600 hover:text-black">Delete</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RES-005</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Carlos Mendoza</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">55</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Male</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">654 Maple Ave., Loog</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                    <button onclick="editResident('RES-005')" class="text-gray-600 hover:text-black">Edit</button>
                                    <button onclick="deleteResident('RES-005')" class="text-gray-600 hover:text-black">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="bg-white px-6 py-3 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">1,456</span> residents
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                            <button class="px-3 py-1 text-sm bg-black text-white rounded">1</button>
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">2</button>
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">3</button>
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div id="residentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">Add New Resident</h3>
                </div>
                <form id="residentForm" class="p-6 space-y-4">
                    <input type="hidden" id="residentId">
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" id="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" id="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                            <input type="number" id="age" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                            <select id="gender" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <textarea id="address" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required></textarea>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </form>
                
                <div class="px-6 py-4 border-t border-gray-200 flex justify-end space-x-3">
                    <button onclick="closeModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                        Cancel
                    </button>
                    <button onclick="saveResident()" class="px-4 py-2 text-sm font-medium text-white bg-black rounded-lg hover:bg-gray-800">
                        Save Resident
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="bg-white rounded-lg shadow-xl max-w-sm w-full">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Confirm Delete</h3>
                    <p class="text-sm text-gray-600 mb-6">Are you sure you want to delete this resident? This action cannot be undone.</p>
                    <div class="flex justify-end space-x-3">
                        <button onclick="closeDeleteModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                            Cancel
                        </button>
                        <button onclick="confirmDelete()" class="px-4 py-2 text-sm font-medium text-white bg-black rounded-lg hover:bg-gray-800">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentEditId = null;
        let deleteId = null;

        // Search functionality
        function searchResidents() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const tableBody = document.getElementById('residentsTableBody');
            const rows = tableBody.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let found = false;

                for (let j = 0; j < cells.length - 1; j++) { // Exclude actions column
                    if (cells[j].textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                        break;
                    }
                }

                row.style.display = found ? '' : 'none';
            }
        }

        // Filter by status
        function filterByStatus() {
            const filterValue = document.getElementById('statusFilter').value;
            const tableBody = document.getElementById('residentsTableBody');
            const rows = tableBody.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const statusCell = row.getElementsByTagName('td')[5]; // Status column
                const statusText = statusCell.textContent.toLowerCase();

                if (filterValue === 'all' || statusText.includes(filterValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        }

        // Modal functions
        function openAddModal() {
            document.getElementById('modalTitle').textContent = 'Add New Resident';
            document.getElementById('residentForm').reset();
            document.getElementById('residentId').value = '';
            currentEditId = null;
            document.getElementById('residentModal').classList.remove('hidden');
        }

        function editResident(id) {
            // In a real application, you would fetch the resident data from the server
            document.getElementById('modalTitle').textContent = 'Edit Resident';
            currentEditId = id;
            
            // Sample data population (in real app, fetch from server)
            if (id === 'RES-001') {
                document.getElementById('firstName').value = 'Juan';
                document.getElementById('lastName').value = 'Dela Cruz';
                document.getElementById('age').value = '35';
                document.getElementById('gender').value = 'Male';
                document.getElementById('address').value = '123 Main St., Loog';
                document.getElementById('status').value = 'Active';
            }
            
            document.getElementById('residentModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('residentModal').classList.add('hidden');
        }

        function saveResident() {
            // In a real application, you would send this data to the server
            const formData = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                age: document.getElementById('age').value,
                gender: document.getElementById('gender').value,
                address: document.getElementById('address').value,
                status: document.getElementById('status').value
            };

            // Simple validation
            if (!formData.firstName || !formData.lastName || !formData.age || !formData.gender || !formData.address) {
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate save operation
            alert(currentEditId ? 'Resident updated successfully!' : 'Resident added successfully!');
            closeModal();
            
            // In a real app, you would refresh the table data here
        }

        function deleteResident(id) {
            deleteId = id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            deleteId = null;
        }

        function confirmDelete() {
            // In a real application, you would send the delete request to the server
            alert('Resident deleted successfully!');
            closeDeleteModal();
            
            // In a real app, you would remove the row from the table or refresh the data
        }
    </script>
</x-app-layout>