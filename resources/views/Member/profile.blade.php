<x-Member.app>
    @section('title', 'Profile ' . $userPT->name)
    <x-Member.navbar-detail></x-Member.navbar-detail>
    <div class="profile">
        <div class="detail_profile">
            <div class="kiri">
                <img src="{{url('storage/image/maha.jpg')}}" class="profile_picture" alt="">
                <div>
                    <div class="name_role">
                        <h1>{{ $userPT->name }} |  <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">  {{ $userPT->roles == "member" ? "Member" : "Admin" }}</span></h1>

                    </div>
                    <p class="pe">{{ $userPT->ttl  }} : {{ $userPT->status == 0 ?  "Aktif" : "Nonaktif"}}</p>
                </div>
            </div>
                <div class="kanan">
                    <p class="kan">+{{ $userPT->telepon }}</p>
                    <p class="kan">{{ $userPT->email }}</p>
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



<div class="relative overflow-y-auto shadow-lg max-h-80 sm:rounded-lg my-5 ">
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
            @forelse ($userPT->pt as $pt)
            <tr class="bg-white  border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pt->nama }}
                </th>
                <td class="px-6 py-4">
                    {{ $pt->fakultas[0]->nama }}
                </td>
                <td class="px-6 py-4">
                    {{ $pt->jurusan[0]->nama }}
                </td>
                <td class="px-6 py-4">
                    <span class="{{ $pt->pivot->status == 1 ? "bg-blue-100" : ($pt->pivot->status == 0 ? "bg-red-500 text-white" : "bg-yellow-100")}}   text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                     @if($pt->pivot->status == 1)
                          Diterima
                     @elseif($pt->pivot->status == 0)
                           Ditolak
                     @else
                           Pending
                     @endif
                    </span>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('detail.pendaftaran', $pt->pivot->id ) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                </td>

            @empty
              <td colspan="5" class="text-center py-5 text-2xl font-bold">Belum mendaftar kemanapun</td>
            @endforelse
        </tr>

        </tbody>
    </table>
</div>

        </div>
    </div>

</x-Member.app>
