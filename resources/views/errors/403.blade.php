<x-Member.app>
    @section('title', '403')

    <div class="flex items-center justify-center min-h-screen bg-gray-900 text-white">
        <div class="text-center">
            <h1 class="text-6xl font-extrabold text-red-600 animate-pulse">403</h1>
            <p class="mt-4 text-xl text-gray-300">Akses Ditolak</p>
            <p class="mt-2 text-gray-500">Maaf, {{ session('message') }}.</p>
            <div class="mt-6">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                    class="px-6 py-3 bg-red-600 text-white font-semibold rounded-lg shadow-lg hover:bg-red-500 focus:ring focus:ring-red-400 transition">
                    Logout
                </button>
                </form>

            </div>
        </div>
    </div>

</x-Member.app>
