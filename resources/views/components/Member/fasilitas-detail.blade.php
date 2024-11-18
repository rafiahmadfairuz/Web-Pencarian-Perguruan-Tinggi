<section class="bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">

                <div class="bg-white dark:bg-gray-800 border border-gray-200 rounded-lg shadow-md p-8">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Biaya Pendaftaran : </h3>
                    <div class="flex  flex-col items-center mb-6">
                        <span class="text-3xl nowrap font-extrabold text-gray-900 dark:text-white">IDR  {{ number_format( $ptTerpilih->biaya, 0, ',', '.') }} </span>
                        <span class="text-gray-500 dark:text-gray-400 my-3">Mendapat Benefit Diantaranya</span>
                    </div>
                    <!-- Benefits List -->
                    <ul role="list" class="space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                            <span>Formulir Pendaftaran</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Perpustakaan
                                Modern</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                            <span>Almamater Dan Totebag</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Pusat Kegiatan
                                Mahasiswa</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Atribute Jurusan</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Laboratorium
                                Terpadu</span>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="">
                <div>
                    <i class="fa text-4xl fa-certificate w-10 h-10 mt-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Akreditasi {{ $ptTerpilih->akreditasi }}</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Perguruan Tinggi  {{ $ptTerpilih->nama }} memiliki akreditasi {{ $ptTerpilih->akreditasi }}, menjamin kualitas pendidikan yang terbaik.</p>
                </div>
                <div>
                    <i class="fa text-4xl fa-map-marker-alt w-10 h-10 mt-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Alamat</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">{{ $ptTerpilih->alamat }}</p>
                </div>
                <div>
                    <i class="fa text-4xl fa-calendar-alt w-10 h-10 mt-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500"></i>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Waktu Pendaftaran</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">Pendaftaran dibuka dari <b>{{ $ptTerpilih->waktu_pendaftaran_awal }}</b> hingga <b>{{ $ptTerpilih->waktu_pendaftaran_berakhir }}</b>.</p>
                </div>
            </div>

        </div>
    </div>
</section>
