<header class="header ">
    <nav>
        <a href="#" class="logo">KampusMalang.</a>
        <form class="w-1/2">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" name="cari" id="default-search"
                    class="cpt block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500   "
                    placeholder="Cari Perguruan Tinggi" />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-rose-950  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <div class="auth">
            @auth
                <div class="flex items-center gap-10 ">

                    <div class="relative inline-block">
                        <div
                            class="absolute top-0 right-0 w-6 h-6 flex items-center justify-center text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -mt-2 -mr-2 dark:border-gray-900">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </div>
                        <i class="notif fa-solid fa-bell text-3xl hover:cursor-pointer" data-dropdown-toggle="notifDropdown"
                            data-dropdown-placement="bottom-end"></i>

                        <div id="notifDropdown"
                            class="z-10 shadow-lg hidden bg-white divide-y divide-gray-100 rounded-lg border w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div class="font-medium truncate">Notifikasi</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                @forelse (auth()->user()->unreadNotifications as $notif)
                                    <li>
                                        <a href="{{ route('detail.pendaftaran', ['id' => $notif->data['url'], 'notif' => $notif->id]) }}"
                                            class="block  text-black dark:hover:bg-gray-600 dark:hover:text-white">
                                            <span class="  {{ $notif->data['judul'] == "Anda Diterima" ? "text-blue-500" : "text-red-500" }}">{{ $notif->data['judul'] }}</span><br>
                                            <span class=" font-light " style="font-size: 15px">{{  Str::limit($notif->data['deskripsi'], 10, '...') }}</span>
                                        </a>
                                    </li><hr>


                                @empty
                                <p style="font-size: 10px" class="p-5 text-center">Semua Notifikasi Sudah Dibaca</p>
                                @endforelse
                                <hr>
                            </ul>
                        </div>
                    </div>




                    <a href="{{ route('profile', Auth::user()->id) }}">
                        <img src="{{ url('storage/image/no.jpg') }}"
                            class="border-2 border-black image_profile rounded-full" alt="Profile">
                    </a>

                </div>

            @endauth
            @guest
                <a href="{{ route('login') }}" class="btn login">Login</a>
                <a href="{{ route('register') }}" class="btn register">Register</a>
            @endguest
        </div>
    </nav>
</header>
