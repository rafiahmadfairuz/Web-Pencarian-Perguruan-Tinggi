<x-Member.app>
    @section('title', 'Home')
    @include('Admin.layout.successModal')

    <x-Member.navbar></x-Member.navbar>
    <x-Member.hero></x-Member.hero>

    <div class="beranda">
        <div class="kata">
            <span>Perguruan Tinggi Paling Direkomendasikan</span>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptas consectetur voluptatum
                natus eaque debitis porro.</p>
        </div>
        <div class="penataan">
            @forelse ($pt as $p)
                <div class="kartu">
                    <img src="{{ url('storage/image/' . $p->banner) }}" class="banner" alt="">
                    <div class="deskripsi">
                        <span class="wrap">{{ $p->kategori }}</span>
                        <div class="judul">
                            <img src="{{ url('storage/' . $p->icon) }}" alt="">
                            <h5>{{ $p->nama }}</h5>
                        </div>
                        <p class=" break-words ">{{ Str::limit($p->deskripsi, 100, '...') }}</p>
                    </div>
                    <a href="{{ route('detail.pt', $p->id) }}">Selengkapnya <i class="fa-solid fa-arrow-right mt-2 ms-2 "></i></a>
                </div>
            @empty
        </div>
        <p class="text-center py-56 text-5xl font-mono text-red-950">T_T Data Tidak Ditemukan T_T</p>
        @endforelse

    </div>
    <div class="container flex justify-center">
        {{ $pt->links() }}
    </div>
    <div class="w-full">
        <x-Member.footer></x-Member.footer>
    </div>
    @include('Admin.layout.successModalScript')

</x-Member.app>
