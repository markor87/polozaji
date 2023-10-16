<div class="flex flex-col align-start items-center">
    <div class="w-full">
{{--        Table Display --}}
        <table class="min-w-full mt-2 border-collapse border border-gray-300">
            <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Број месеци</th>
               <th class="border border-gray-300 px-4 py-2">Број лица</th>
            </tr>
            </thead>
           <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $row->{'pol'} }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $row->{'ukupno'} }}</td>
                </tr>
           @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pie Chart Display -->
    <div class="w-1/2 mt-4"
         x-data="chartData11({{ json_encode($chartData) }})"
         x-init="initChart11()">
        <canvas id="myChart" x-ref="chartCanvas" width="400" height="400"></canvas>
    </div>

    <script>
        function chartData11(data) {
            return {
                chart: null,
                labels: data.labels,
                values: data.values,
                initChart11() {
                    setTimeout(() => {
                        if (this.$refs.chartCanvas) {
                            this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                                type: 'pie',
                                plugins: [ChartDataLabels],
                                data: {
                                    labels: this.labels,
                                    datasets: [{
                                        data: this.values,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(217,54,235,0.2)',
                                            'rgba(24,196,101,0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(217,54,235,1)',
                                            'rgba(24,196,101,1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    plugins: {
                                        datalabels: {
                                            formatter: (value, context) => {
                                                let sum = context.dataset.data.reduce((a, b) => a + b, 0);
                                                let percentage = value / sum * 100;
                                                return percentage.toFixed(2) + '%';  // displaying percentage with two decimal places
                                            },
                                            labels: {
                                                title: {
                                                    color: '#000',
                                                    display: true,
                                                    align: 'center',
                                                    anchor: 'center'
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        }
                    }, 100);
                }
            }
        }

    </script>
</div>
