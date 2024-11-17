<section class="bg-white dark:bg-gray-900 min-h-[70vh] flex items-center">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                {{ "$ptTerpilih->nama : $ptTerpilih->slogan"  }}
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                {{ $ptTerpilih->deskripsi }}
            </p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('daftar', $ptTerpilih->id) }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-white bg-blue-600 rounded-lg sm:w-auto hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ 'storage/'.$ptTerpilih->icon }}" >
        </div>
    </div>

</section>
