<x-Member.app>
    <x-Member.navbar-detail></x-Member.navbar-detail>
    <div class="flex  container-fluid justify-center py-3">
        <div class="container bg-white shadow-xl p-5 rounded-md border">
            <h1 class="py-5 font-bold text-center text-2xl">Data Pendaftaran</h1>
            <hr class="border-t-2 border-gray-800">

            <form class="my-4">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Lengkap
                    </label>
                    <input type="text" name="name" id="name" placeholder="Nama Lengkap." value="{{ $data->name }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nomor Telepon
                    </label>
                    <input type="text" name="phone" id="phone" placeholder="Masukkan nomor telepon"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Alamat Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Masukkan email"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">

                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tanggal Lahir
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                </div>

                <!-- Detail Alamat -->
                <div class="mb-5">

                    <label for="tinggal" class="mb-3 block text-base font-medium text-[#07074D]">
                        Alamat Tinggal
                    </label>
                    <input type="text" name="tinggal" id="tinggal"
                      placeholder="Masukkan Tempat Tinggalmu Saat Ini"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                  </div>
                  <div class="mb-5">
                    <label for="nilai" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nilai
                    </label>
                    <input type="number" name="nilai" id="nilai" min="0" max="100" placeholder="Masukkan Nilai Akhir Pendidikan Terakhir"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>


                <!-- Fakultas dan Jurusan -->
                <div class="mb-5">
                    <label for="faculty" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fakultas
                    </label>
                    <select name="faculty" id="faculty"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="">Pilih Fakultas</option>
                        <option value="science">Fakultas Sains</option>
                        <option value="engineering">Fakultas Teknik</option>
                        <option value="arts">Fakultas Seni</option>
                        <option value="medicine">Fakultas Kedokteran</option>
                        <option value="law">Fakultas Hukum</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="major" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jurusan
                    </label>
                    <select name="major" id="major"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="">Pilih Jurusan</option>
                        <option value="computer-science">Ilmu Komputer</option>
                        <option value="civil-engineering">Teknik Sipil</option>
                        <option value="philosophy">Filsafat</option>
                        <option value="medicine">Kedokteran</option>
                        <option value="law">Hukum</option>
                    </select>
                </div>

                <!-- Tombol Daftar dan Reset -->
                <div class="flex justify-between">
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#220606] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Daftar
                    </button>
                    <button type="reset"
                        class="hover:shadow-form w-full rounded-md border border-red-400 hover:bg-[#FF6347] hover:text-white duration-150 py-3 px-8 text-center text-base font-semibold text-black outline-none ml-4">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-Member.app>
