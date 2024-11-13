<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-8">
        <!-- Header Section with Button -->
        <div class="flex justify-between items-center mb-8">
            <a href="#"
                class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i> Tambah Departemen
            </a>
        </div>

        <!-- Tabel Data Departemen -->
        <div class="overflow-hidden rounded-lg shadow-xl border border-gray-200 bg-gray-50">
            <table class="min-w-full table-auto">
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
                    <tr class="text-left text-sm font-semibold uppercase tracking-wide">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nama</th>
                        <th class="px-6 py-4">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($departments as $department)
                        <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $department->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $department->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $department->desc }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
