<x-Admin.app>
    @section('title', 'List Mahasiswa Baru')
    <section class="py-4">
      <x-Admin.navbar></x-Admin.navbar>
        @include('Admin.layout.successModal')



        <div class="container-fluid flex justify-center p-4 sm:ml-64 gap-5">
            <form class="w-1/2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Berdasarkan Nama atau Email"  />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <form class="flex w-1/2 gap-2 items-center">
                <div class="flex items-center w-1/2 ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input id="bordered-radio-1" name="status" value="0"  type="radio"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ditolak</label>
                </div>
                <div class="flex items-center w-1/2 ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input  id="bordered-radio-2" name="status" value="1" type="radio"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diterima</label>
                </div>
                <div class="flex items-center w-1/2 ps-4 border border-gray-200 rounded dark:border-gray-700">
                    <input  id="bordered-radio-2" name="status" value="Pending" type="radio"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending</label>
                </div>
                <button type="submit" class="h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terapkan</button>
            </form>
        </div>


        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">List Mahasiswa Yang Mendaftar</h2>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Perguruan Tinggi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fakultas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jurusan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswa as $maha)
                                <tr class="bg-white border-b">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $maha->user->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $maha->user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $maha->perguruanTinggi->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $maha->fakultas->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $maha->jurusan->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="{{ $maha->status == 0 ? "bg-red-500" : ( $maha->status == 1 ? "bg-blue-500" : "bg-green-500") }} text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded "> {{ $maha->status == 0 ? "Ditolak" : ( $maha->status == 1 ? "Diterima" : "Pending" ) }}</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('detail.pendaftaran', $maha->id) }}" class=" text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ">Detail</a>
                                    </td>
                                @empty
                                   <td colspan="6" class="text-center py-5">Data Tidak Ditemukan</td>
                                </tr>
                                @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')


</x-Admin.app>
