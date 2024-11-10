<x-Member.app>
    @section('title', 'Home')
    <x-Member.navbar></x-Member.navbar>
   <x-Member.hero></x-Member.hero>

   <div class="beranda">
    <div class="kata">
        <span>Perguruan Tinggi Paling Direkomendasikan</span>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptas consectetur voluptatum natus eaque debitis porro.</p>
    </div>

        <div class="penataan">
            @forelse ($pt as $p)
            <div class="kartu">
                <img src="{{ url('storage/image/' . $p->banner) }}" class="banner" alt="">
                <div class="deskripsi">
                    <span>{{ $p->kategori }}</span>
                    <div class="judul">
                        <img src="{{ url('storage/image/' . $p->foto) }}" alt="">
                        <h5>{{ $p->nama }}</h5>
                    </div>
                    <p>{{ Str::limit($p->deskripsi, 150, '...') }}</p>
                </div>
                <a href="{{ route('detail.pt',$p->id) }}">Selengkapnya ></i></a>
            </div>
            @empty
               <p>Kosong</p>
            @endforelse

           {{ $pt->links() }}

        </div>


   </div>

</x-Member.app>
