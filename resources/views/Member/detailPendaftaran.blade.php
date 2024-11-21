<x-Member.app>
    @section('title', 'Detail Pendaftaran')
    <x-Member.navbar-detail></x-Member.navbar-detail>
    <div class="profile h-screen">
        <div class="bawah ">
            <h1 class="text-center font-semibold text-2xl py-5">Detail Pendaftaran</h1>
            <hr>


                <h1>{{ $dataPendaftar->user->name }}</h1>


        </div>
    </div>

</x-Member.app>
