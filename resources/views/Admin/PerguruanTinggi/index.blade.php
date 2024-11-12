<x-Admin.app>
    @section('title', 'Daftar Universitas')
    <section class="py-4">
        <x-Admin.navbar></x-Admin.navbar>
        <div class="p-4 sm:ml-64">
            <a href="{{ route('create.pt') }}">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Create Universitas
                    </span>
                </button>
            </a>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg shadow-lg bg-white">
                <h2 class="mb-4 text-xl font-bold text-gray-900">List Perguruan Tinggi</h2>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Icon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Akreditasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perguruanTinggi as $pt)
                                <tr>
                                    <td scope="col" class="px-6 py-4">
                                        <img src="{{ url('storage/image/' . $pt->foto)  }}" class="h-10 w-10 object-cover" alt="" srcset="">
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $pt->nama }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $pt->kategori }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $pt->email }}
                                    </td>
                                    <td scope="col" class="px-6 py-4 ">
                                        {{ $pt->akreditasi }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $pt->alamat }}
                                    </td>
                                    <td scope="col" class="px-6 py-3">
                                        <a href="{{ route('update.pt' , $pt->id) }}" type="button" class="text-sm
                                            font-medium text-red-500">Edit</a> |
                                        <a href=" " type="button" class="text-sm
                                            font-medium text-red-500">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')
</x-Admin.app>




