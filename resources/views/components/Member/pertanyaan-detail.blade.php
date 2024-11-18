<section class="bg-white dark:bg-gray-900 py-4">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
        <h2
            class="my-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
            Daftar Fakultas Dan Jurusan Yang Tersedia</h2>
        <div class="container   mx-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="px-6 py-3">
                                Fakultas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                            @forelse ($fakultas as $fk)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $fk->nama }}
                            </th>
                            <td class="px-6 py-4">
                                 @forelse ($fk->jurusan as $jurusan)
                                    {{ $jurusan->nama }} <b>|</b>
                                 @empty
                                    Jurusan Tidak Tersedia
                                 @endforelse
                            </td>
                            @empty
                            <td colspan="2" class="text-center py-5">Belum Ada Fakultas Maupun Jurusan</td>
                            @endforelse
                        </tr>



                    </tbody>
                </table>

        </div>
    </div>
</section>
