<x-Member.app>
    @include('Admin.layout.successModal')
    @section('title', $ptTerpilih->nama)
    <x-Member.navbar-detail></x-Member.navbar-detail>
    @include('components.Member.hero-detail')
    <div class="container-fluid flex justify-center">
        <div class="container py-4">
            <ol
                class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                <li
                    class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span
                        class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500 text-nowrap">
                       {{ $ptTerpilih->telp }}
                    </span>
                </li>
                <li
                    class="flex md:w-full text-blue-600 items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span
                        class="flex  items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                       {{ $ptTerpilih->web ?? "Noweb" }}
                    </span>
                </li>
                <li class="flex text-blue-600 items-center">

                   {{ $ptTerpilih->email }}
                </li>
            </ol>
        </div>
    </div>

    @include('components.Member.fasilitas-detail')
    @include('components.Member.pertanyaan-detail')
    @include('components.Member.gas-daftar')
    <x-Member.footer></x-Member.footer>
    @include('Admin.layout.successModalScript')

</x-Member.app>
