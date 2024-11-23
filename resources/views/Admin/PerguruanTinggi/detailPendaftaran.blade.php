<x-Admin.app>
    @section('title', 'Detail Pendaftaran' )
    @include('Admin.layout.successModal')
    <section class="py-4 px-8">
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <nav class="border-gray-200">
                    <ul class="font-medium flex flex-col justify-between items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('view.mahasiswa') }}" class="block py-2 text-gray-900 rounded md:bg-transparent md:p-0" aria-current="page">Back to list</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-4 bg-white">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                <div class="min-h-screen py-10 px-5">
                    <div class=mx-auto rounded-lg">
                        <main class=" space-y-6">
                            <div class="text-center text-blue-500 text-2xl font-bold">Detail Form Pendaftaran</div>
                            <hr>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Nama</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->user->name }}</p>
                                    </div>
                                    <i class="fas fa-user text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Perguruan Tinggi</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->perguruanTinggi->nama }}</p>
                                    </div>
                                    <i class="fas fa-school text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Fakultas</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->fakultas->nama }}</p>
                                    </div>
                                    <i class="fas fa-building text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Jurusan</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->jurusan->nama }}</p>
                                    </div>
                                    <i class="fas fa-book text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Alamat</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->alamat }}</p>
                                    </div>
                                    <i class="fas fa-map-marker-alt text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Nomor Telepon</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->telp }}</p>
                                    </div>
                                    <i class="fas fa-phone-alt text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Tanggal Lahir</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->ttl }}</p>
                                    </div>
                                    <i class="fas fa-calendar-alt text-[#550606] text-xl"></i>
                                </div>
                                <div class="p-4 bg-gray-50 border border-solid border-gray-200 rounded-lg shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-lg text-gray-800">Nilai Akhir</h2>
                                        <p class="text-gray-700">{{ $dataPendaftar->nilai_akhir }}</p>
                                    </div>
                                    <i class="fas fa-chart-line text-[#550606] text-xl"></i>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="p-6 bg-blue-50 border border-blue-300 rounded-lg flex justify-between items-center">
                                <div>
                                    <h2 class="font-semibold text-lg text-gray-800">Status</h2>
                                    <span class="{{ $dataPendaftar->status == 0 ? 'bg-red-100 text-red-800' : ($dataPendaftar->status == 1 ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800') }} text-sm font-medium px-3 py-1 rounded">
                                        {{ $dataPendaftar->status == 0 ? 'Ditolak' : ($dataPendaftar->status == 1 ? 'Diterima' : 'Pending') }}
                                    </span>
                                </div>
                                <i class="fas fa-info-circle text-[#550606] text-xl"></i>
                            </div>


                            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg flex justify-between items-center">
                                <div>
                                    <h2 class="font-semibold text-lg text-gray-800">Deskripsi</h2>
                                    <p class="text-gray-700">{{ $dataPendaftar->deskripsi ?? "-" }}</p>
                                </div>
                                <i class="fas fa-pencil-alt text-[#550606] text-xl"></i>
                            </div>

                            <!-- Button Tolak dan Terima -->
                            @if ($dataPendaftar->status != 0 && $dataPendaftar->status != 1)
                                
                            <div class="flex space-x-4">
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex-1 border-2 border-red-600 hover:bg-red-600 hover:text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform  focus:outline-none">
                                    Tolak
                                </button>
                                <a href="{{ route('diterima', $dataPendaftar->id) }}" class=" text-center flex-1 border-2 border-blue-600 hover:bg-blue-600 hover:text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform  focus:outline-none">
                                    Terima
                                </a>
                            </div>
                            @endif
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>



  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Berikan Alasan Penolakan
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <form class="p-4 md:p-5" method="POST" action="{{ route('ditolak', $dataPendaftar->id) }}">
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                          <textarea id="description" name="deskripsi" style="height: 300px; max-height:400px;" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan Deskripsi Penolakan Mahasiswa Disini"></textarea>
                          @error('deskripsi')
                          @include('Admin.layout.form.errorMessage')
                         @enderror
                        </div>
                  </div>
                  <button type="submit" class="text-white w-full items-center bg-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Tolak
                  </button>
              </form>
          </div>
      </div>
  </div>

    @include('Admin.layout.successModalScript')
</x-Admin.app>
