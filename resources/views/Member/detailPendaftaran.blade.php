<x-Member.app>
    @section('title', 'Detail Pendaftaran')
    <x-Member.navbar-detail></x-Member.navbar-detail>
  <div class="min-h-screen bg-gray-100 py-10 px-5">
    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg">
        <main class="p-8 space-y-6">
            <div class="text-center py-3 text-2xl font-bold text-gray-800">Detail Form Pendaftaran</div>
            <hr class="border-t border-gray-300">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Nama</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->user->name }}</p>
                    </div>
                    <i class="fas fa-user text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Perguruan Tinggi</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->perguruanTinggi->nama }}</p>
                    </div>
                    <i class="fas fa-school text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Fakultas</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->fakultas->nama }}</p>
                    </div>
                    <i class="fas fa-building text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Jurusan</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->jurusan->nama }}</p>
                    </div>
                    <i class="fas fa-book text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Alamat</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->alamat }}</p>
                    </div>
                    <i class="fas fa-map-marker-alt text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Nomor Telepon</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->telp }}</p>
                    </div>
                    <i class="fas fa-phone-alt text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Tanggal Lahir</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->ttl }}</p>
                    </div>
                    <i class="fas fa-calendar-alt text-[#550606] text-xl"></i>
                </div>
                <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">Nilai Akhir</h2>
                        <p class="text-gray-700">{{ $dataPendaftar->nilai_akhir }}</p>
                    </div>
                    <i class="fas fa-chart-line text-[#550606] text-xl"></i>
                </div>
            </div>
            <div class="p-6 bg-blue-50 border border-blue-300 rounded-lg flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-lg text-gray-800">Status</h2>
                    <span class="{{ $dataPendaftar->status == 0 ? 'bg-red-100 text-red-800' : ($dataPendaftar->status == 1 ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800') }} text-sm font-medium px-3 py-1 rounded">
                        {{ $dataPendaftar->status == 0 ? 'Ditolak' : ($dataPendaftar->status == 1 ? 'Diterima' : 'Pending') }}
                    </span>
                </div>
                <i class="fas fa-info-circle text-[#550606] text-xl"></i>
            </div>
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-lg text-gray-800">Deskripsi</h2>
                    <p class="text-gray-700">{{ $dataPendaftar->deskripsi }}</p>
                </div>
                <i class="fas fa-pencil-alt text-[#550606] text-xl"></i>
            </div>
        </main>
    </div>
</div>



</x-Member.app>
