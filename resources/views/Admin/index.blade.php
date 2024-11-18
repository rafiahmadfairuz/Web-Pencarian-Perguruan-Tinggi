<x-Admin.app>
    <section>
        <x-Admin.navbar></x-Admin.navbar>
        @section('title', 'Dashboard')

        <div class="p-4 sm:ml-64">
            <div
                class="font-bold p-4 border-2 shadow-lg bg-white border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                Halo {{ Auth::user()->name }}
            </div>
        </div>
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 shadow-lg bg-white border-dashed rounded-lg dark:border-gray-700">
                <div class="flex">
                    <div class="w-1/3">
                        <canvas id="pie"></canvas>
                    </div>
                    <div class="w-2/3">
                        <canvas id="batang"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const ctx = document.getElementById('pie');
        const ctz = document.getElementById('batang');

        const dataPie = {
            labels: ['Mahasiswa Ditolak', 'Mahasiswa Diterima'],
            datasets: [{
                label: 'Jumlah Mahasiswa Ditolak Dan Diterima',
                data: [300, 700],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                ],
                hoverOffset: 4
            }]
        };
        new Chart(ctx, {
            type: 'pie',
            data: dataPie,
            options: {
                responsive: true
            }
        });


        const labels = {!! json_encode($labels) !!};
        const data = {!! json_encode($data) !!};
        new Chart(ctz, {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [{
              label: '# Data Mahasiswa Yang Mendaftar',
              data: data,
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });

        // const dataBar = {
        //     labels: ['2021', '2022', '2023', '2024', '2025', '2026'],
        //     datasets: [{
        //         label: 'Total Mahasiswa Yang Mendaftar',
        //         data: [520, 250, 380, 100, 460, 230],
        //         borderWidth: 1
        //     }]
        // };
        // new Chart(ctz, {
        //     type: 'bar',
        //     data: dataBar,
        //     options: {
        //         responsive: true,
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });
    </script>
</x-Admin.app>
