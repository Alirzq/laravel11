<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-24">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-extrabold mb-4">Hubungi Kami</h2>
            <p class="text-lg text-white mb-8">Kami selalu siap mendengarkan dan membantu. Isi formulir di bawah ini untuk menghubungi tim kami.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="bg-white shadow-xl rounded-xl p-8 md:p-14 lg:w-2/3 mx-auto transition hover:shadow-2xl">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        </div>
                    </div>
                    <div class="mt-8">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"></textarea>
                    </div>
                    <div class="mt-8 text-center">
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold px-6 py-3 rounded-lg shadow-lg hover:from-blue-700 hover:to-blue-600 transition-all duration-200 transform hover:-translate-y-1">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Toko Online. Semua Hak Dilindungi.</p>
            <p class="text-xs mt-2">Developed with by Fakhry Alifahrizq</p>
        </div>
    </footer>
</x-layout>
