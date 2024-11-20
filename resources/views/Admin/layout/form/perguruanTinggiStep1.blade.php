<form enctype="multipart/form-data" action="{{ route('store.pt.1') }}" method="POST">
    @csrf
    <div class="flex flex-wrap">
        <div class="w-full mb-4 mr-8">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Perguruan Tinggi</label>
            <input value="{{ $dataPT->nama ?? '' }}" type="text" name="nama" id="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Nama Perguruan Tinggi">
            @error('nama')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
            <select name="kategori" id="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <option disabled selected>- Pilih Kategori Perguruan Tinggi -</option>
                <option {{ optional($dataPT)->kategori == "Politeknik" ? 'selected' : '' }} value="Politeknik">Politeknik</option>
                <option {{ optional($dataPT)->kategori == "Swasta" ? 'selected' : '' }} value="Swasta">Swasta</option>
                <option {{ optional($dataPT)->kategori == "Insitut" ? 'selected' : '' }} value="Insitut">Insitut</option>
                <option {{ optional($dataPT)->kategori == "Negri" ? 'selected' : '' }} value="Negri">Negri</option>
                <option {{ optional($dataPT)->kategori == "Sekolah Tinggi" ? 'selected' : '' }} value="Sekolah Tinggi">Sekolah Tinggi</option>

            </select>
            @error('kategori')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
            <textarea  name="alamat" id="alamat"
                class="bg-gray-50 border  max-h-28 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Masukkan Alamat Perguruan Tinggi">{{ $dataPT->alamat ?? '' }}</textarea>
            @error('alamat')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
            <textarea  name="deskripsi" id="deskripsi"
                class="bg-gray-50 border  max-h-28 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Masukkan deskripsi Perguruan Tinggi">{{ $dataPT->deskripsi ?? '' }}</textarea>
            @error('deskripsi')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="slogan" class="block mb-2 text-sm font-medium text-gray-900">Jargon</label>
            <input value="{{ $dataPT->slogan ?? '' }}" type="text" name="slogan" id="slogan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Slogan Perguruan Tinggi">
            @error('slogan')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="flex w-full items-center ">
            <div class="w-1/2 mb-4 mr-8">
                <label for="telp" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telpon</label>
                <input value="{{ $dataPT->telp ?? '' }}" type="text" name="telp" id="telp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="Masukkan Nomor Telpon Diawali angka 0">
                @error('telp')
                    @include('Admin.layout.form.errorMessage')
                @enderror
            </div>

            <div class="w-1/2 mb-4 mr-8">
                <label for="web" class="block mb-2 text-sm font-medium text-gray-900">Website</label>
                <input value="{{ $dataPT->web ?? '' }}" type="text" name="web" id="web"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="website">
                @error('web')
                    @include('Admin.layout.form.errorMessage')
                @enderror
            </div>

            <div class="w-1/2 mb-4 mr-8">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input value="{{ $dataPT->email ?? '' }}" type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="email">
                @error('email')
                    @include('Admin.layout.form.errorMessage')
                @enderror
            </div>
        </div>

        <div class="flex w-full items-center">
            <div class="w-1/2 mb-4 mr-8">
                <label for="waktu_pendaftaran" class="block mb-2 text-sm font-medium text-gray-900">Waktu Pendaftaran Dibuka</label>
                <input value="{{ $dataPT->waktu_pendaftaran_awal ?? '' }}" type="date" name="waktu_pendaftaran_awal" id="waktu_pendaftaran_awal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="">
                @error('waktu_pendaftaran_awal')
                    @include('Admin.layout.form.errorMessage')
                @enderror
            </div>

            <div class="w-1/2 mb-4 mr-8">
                <label for="waktu_pendaftaran" class="block mb-2 text-sm font-medium text-gray-900">Waktu Pendaftaran Berakhir</label>
                <input value="{{ $dataPT->waktu_pendaftaran_berakhir ?? '' }}" type="date" name="waktu_pendaftaran_berakhir" id="waktu_pendaftaran_berakhir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="">
                @error('waktu_pendaftaran_berakhir')
                    @include('Admin.layout.form.errorMessage')
                @enderror
            </div>
        </div>


        <div class="w-full mb-4 mr-8">
            <label for="biaya" class="block mb-2 text-sm font-medium text-gray-900">Biaya Pendaftaran</label>
            <input value="{{ $dataPT->biaya ?? '' }}" type="number" name="biaya" id="biaya"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="">
            @error('biaya')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>


        <div class="w-full mb-4 mr-8">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="icon">Icon Perguruan Tinggi</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="icon" type="file" name="icon">
                @error('icon')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="banner">Banner Perguruan Tinggi</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="banner" type="file"  name="banner">
                @error('banner')
                @include('Admin.layout.form.errorMessage')
            @enderror
            </div>

    </div>
    <div class=" flex justify-end me-4">
        <x-Admin.button>Next</x-Admin.button>
    </div>

</form>
