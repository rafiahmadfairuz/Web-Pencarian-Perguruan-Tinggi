<form enctype="multipart/form-data" action="" method="POST">
    @csrf
    @method('post')
    <div class="flex flex-wrap">
        <div class="w-full mb-4 mr-8">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Perguruan Tinggi</label>
            <input value="{{ old('nama') }}" type="text" name="nama" id="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Nama Perguruan Tinggi">
            @error('nama')
                @include('layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
            <select name="kategori" id="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <option disabled selected>- Pilih Kategori Perguruan Tinggi -</option>
                <option value="Politeknik">Politeknik</option>
                <option value="Swasta">Swasta</option>
                <option value="Insitut">Insitut</option>
                <option value="Negri">Negri</option>
                <option value="Sekolah Tinggi"></option>
            </select>
            @error('kategori')
                @include('layout.form.errorMessage')
            @enderror
        </div>

        {{-- <div class="w-1/4 mb-4 mr-8">
            <label for="brand_id" class="block mb-2 text-sm font-medium text-gray-900"></label>
            <select id="brand_id" name="brand_id"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                @endforeach
            </select>
            @error('brand_id')
                @include('layout.form.errorMessage')
            @enderror
        </div> --}}

        <div class="w-full mb-4 mr-8">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
            <textarea  value="{{ old('alamat') }}" name="alamat" id="alamat"
                class="bg-gray-50 border  max-h-28 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Masukkan Alamat Perguruan Tinggi"></textarea>
            @error('alamat')
                @include('layout.form.errorMessage')
            @enderror
        </div>

        <div class="flex w-full items-center ">
            <div class="w-1/2 mb-4 mr-8">
                <label for="telp" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telpon</label>
                <input value="{{ old('telp') }}" type="number" name="telp" id="telp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="Nomor Telpon">
                @error('telp')
                    @include('layout.form.errorMessage')
                @enderror
            </div>

            <div class="w-1/2 mb-4 mr-8">
                <label for="web" class="block mb-2 text-sm font-medium text-gray-900">Website</label>
                <input value="{{ old('web') }}" type="text" name="web" id="web"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="website">
                @error('web')
                    @include('layout.form.errorMessage')
                @enderror
            </div>

            <div class="w-1/2 mb-4 mr-8">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input value="{{ old('email') }}" type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="email">
                @error('email')
                    @include('layout.form.errorMessage')
                @enderror
            </div>
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900"></label>
            <input value="{{ old('date') }}" type="date" name="date" id="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="">
            @error('date')
                @include('layout.form.errorMessage')
            @enderror
        </div>

        <div class="w-full mb-4 mr-8">
            <label for="biaya" class="block mb-2 text-sm font-medium text-gray-900">Biaya Pendaftaran</label>
            <input value="{{ old('biaya') }}" type="number" name="biaya" id="biaya"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="">
            @error('biaya')
                @include('layout.form.errorMessage')
            @enderror
        </div>


        <div class="w-full mb-4 mr-8">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Icon Perguruan Tinggi</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="user_avatar_help" id="image" type="file" multiple name="image[]">
                @if(session()->has('image'))
                     <p class="text-red-500">{{ session()->get('image') }}</p>
                @endif
        </div>

        <div class="w-full mb-4 mr-8">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Banner Perguruan Tinggi</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="user_avatar_help" id="image" type="file" multiple name="image[]">
                @if(session()->has('image'))
                     <p class="text-red-500">{{ session()->get('image') }}</p>
                @endif
        </div>

    </div>
    <button type="submit"
        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg">
        Tambah Data</button>
</form>
