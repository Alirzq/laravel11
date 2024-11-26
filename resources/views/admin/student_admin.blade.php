<x-admin-layout>
    <x-slot name="title">
        Students Management
    </x-slot>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Data Siswa</h1>
            <a href="{{ route('student.create') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h-4m4 4h-4m4-8h-4m-2 2h-2m2-2h-2m-2 0H6m0 2h2m0 2H6m0 2h2m-2-8h2m2 2h2m0-4h2m0 8h2m2 2h2m-2 0h2m0 2h-2m2-10h2M6 16v4m2 0h-2m0-4H4m0-4h2m-2 0h2" />
                </svg>
                Tambah Data
            </a>
        </div>

        <!-- Table for Student Data -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 border rounded-lg shadow-md">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Grade</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Address</th>
                        <th class="px-6 py-3">Departement</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($students as $student)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $student->id }}</td>
                            <td class="px-6 py-4">{{ $student->name }}</td>
                            <td class="px-6 py-4">{{ $student->grade->name }}</td>
                            <td class="px-6 py-4">{{ $student->email }}</td>
                            <td class="px-6 py-4">{{ $student->address }}</td>
                            <td class="px-6 py-4">{{ $student->departement->name }}</td>
                            <td class="px-6 py-4">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
