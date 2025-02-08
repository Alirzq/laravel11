<x-admin-layout>
    <x-slot name="title">
        Students Management
    </x-slot>

    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-10 ms-[7rem]">
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Data Siswa</h1>
            <form action="{{ route('admin.student.index') }}" method="GET" class="flex items-center">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="border rounded-lg p-2">
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg">Search</button>
            </form>
            <a href="{{ route('admin.student.create') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition duration-300 ease-in-out">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
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
                        <tr class="hover:bg-gray-50 transition duration-300 ease-in-out">
                            <td class="px-6 py-4">{{ $student->id }}</td>
                            <td class="px-6 py-4">{{ $student->name }}</td>
                            <td class="px-6 py-4">{{ $student->grade->name }}</td>
                            <td class="px-6 py-4">{{ $student->email }}</td>
                            <td class="px-6 py-4">{{ $student->address }}</td>
                            <td class="px-6 py-4">{{ $student->departement->name }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('admin.student.edit', $student->id) }}" class="px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300 ease-in-out">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 text-sm text-white bg-red-500 hover:bg-red-600 rounded-lg transition duration-300 ease-in-out" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $students->links() }}
        </div>
    </div>
</x-admin-layout>
