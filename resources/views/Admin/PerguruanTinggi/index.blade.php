<x-app>
    @section('title', 'All Products')
    <section class="py-4">
        <x-nav></x-nav>
        <!-- container -->
        <!-- Modal -->
        @include('layout.successModal')
        <!-- FORM -->
        <div class="p-4 sm:ml-64 mt-1">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">Tambah Perguruan Tinggi</h2>
                @include('layout.form.productForm')
            </div>
        </div>
        <!-- TABLE -->
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">List Perguruan Tinggi</h2>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Icon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Akreditasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->sku  }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->name }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->category->title }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->group->title }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->brand->title }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->brand->title }}
                                    </td> 
                                    <td scope="col" class="px-6 py-3">
                                        <a href=" {{ route('Product.edit', $product->id) }} " type="button" class=text-sm
                                            font-medium text-red-500">Edit</a> |
                                        <form action="{{ route('Product.destroy', $product->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm font-medium text-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('layout.successModalScript')
</x-app>




