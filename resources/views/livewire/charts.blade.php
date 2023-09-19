<script>
    window.dispatchEvent(new Event('initializeChart'));
</script>


<div>
    <div class="flex">
        <div class="w-1/2">
            <!-- Table Display -->
            <table class="min-w-full mt-2 border-collapse border border-gray-300">
                <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Vrsta Organa</th>
                    <th class="border border-gray-300 px-4 py-2">Postavljen</th>
                    <th class="border border-gray-300 px-4 py-2">Procenat Postavljenih</th>
                    <th class="border border-gray-300 px-4 py-2">Vrsilac Duznosti</th>
                    <th class="border border-gray-300 px-4 py-2">Procenat VD</th>
                    <th class="border border-gray-300 px-4 py-2">Upraznjeno</th>
                    <th class="border border-gray-300 px-4 py-2">Procenat Upraznjeno</th>
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
        <div class="w-1/2"
             x-data="chartData({{ json_encode($chartData) }})"
             x-init="initChart()"
             wire:ignore
             x-on:initializeChart.window="initChart">

        <canvas id="myChart" x-ref="chartCanvas"></canvas>
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
                                this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                                    type: 'pie',
                                    data: {
                                        labels: this.labels,
                                        datasets: [{
                                            data: this.values,
                                            // ... rest of the code
                                        }]
                                    }
                                });
                            }
                        }, 100);
                    }
                }
            }

        </script>
    </div>
</div>
