<x-Admin.app>
    @section('title', 'Detail' . $fakultasTerpilih->nama)
    @include('Admin.layout.successModal')
    <section class="py-4 px-8 ">
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                    <ul
                        class="font-medium flex flex-col justify-between items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('admin.detail.pt', $pt) }}"
                                class="block py-2  text-gray-900 rounded md:bg-transparent md:p-0"
                                aria-current="page">Back to list</a>
                        </li>
                        <a href="{{ route('create.jurusan', ['pt' => $pt, 'id' => $fakultasTerpilih->id]) }}"
                            class="border rounded-md px-5 py-2 bg-blue-500 text-white">Tambah Jurusan</a>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                    <form method="POST" action="{{ route('store.update.fakultas', $fakultasTerpilih->id) }}"
                        class="w-full mb-4 mr-8">
                        @csrf
                        <label for="namaFk" class="block mb-2 text-sm font-medium text-gray-900 ms-2">Nama
                            Fakultas</label>
                        <div class="relative">
                            <input type="text" name="nama"
                                class=" block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 "
                                value="{{ $fakultasTerpilih->nama }}" />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-500  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 hover:cursor-pointer">
                                Edit</button>
                        </div>
                        @error('nama')
                            @include('Admin.layout.form.errorMessage')
                        @enderror
                        @if (session()->has('nama'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 my-3">
                                {{ session()->get('nama') }}</div>
                        @endif
                    </form>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        @forelse ($fakultasTerpilih->jurusan as $jurusan)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                <td class="px-6 py-4 ">
                                    <span
                                        class=" {{ $jurusan->status == 0 ? '' : 'bg-red-100' }} text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $jurusan->status == 0 ? "$jurusan->nama" : "$jurusan->nama (Nonaktif)" }}</span>
                                </td>
                                <td class="px-6 py-4 flex gap-5 justify-center">
                                    <a href="{{ route('edit.jurusan', ['pt' => $pt, 'fakultas' => $fakultasTerpilih->id, 'id' => $jurusan->id]) }}"
                                        type="button"
                                        class="text-xl
                                        font-medium text-green-500"><i
                                            class="fa-solid fa-pen-to-square"></i></a>

                                    <a href="{{ $jurusan->status == 0 ? route('disable.jurusan', $jurusan->id) : route('enable.jurusan', $jurusan->id) }}"
                                        type="button"
                                        class="text-xl
                                        font-medium text-gray-500"><i
                                            class="fa-solid {{ $jurusan->status == 0 ? 'fa-unlock' : 'fa-lock' }}"></i></a>

                                    <button data-modal-target="popup-modal-delete-fk-{{ $jurusan->id }}"
                                        data-modal-toggle="popup-modal-delete-fk-{{ $jurusan->id }}"
                                        class="font-medium text-xl text-red-500 hover:cursor-pointer" type="button">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <div id="popup-modal-delete-fk-{{ $jurusan->id }}" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal-delete-fk-{{ $jurusan->id }}">
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
                                                        Kamu yakin menghapus Jurusan {{ $jurusan->nama }}?
                                                    </h3>
                                                    <div class="flex justify-center">
                                                        <form action="{{ route('hapus.jurusan', $jurusan->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                data-modal-hide="popup-modal-delete-fk-{{ $jurusan->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya, Saya Yakin
                                                            </button>
                                                        </form>
                                                        <button
                                                            data-modal-hide="popup-modal-delete-fk-{{ $jurusan->id }}"
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
                            Jurusan Tidak Tersedia
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')
</x-Admin.app>
