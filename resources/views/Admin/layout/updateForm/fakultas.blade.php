<div id="info-popup" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
            <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">Update Fakultas</h3>
                <p>Perbarui informasi Fakultas di bawah ini:</p>
            </div>
            <form action="{{ route('store.update.fakultas', $fakultasTerpilih->id) }}" method="POST">
                @csrf
                <div class="flex flex-wrap">
                    <div class="w-full mb-4 ">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Fakultas</label>
                        <input value="{{ $fakultasTerpilih->nama }}" type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Nama Fakultas">
                        @error('nama')
                            @include('Admin.layout.form.errorMessage')
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4 space-y-4 sm:flex sm:space-y-0">
                    <button id="close-modal" type="button" class="py-2 px-4 w-full text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 sm:w-auto hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    <x-Admin.button>Simpan Perubahan Data</x-Admin.button>
                </div>
            </form>
        </div>
    </div>
</div>
