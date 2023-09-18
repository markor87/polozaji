<div>

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
        @foreach($chartData as $data)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $data->vrsta_organa }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->postavljen }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->procenat_postavljenih }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->vrsilac_duznosti }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->procenat_vd }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->upraznjeno }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data->procenat_upraznjeno }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Pie Chart Display -->
    <div x-data="chartData()" x-init="initChart()">
        <canvas id="myPieChart"></canvas>
    </div>

    <script>
        function chartData() {
            return {
                chart: null,
                initChart() {
                    this.chart = new Chart(document.getElementById('myPieChart'), {
                        type: 'pie',
                        data: {
                            labels: @entangle('chartData.labels'),
                            datasets: [{
                                data: @entangle('chartData.values'),
                                backgroundColor: [ /* Add colors for each segment here */ ],
                                borderColor: [ /* Add border colors for each segment here */ ],
                                borderWidth: 1
                            }]
                        }
                    });
                }
            }
        }
    </script>
</div>
