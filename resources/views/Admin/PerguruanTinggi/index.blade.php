<x-Admin.app>
    @section('title', 'Daftar Universitas')
    <section class="py-4">
        @include('Admin.layout.successModal')
        <x-Admin.navbar></x-Admin.navbar>
        <div class="p-4 sm:ml-64">
            <a href="{{ route('create.pt.1') }}">
               <x-Admin.button>Create perguruan Tinggi</x-Admin.button>
            </a>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg shadow-lg bg-white">
                <h2 class="mb-4 text-xl font-bold text-gray-900">List Perguruan Tinggi</h2>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm  rtl:text-right text-center text-gray-500">
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
                                        <img src="{{ url('storage/' . $pt->icon)  }}" class="h-10 w-10 object-cover" alt="" srcset="">
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
                                    <td scope="col" class="px-6 py-3 flex justify-center gap-2 ">
                                        <a href="{{ route('update.pt', $pt->id) }}" type="button" class="
                                            font-medium border rounded p-2  hover:bg-green-500 hover:text-white duration-200 text-lg  text-green-500"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('admin.detail.pt', $pt->id) }} " type="button" class="
                                            font-medium border hover:bg-blue-500 hover:text-white duration-200 rounded p-2  text-lg  text-blue-500"><i class="fa-solid fa-eye"></i></a>
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




