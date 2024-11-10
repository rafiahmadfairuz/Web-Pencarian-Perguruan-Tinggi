<x-Member.app>
    <x-Member.navbar-detail></x-Member.navbar-detail>
    <div class="profile">
        <div class="detail_profile">
            <div class="kiri">
                <img src="{{url('storage/image/maha.jpg')}}" class="profile_picture" alt="">
                <div>
                    <div class="name_role">
                        <h1>Millie G Marshall</h1>
                        {{-- <span class="role">Member</span> --}}
                    </div>
                    <p class="pe">Januari 1, 2024 | Aktif</p>
                </div>
            </div>
                <div class="kanan">
                    <p class="kan">+62 9548 4328 234</p>
                    <p class="kan">rafiahmad@gmail.com</p>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        @method('DELETE')
                       <button type="submit" class="kan logout">Logout</button>
                    </form>
                </div>
            </div>

        <div class="bawah">
                <h1 class="text-center font-semibold text-2xl py-5">Status Pendaftaran</h1>
                <hr>



<div class="relative overflow-y-auto shadow-lg max-h-96 sm:rounded-lg my-5 ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Perguruan Tinggi
                </th>
                <th scope="col" class="px-6 py-3">
                    Fakultas Dipilih
                </th>
                <th scope="col" class="px-6 py-3">
                    Jurusan Dipilih
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white  border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            <tr class="bg-white  border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Diterima</span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            <tr class="bg-white  border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Ditolak</span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
    </div>

</x-Member.app>
