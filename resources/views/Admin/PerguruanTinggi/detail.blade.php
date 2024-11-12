<x-Admin.app>
    @section('title', 'Edit Perguruan Tinggi')
    <section class="py-4 px-8 ">
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class=" border-gray-200">
                            <ul
                                class="font-medium flex flex-col justify-between p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                                <li>
                                    <a href="{{ route('view.pt') }}"
                                        class="block py-2  text-gray-900 rounded md:bg-transparent md:p-0"
                                        aria-current="page">Back to list</a>
                                </li>
                                <form action="{{ route('delete.pt', $perguruanTinggiTerpilih->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">

            </div>
        </div>
    </section>
</x-Admin.app>

