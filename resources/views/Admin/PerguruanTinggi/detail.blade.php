<x-Admin.app>
    @section('title', 'Detail' . $perguruanTinggiTerpilih->nama)
    <section class="py-4 px-8 ">
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                    <ul
                        class="font-medium flex flex-col justify-between items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('view.pt') }}"
                                class="block py-2  text-gray-900 rounded md:bg-transparent md:p-0"
                                aria-current="page">Back to list</a>
                        </li>
                        <form action="{{ route('delete.pt', $perguruanTinggiTerpilih->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="border rounded-md px-5 py-2 bg-red-500 text-white ">Delete</button>
                        </form>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="px-6 py-3">
                                Fakultas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($fakultas as $fk)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class=" {{ $fk->status == 0 ? "" : "bg-red-100" }} text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{  $fk->status == 0 ? "$fk->nama" : "$fk->nama (Nonaktif)" }}</span>
                                </th>
                                <td class="px-6 py-4">
                                    @forelse ($fk->jurusan as $jurusan)
                                        {{ $jurusan->nama }} <b>|</b>
                                    @empty
                                        Jurusan Tidak Tersedia
                                    @endforelse
                                </td>
                                <td class="px-6 py-4 flex gap-2 justify-center">
                                    <a href="{{ route('edit.fakultas', $fk->id) }}" type="button"
                                        class="text-sm
                                        font-medium text-red-500">Edit</a>
                                    |
                                    <a href="{{ $fk->status == 0 ? route('disable.fk', $fk->id) : route('enable.fk', $fk->id) }}" type="button"
                                        class="text-sm
                                        font-medium text-red-500">{{ $fk->status == 0 ? "Nonaktifkan" : "Aktifkan" }}</a>
                                    |
                                    <form action="{{ route('hapus.fk', $fk->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                        class="text-sm
                                        font-medium text-red-500 hover:cursor-pointer">Hapus</button>
                                    </form>
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
</x-Admin.app>
