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
                            <a href="{{ route('view.pt') }}"
                                class="block py-2  text-gray-900 rounded md:bg-transparent md:p-0"
                                aria-current="page">Back to list</a>
                        </li>
                        <a href="{{ route('create.jurusan', $fakultasTerpilih->id) }}"
                            class="border rounded-md px-5 py-2 bg-blue-500 text-white">Tambah Jurusan</a>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                    <form method="POST" action="{{ route('store.update.fakultas', $fakultasTerpilih->id) }}" class="w-full mb-4 mr-8">
                        @csrf
                        <label for="namaFk" class="block mb-2 text-sm font-medium text-gray-900 ms-2">Nama Fakultas</label>
                        <div class="relative">
                            <input type="text" name="nama"
                                class=" block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 " value="{{ $fakultasTerpilih->nama }}" />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-500  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 hover:cursor-pointer">
                                Edit</button>
                        </div>
                        @error('nama')
                            @include('Admin.layout.form.errorMessage')
                        @enderror
                        @if(session()->has('nama'))
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 my-3">{{ session()->get('nama') }}</div>
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
                                    <span class=" {{ $jurusan->status == 0 ? "" : "bg-red-100" }} text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{  $jurusan->status == 0 ? "$jurusan->nama" : "$jurusan->nama (Nonaktif)" }}</span>
                                </td>
                                <td class="px-6 py-4 flex gap-2 justify-center">
                                    <a href="{{ route('edit.jurusan', ['fakultas' => $fakultasTerpilih->id, 'id' => $jurusan->id]) }}" type="button"
                                        class="text-sm
                                        font-medium text-red-500">Edit</a>
                                    |
                                    <a href="{{ $jurusan->status == 0 ? route('disable.jurusan', $jurusan->id) : route('enable.jurusan', $jurusan->id) }}" type="button"
                                        class="text-sm
                                        font-medium text-red-500">{{ $jurusan->status == 0 ? "Nonaktifkan" : "Aktifkan" }}</a>
                                    |
                                    <form action="{{ route('hapus.jurusan', $jurusan->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                        class="text-sm
                                        font-medium text-red-500 hover:cursor-pointer">Hapus</button>
                                    </form>

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
