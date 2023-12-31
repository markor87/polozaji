<div class="flex flex-col align-start items-center">
    <div class="w-full">
        <!-- Table Display -->
        <table class="min-w-full mt-2 border-collapse border border-gray-300">
            <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Врста органа</th>
                <th class="border border-gray-300 px-4 py-2">Постављен</th>
                <th class="border border-gray-300 px-4 py-2">Проценат постављених</th>
                <th class="border border-gray-300 px-4 py-2">Вршилац дужности</th>
                <th class="border border-gray-300 px-4 py-2">Проценат ВД</th>
                <th class="border border-gray-300 px-4 py-2">Упражњено</th>
                <th class="border border-gray-300 px-4 py-2">Проценат упражњено</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $row->vrsta_organa }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->postavljen }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->procenat_postavljenih }}
                </td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->vrsilac_duznosti }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->procenat_vd }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->upraznjeno }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $row->procenat_upraznjeno }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Pie Chart Display -->
    <div class="w-1/2 mt-4"
         x-data="chartData({{ json_encode($chartData) }})"
         x-init="initChart()">
        <canvas id="myChart" x-ref="chartCanvas" width="400" height="400"></canvas>
    </div>

    <script>
        function chartData(data) {
            return {
                chart: null,
                labels: data.labels,
                values: data.values,
                initChart() {
                    setTimeout(() => {
                        if (this.$refs.chartCanvas) {
                            let total = this.values.reduce((acc, val) => acc + Number(val), 0);  // Ensure values are treated as numbers
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
                                            'rgba(255, 206, 86, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    plugins: {
                                        datalabels: {
                                            formatter: (value, context) => {
                                                let percentage = value / total * 100;
                                                return percentage.toFixed(2) + '%';
                                            },
                                            color: '#000',
                                            display: true,
                                            align: 'center',
                                            anchor: 'center'
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
