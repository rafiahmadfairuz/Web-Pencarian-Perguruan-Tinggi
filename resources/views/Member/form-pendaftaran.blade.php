<x-Member.app>
    @section('title', 'Form Daftar Ke ' . $pt->nama)
    <x-Member.navbar-detail></x-Member.navbar-detail>
    <div class="flex  container-fluid justify-center py-3">
        <div class="container bg-white shadow-xl p-5 rounded-md border">
            <h1 class="py-5 font-bold text-center text-2xl">Form Pendaftaran Ke {{ $pt->nama }}</h1>
            <hr class="border-t-2 border-gray-800">

            <form class="my-4" method="POST" action="{{ route('store.daftar', $data->id) }}">
                @csrf
                <input type="hidden" name="pt" value="{{ $pt->id }}">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Lengkap
                    </label>
                    <input type="text" name="name" id="name" placeholder="Nama Lengkap." value="{{ $data->name }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('name')
                        @include('Admin.layout.form.errorMessage')
                    @enderror
                    </div>
                <div class="mb-5">
                    <label for="telepon" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nomor Telepon
                    </label>
                    <input type="text" name="telepon" id="telepon" value="{{ $data->telepon }}" placeholder="Masukkan nomor telepon"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('telepon')
                        @include('Admin.layout.form.errorMessage')
                        @enderror
                    </div>
                <div class="mb-5">
                    <label for="email"  class="mb-3 block text-base font-medium text-[#07074D]">
                        Alamat Email
                    </label>
                    <input type="email" name="email" value="{{ $data->email }}" id="email" placeholder="Masukkan email"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('email')
                        @include('Admin.layout.form.errorMessage')
                        @enderror
                    </div>
                <div class="mb-5">

                            <label for="ttl" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tanggal Lahir
                            </label>
                            <input type="date" value="{{ $data->ttl }}" name="ttl" id="ttl"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('ttl')
                                @include('Admin.layout.form.errorMessage')
                                @enderror
                </div>

                <!-- Detail Alamat -->
                <div class="mb-5">

                    <label for="alamat" class="mb-3 block text-base font-medium text-[#07074D]">
                        Alamat Tinggal
                    </label>
                    <input type="text" name="alamat" id="alamat"
                      placeholder="Masukkan Tempat Tinggalmu Saat Ini"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                      @error('alamat')
                      @include('Admin.layout.form.errorMessage')
                      @enderror
                  </div>
                  <div class="mb-5">
                    <label for="nilai" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nilai
                    </label>
                    <input type="number" name="nilai_akhir" id="nilai" min="0" max="100" placeholder="Masukkan Nilai Akhir Pendidikan Terakhir"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('nilai_akhir')
                        @include('Admin.layout.form.errorMessage')
                        @enderror
                    </div>

              

                <!-- Fakultas dan Jurusan -->
                <div class="mb-5">
                    <label for="fakultas" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fakultas
                    </label>
                    <select name="fakultas" id="fakultas"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="" disabled selected>Pilih Fakultas</option>
                        @foreach ($fakultas as $f)
                           <option value="{{ $f->id }}">{{ $f->nama }}</option>
                        @endforeach
                    </select>
                    @error('fakultas')
                        @include('Admin.layout.form.errorMessage')
                        @enderror
                </div>
                <div class="mb-5">
                    <label for="jurusan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jurusan
                    </label>
                    <select name="jurusan" id="jurusan"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="" disabled selected>Pilih Jurusan</option>
                        @foreach ($jurusan as $j)
                        <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                    @error('jurusan')
                        @include('Admin.layout.form.errorMessage')
                        @enderror
                </div>

                <!-- Tombol Daftar dan Reset -->
                <div class="flex justify-between">
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#220606] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Daftar
                    </button>
                    <button type="reset"
                        class="hover:shadow-form w-full rounded-md border border-red-400 hover:bg-[#FF6347] hover:text-white duration-150 py-3 px-8 text-center text-base font-semibold text-black outline-none ml-4">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-Member.app>
