<div>
    <div class="w-full"
         x-data="chartData2({{ json_encode($chartData) }})"
         x-init="initChart2()">
        <canvas id="myChart2" x-ref="chartCanvas"></canvas>
    </div>

    <script>
        function chartData2(data) {
            return {
                chart: null,
                labels: data.labels,
                values: data.values,
                initChart2() {
                    setTimeout(() => {
                        if (this.$refs.chartCanvas) {
                            this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                                type: 'bar',
                                data: {
                                    labels: this.labels,
                                    datasets: [{
                                        label: 'Број активних вд-а',
                                        data: this.values,
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // same color for all bars
                                        borderColor: 'rgba(75, 192, 192, 1)', // same color for all bars
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    indexAxis: 'y',
                                    plugins: {
                                        datalabels: {
                                            color: 'black',
                                            display: function(context) {
                                                return context.dataset.data[context.dataIndex] !== 0;  // display labels with non-zero values
                                            },
                                            formatter: function(value, context) {
                                                return value;
                                            }
                                        }
                                    },
                                    scales: {
                                        x: {
                                            beginAtZero: true
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
