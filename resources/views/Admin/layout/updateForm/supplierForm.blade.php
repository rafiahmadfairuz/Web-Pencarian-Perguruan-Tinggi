<form enctype="multipart/form-data" action="{{ route('Supplier.update', $supplier->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="flex flex-wrap">
        <div class="w-1/3 mb-4 mr-4">
            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900">First
                Name</label>
            <input value="{{ $supplier->firstName }}" type="text" name="firstName" id="firstName"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('firstName')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900">Last
                Name</label>
            <input value="{{ $supplier->lastName }}" type="text" name="lastName" id="lastName"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('lastName')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
            <input value="{{ $supplier->company }}" type="text" name="company" id="company"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('company')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input value="{{ $supplier->email }}" type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('email')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
            <input value="{{ $supplier->phone }}" type="number" name="phone" id="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('phone')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
            <input value="{{ $supplier->address }}" type="text" name="address" id="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('address')
                @include('layout.form.errorMessage')
            @enderror
        </div>
        <div class="w-1/3 mb-4 mr-4">
            <label for="tin" class="block mb-2 text-sm font-medium text-gray-900">TIN</label>
            <input value="{{ $supplier->tin }}" type="number" name="tin" id="tin"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('tin')
                @include('layout.form.errorMessage')
            @enderror
        </div>
    </div>
    <button type="submit"
        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg">Update
        Supplier</button>
</form>