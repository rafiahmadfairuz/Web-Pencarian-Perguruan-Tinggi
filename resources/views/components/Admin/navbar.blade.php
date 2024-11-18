<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-56 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full rounded-e-3xl shadow-2xl flex flex-col justify-between px-3 py-4 overflow-y-auto bg-gray-50 border-r border-emerald-200 border">
        <ul class="space-y-2 font-medium">
            <h1 class="font-bold text-2xl border-b p-2">
                <span class="font-extralight">kampus</span><span class="text-blue-500">Malang.</span>
            </h1>
            <li>
                <x-Admin.link href="{{ route('admin.index') }}">
                    <i class="fas fa-tachometer-alt"></i><span class="ms-3">Dashboard</span>
                </x-Admin.link>
            </li>
            <li>
                <x-Admin.link href="{{ route('view.pt') }}">
                    <i class="fas fa-university"></i><span class="ms-3">Perguruan Tinggi</span>
                </x-Admin.link>
            </li>
            {{-- <li>
                <x-Admin.link href="{{ route('view.fakultas') }}">
                    <i class="fas fa-building"></i><span class="ms-3">Fakultas</span>
                </x-Admin.link>
            </li>
            <li>
                <x-Admin.link href="{{ route('view.jurusan') }}">
                    <i class="fas fa-graduation-cap"></i><span class="ms-3">Jurusan</span>
                </x-Admin.link>
            </li> --}}
            <li>
                <x-Admin.link href="{{ route('view.member') }}">
                    <i class="fas fa-users"></i><span class="ms-3">Member</span>
                </x-Admin.link>
            </li>
            <li>
                <x-Admin.link href="{{ route('view.mahasiswa') }}">
                    <i class="fas fa-user-graduate"></i><span class="ms-3">Mahasiswa Baru</span>
                </x-Admin.link>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="flex items-center align-bottom text-red-500 p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fas fa-sign-out-alt"></i><span class="ms-3">Logout</span>
            </button>
        </form>
    </div>
</aside>
