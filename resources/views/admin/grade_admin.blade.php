<x-admin-layout>
    <x-slot name="title">
        Grade Management
    </x-slot>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-10 ms-[7rem]">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Data Grade</h1>
            <form action="{{ route('admin.grade.index') }}" method="GET" class="flex items-center">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="border rounded-lg p-2">
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg">Search</button>
            </form>
            <a href="{{ route('admin.grade.create') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition duration-300 ease-in-out">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Grade
            </a>
        </div>

        <!-- Tabel Data Grade -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 border rounded-lg shadow-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Kelas</th>
                        <th class="px-6 py-3">Department</th>
                        <th class="px-6 py-3">Nama Siswa</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($grades as $grade)
                        <tr class="hover:bg-gray-50 transition duration-300 ease-in-out">
                            <td class="px-6 py-4">{{ $grade['id'] }}</td>
                            <td class="px-6 py-4">{{ $grade->name }}</td>
                            <td class="px-6 py-4">{{ $grade->departement->name }}</td>
                            <td class="px-6 py-4">
                                @foreach ($grade->students as $student)
                                    <div class="mb-1 hover:text-blue-600 transition-colors duration-200">{{ $student->name }}</div>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <!-- Ganti tombol Edit menjadi Tambah -->
                                <a href="{{ route('admin.grade.edit', $grade    ->id) }}"
                                   class="px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300 ease-in-out">
                                   Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $grades->links() }} <!-- Menampilkan pagination -->
        </div>
    </div>
</x-admin-layout>


{{-- <x-admin-layout>
    <x-slot name="title">
        Grade Management
    </x-slot>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Data Grade</h1>
        </div>

        <!-- Table for Grade Data -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 border rounded-lg shadow-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Grade</th>
                        <th class="px-6 py-3">Department</th>
                        <th class="px-6 py-3">Students</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($grades as $grade)    
                        <tr class="hover:bg-blue-50 transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                            <td class="py-5 px-8 text-sm font-semibold text-gray-800">{{ $grade['id'] }}</td>
                            <td class="py-5 px-8 text-sm font-medium text-gray-700">{{ $grade->name }}</td>
                            <td class="py-5 px-8 text-sm font-medium text-gray-700">{{ $grade->departement->name }}</td>
                            <td class="py-5 px-8 text-sm font-medium text-gray-700">
                                @foreach ($grade->students as $student)
                                    <div class="mb-1 hover:text-blue-600 transition-colors duration-200">{{ $student->name }}</div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout> --}}
