<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-8">
        <!-- Header Section with Button -->

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
