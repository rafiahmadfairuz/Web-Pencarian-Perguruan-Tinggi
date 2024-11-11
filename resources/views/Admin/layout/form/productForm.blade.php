<form enctype="multipart/form-data" action="" method="POST">
    @csrf
    @method('post')
    <div class="flex flex-wrap">
        <div class="w-1/4 mb-4 mr-8">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product</label>
            <input value="{{ old('name') }}" type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Product Name">
            @error('name')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="sku" class="block mb-2 text-sm font-medium text-gray-900">SKU</label>
            <input value="{{ old('sku') }}" type="text" name="sku" id="sku"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Product SKU">
            @error('sku')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <input value="{{ old('description') }}" type="text" name="description" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Product Description">
            @error('description')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="brand_id" class="block mb-2 text-sm font-medium text-gray-900">Select
                any
                Brand</label>
            <select id="brand_id" name="brand_id"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                {{-- @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                @endforeach --}}
            </select>
            @error('brand_id')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Select
                any
                Category</label>
            <select id="category_id" name="category_id"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                {{-- @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach --}}
            </select>
            @error('category_id')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="group_id" class="block mb-2 text-sm font-medium text-gray-900">Select
                any
                Group</label>
            <select id="group_id" name="group_id"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                {{-- @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach --}}
            </select>
            @error('group_id')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="unit_id" class="block mb-2 text-sm font-medium text-gray-900">Select
                any
                Unit</label>
            <select id="unit_id" name="unit_id"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                {{-- @foreach ($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->title }}</option>
                @endforeach --}}
            </select>
            @error('unit_id')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="product_type" class="block mb-2 text-sm font-medium text-gray-900">Select
                Product Type</label>
            <select id="product_type" name="product_type"
                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Select</option>
                <option value="Digital Prouct">Digital Product</option>
                <option value="Physical Prouct">Physical Product</option>
                <option value="Subscription">Subscription</option>
            </select>
            @error('product_type')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="initial_quantity" class="block mb-2 text-sm font-medium text-gray-900">Initial Quantity</label>
            <input value="{{ old('initial_quantity') }}" type="number" name="initial_quantity" id="initial_quantity"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Initial Quantity">
            @error('initial_quantity')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="sell_price" class="block mb-2 text-sm font-medium text-gray-900">Selling Price</label>
            <input value="{{ old('sell_price') }}" type="number" name="sell_price" id="sell_price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Selling Price">
            @error('sell_price')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="purchase_price" class="block mb-2 text-sm font-medium text-gray-900">Purchase Price</label>
            <input value="{{ old('purchase_price') }}" type="number" name="purchase_price" id="purchase_price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Purchase Price">
            @error('purchase_price')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="vat" class="block mb-2 text-sm font-medium text-gray-900">VAT</label>
            <input value="{{ old('vat') }}" type="number" name="vat" id="vat"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="vat">
            @error('tax')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label for="barcode" class="block mb-2 text-sm font-medium text-gray-900">Barcode</label>
            <input value="{{ old('barcode') }}" type="number" name="barcode" id="barcode"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Barcode">
            @error('barcode')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/4 mb-4 mr-8">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload
                Image</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="user_avatar_help" id="image" type="file" multiple name="image[]">
                @if(session()->has('image'))
                     <p class="text-red-500">{{ session()->get('image') }}</p>
                @endif
        </div>
    </div>
    <button type="submit"
        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg">Add
        Product</button>
</form>
