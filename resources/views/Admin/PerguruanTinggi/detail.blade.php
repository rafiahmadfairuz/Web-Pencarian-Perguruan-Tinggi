<x-Admin.app>
    @section('title', 'Detail' . $perguruanTinggiTerpilih->nama)
    @include('Admin.layout.successModal')
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
                        <button data-modal-target="popup-modal-delete-pt" data-modal-toggle="popup-modal-delete-pt"
                            class="block text-white bg-red-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Delete
                        </button>
                        <div id="popup-modal-delete-pt" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="popup-modal-delete-pt">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center ">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu Yakin
                                            Mneghapus Perguruan Tinggi {{ $perguruanTinggiTerpilih->nama }}</h3>
                                        <div class="flex justify-center">

                                            <form action="{{ route('delete.pt', $perguruanTinggiTerpilih->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button data-modal-hide="popup-modal-delete-pt" type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Ya, Saya Yakin
                                                </button>
                                            </form>
                                            <button data-modal-hide="popup-modal-delete-pt" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <span
                                        class="{{ $fk->status == 0 ? '' : 'bg-red-100' }} text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                        {{ $fk->status == 0 ? "$fk->nama" : "$fk->nama (Nonaktif)" }}
                                    </span>
                                </th>
                                <td class="px-6 py-4">
                                    @forelse ($fk->jurusan as $jurusan)
                                        {{ $jurusan->nama }} <b>|</b>
                                    @empty
                                        Jurusan Tidak Tersedia
                                    @endforelse
                                </td>
                                <td class="px-6 py-4 flex gap-2 items-center justify-center">
                                    <a href="{{ route('edit.fakultas', ['pt' => $perguruanTinggiTerpilih->id, 'id' => $fk->id]) }}"
                                        class="font-medium text-xl text-green-500">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    |
                                    <a href="{{ $fk->status == 0 ? route('disable.fk', $fk->id) : route('enable.fk', $fk->id) }}"
                                        class="font-medium text-xl text-gray-500">
                                        <i class="fa-solid {{ $fk->status == 0 ? 'fa-unlock' : 'fa-lock' }}"></i>
                                    </a>
                                    |
                                    <button data-modal-target="popup-modal-delete-fk-{{ $fk->id }}"
                                        data-modal-toggle="popup-modal-delete-fk-{{ $fk->id }}"
                                        class="font-medium text-xl text-red-500 hover:cursor-pointer" type="button">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <div id="popup-modal-delete-fk-{{ $fk->id }}" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal-delete-fk-{{ $fk->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                        Kamu yakin menghapus Fakultas {{ $fk->nama }}?
                                                    </h3>
                                                    <div class="flex justify-center">
                                                        <form action="{{ route('hapus.fk', $fk->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                data-modal-hide="popup-modal-delete-fk-{{ $fk->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya, Saya Yakin
                                                            </button>
                                                        </form>
                                                        <button
                                                            data-modal-hide="popup-modal-delete-fk-{{ $fk->id }}"
                                                            type="button"
                                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                            Batal
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="2" class="text-center py-5">Belum Ada Fakultas Maupun Jurusan</td>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')
</x-Admin.app>
