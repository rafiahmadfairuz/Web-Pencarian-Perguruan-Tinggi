<x-Admin.app></x-Admin.app>
<x-Admin.app>
    @section('title', 'Create Universitas')
    <section class="py-4">
        <x-Admin.navbar></x-Admin.navbar>
        <!-- container -->
        <!-- Modal -->
        @include('Admin.layout.successModal')
        <!-- FORM -->
        <div class="p-4 sm:ml-64 mt-1">
            <div class="  p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">Tambah Perguruan Tinggi</h2>
                @include('Admin.layout.form.perguruanTinggi')
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')
</x-Admin.app>




