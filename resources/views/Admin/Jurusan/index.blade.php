<x-Admin.app>
    @section('title', 'Daftar Jurusan')
    <section class="py-4">
        @include('Admin.layout.successModal')
        <x-Admin.navbar></x-Admin.navbar>
        <div class="p-4 sm:ml-64">
            @include('Admin.layout.form.jurusan')
            @error('Nama')
            @include('Admin.layout.form.errorMessage')
            @enderror
            @if(session('error'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                <span class="font-medium">{{ session('error') }}</span>
            </div>
            @endif
            <div class="my-3 p-4 border-2 border-gray-200 border-dashed rounded-lg shadow-lg bg-white">
                <h2 class="mb-4 text-xl font-bold text-gray-900">List Jurusan</h2>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($jurusan as $jr)
                                <tr>
                                    <td scope="col" class="px-6 py-4">
                                        <span class="{{ $jr->status == 0 ? " " : "bg-red-100 text-red-800" }} text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $jr->status == 0 ?   $jr->nama : "$jr->nama (Disabled)"}}</span>
                                    </td>
                                    <td scope="col" class="px-6 py-3">
                                        @include('Admin.layout.updateForm.jurusanUpdate')
                                        |
                                        <a href="{{ route('detail.jurusan', $jr->id) }} " type="button" class="text-sm
                                            font-medium text-red-500">Detail</a>
                                        |
                                        <a href="{{ $jr->status == 0 ? route('disabled.jurusan', $jr->id) : route('enable.jurusan', $jr->id) }}" type="button"
                                            class="text-sm
                                                font-medium text-red-500">{{ $jr->status == 0 ? "Disabled" : "Enable" }}</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('Admin.layout.successModalScript')
</x-Admin.app>




