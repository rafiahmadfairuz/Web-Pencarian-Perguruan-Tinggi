<form action="{{ route('store.pt.2') }}" id="formFakultas" method="POST">
    @csrf
    <div class="flex flex-wrap">
         <input type="hidden" value="{{ session('pt') }}" name="pt">
        <div class="w-full mb-4 mr-8">

            <label for="namaFk" class="block mb-2 text-sm font-medium text-gray-900">Nama Fakultas Baru</label>
            <div class="relative">
                <input type="text"  id="namaFk"
                    class=" block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500   "
                    placeholder="Tambah Fakultas Baru" />
                <div id="buttonTambahFk"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 hover:cursor-pointer">
                    Tambah</div>
            </div>
            @error('nama')
                @include('Admin.layout.form.errorMessage')
            @enderror
        </div>


        <ul
            class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white" id="listFakultas">
        </ul>
        <input type="hidden" id="semuaDataFakultas" name="semuaDataFakultas">

    </div>
    <div class=" flex justify-end me-4 mt-10">
        <a href="{{ route('create.pt.1') }}"
            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-blue-400 to-orange-500 group-hover:from-blue-400 group-hover:to-orange-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-orange-200">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Kembali
            </span>
        </a>
        <x-Admin.button>Next</x-Admin.button>
    </div>
</form>
