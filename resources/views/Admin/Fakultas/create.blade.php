<x-Admin.app>
    @section('title', 'Create Perguruan Tinggi')
    <section class="py-4">
        @if(session()->has('gagal'))
           <p>{{ session()->get('gagal') }}</p>
        @endif
        <x-Admin.navbar></x-Admin.navbar>
        <div class="p-4 sm:ml-64 mt-1">
            <div class="bg-white  p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">Tambah Perguruan Tinggi</h2>
                @include('Admin.layout.form.fakultas')
            </div>
        </div>
    </section>
</x-Admin.app>




