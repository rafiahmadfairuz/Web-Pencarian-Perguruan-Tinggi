<x-Admin.app>
    @section('title', 'Create Perguruan Tinggi ')
    <section class="py-4">
        @if(session()->has('gagal'))
           <p>{{ session()->get('gagal') }}</p>
        @endif
        <x-Admin.navbar></x-Admin.navbar>
        <div class="p-4 sm:ml-64 mt-1">
            <div class="bg-white  p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <div class="flex justify-between items-center py-2">
                    <h2 class="mb-4 text-xl font-bold text-blue-600">Tambah Perguruan Tinggi </h2>
                    @include('components.Admin.stepForm')
                </div>
                @include('Admin.layout.form.perguruanTinggiStep1')
            </div>
        </div>
    </section>
</x-Admin.app>




