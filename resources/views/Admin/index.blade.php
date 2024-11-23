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
    const ctxPie = document.getElementById('pie');
    const diterima = {!! json_encode($diterima) !!};  
    const ditolak = {!! json_encode($ditolak) !!};    

    const dataPie = {
        labels: ['Mahasiswa Ditolak', 'Mahasiswa Diterima'],
        datasets: [{
            label: 'Jumlah Mahasiswa Ditolak Dan Diterima',
            data: [ditolak, diterima],  
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
            ],
            hoverOffset: 4
        }]
    };

    new Chart(ctxPie, {
        type: 'pie',
        data: dataPie,
        options: {
            responsive: true
        }
    });

    const ctxBar = document.getElementById('batang');
    const labels = {!! json_encode($labels) !!};  
    const data = {!! json_encode($chartData) !!};  

    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,  
            datasets: [{
                label: '# Data Mahasiswa Yang Mendaftar',
                data: data,  
                borderWidth: 1,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',  
                borderColor: 'rgba(54, 162, 235, 1)',  
                hoverBackgroundColor: 'rgba(54, 162, 235, 0.5)',  
                hoverBorderColor: 'rgba(54, 162, 235, 1)',  
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,  
                    title: {
                        display: true,
                        text: 'Jumlah Pendaftar'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',  
                }
            }
        }
    });
    </script>
</x-Admin.app>
