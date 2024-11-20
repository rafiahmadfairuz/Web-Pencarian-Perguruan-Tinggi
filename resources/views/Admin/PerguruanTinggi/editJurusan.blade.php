<x-Admin.app>
    @section('title', 'Edit Jurusan ' . $jurusan->nama)
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
                    </ul>
                </nav>
            </div>
        </div>

        Fakultas : {{ $fakultas }}
        Jurusan : {{ $jurusan->nama }}
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                    <form method="POST" action="{{ route('store.update.jurusan',  ['fakultas' => $fakultas, 'id' => $jurusan->id]) }}" class="w-full mb-4 mr-8">
                        @csrf
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ms-2">Nama Jurusan</label>
                        <div class="relative">
                            <input type="text" name="nama" id="nama" value="{{ $jurusan->nama }}"
                                class=" block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500 " />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-500  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 hover:cursor-pointer">
                                Simpan</button>
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

    </section>
</x-Admin.app>
