<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">

        <!-- Header Section with Title and Add Button -->
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Data Siswa</h1>
            <a href="{{ route('student.create') }}" class="flex items-center px-5 py-2 bg-gradient-to-r from-green-500 to-blue-500 text-white rounded-lg hover:from-green-600 hover:to-blue-600 transition duration-300 shadow-md">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h-4m4 4h-4m4-8h-4m-2 2h-2m2-2h-2m-2 0H6m0 2h2m0 2H6m0 2h2m-2-8h2m2 2h2m0-4h2m0 8h2m2 2h2m-2 0h2m0 2h-2m2-10h2M6 16v4m2 0h-2m0-4H4m0-4h2m-2 0h2" />
                </svg>
                Tambah Data
            </a>
        </div>

        <!-- Table for Student Data -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white text-sm font-semibold">
                        <th class="py-4 px-6 text-left">ID</th>
                        <th class="py-4 px-6 text-left">Name</th>
                        <th class="py-4 px-6 text-left">Grade</th>
                        <th class="py-4 px-6 text-left">Email</th>
                        <th class="py-4 px-6 text-left">Addres</th>
                        <th class="py-4 px-6 text-left">Departement</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->id }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->name }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->grade->name }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->email }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->address }}</td>
                            <td class="py-4 px-6 border-b border-gray-200 text-sm">{{ $student->departement->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
