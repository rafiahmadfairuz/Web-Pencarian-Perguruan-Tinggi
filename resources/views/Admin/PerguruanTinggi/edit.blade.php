<x-Admin.app>
    @section('title', 'Edit Perguruan Tinggi')
    <section class="py-4 px-8">
        <!-- container -->
        <!-- MENU -->
        <div class="p-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class="bg-white border-gray-200">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                            <ul
                                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                                <li>
                                    <a href=""
                                        class="block py-2 px-3 text-gray-900 rounded md:bg-transparent md:p-0"
                                        aria-current="page">Back to list</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- UPDATE FORM -->
        <div class="p-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                @include('Admin.layout.updateForm.productForm')
            </div>
        </div>
    </section>
</x-Admin.app>

