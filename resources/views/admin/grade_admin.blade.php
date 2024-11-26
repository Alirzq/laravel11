{{-- <x-admin-layout>
    <x-slot:title>
        Grade
    </x-slot:title>

    <div class="container mx-auto p-8 bg-gray-50 rounded-lg shadow-lg mt-10">
        <!-- Tabel Data Grade -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border-0 rounded-2xl shadow-2xl">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white text-sm font-semibold">
                        <th class="py-5 px-8 text-left text-sm font-bold uppercase tracking-wider">ID</th>
                        <th class="py-5 px-8 text-left text-sm font-bold uppercase tracking-wider">Kelas</th>
                        <th class="py-5 px-8 text-left text-sm font-bold uppercase tracking-wider">Department</th>
                        <th class="py-5 px-8 text-left text-sm font-bold uppercase tracking-wider">Nama Siswa</th>
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


<x-admin-layout>
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
</x-admin-layout>
