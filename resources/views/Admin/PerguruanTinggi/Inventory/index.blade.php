<x-app>
    @section('title', 'Product | Inventory')

    <section class="py-4 px-8">
        <!-- container -->
        <div class="p-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class="bg-white border-gray-200">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                            <ul
                                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                                <li>
                                    <x-link href="{{ route('Dashboard.index') }}">Home</x-link>
                                </li>
                                <li>
                                  <x-link href="{{ route('Product.index') }}">Products</x-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TABLE -->
        <div class="p-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900">Index List</h2>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    SKU
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Barcode
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Group
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Brand
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Purchase Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Selling Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Inventory
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->id }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->sku  }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->barcode }}
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
                                        {{ $product->purchase_price }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->sell_price }}
                                    </td>
                                    <td scope="col" class="px-6 py-4">
                                        {{ $product->initial_quantity }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>

</x-app>
