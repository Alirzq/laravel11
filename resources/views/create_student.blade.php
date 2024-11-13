<x-layout>
    <x-slot:title>Tambah Data Siswa</x-slot:title>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">

        <!-- Judul Form -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Data Siswa</h2>

        <!-- Form -->
        <form class="space-y-4">
            <!-- Input Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama siswa" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>

            <!-- Input Kelas -->
            <div>
                <label for="grade" class="block text-sm font-medium text-gray-700">Kelas:</label>
                <input type="text" id="grade" name="grade" placeholder="Masukkan kelas siswa" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>

            <!-- Input Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email siswa" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>

            <!-- Input Alamat -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Alamat:</label>
                <input type="text" id="address" name="address" placeholder="Masukkan alamat siswa" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>

</x-layout>
