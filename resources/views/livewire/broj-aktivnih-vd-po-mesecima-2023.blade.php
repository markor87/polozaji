<div>
    <div class="w-full"
         x-data="chartData3({{ json_encode($chartData) }})"
         x-init="initChart3()">
        <canvas id="myChart3" x-ref="chartCanvas"></canvas>
    </div>
    <script>
        function chartData3(data) {
            return {
                chart: null,
                labels: data.labels,
                values: data.values,
                initChart3() {
                    setTimeout(() => {
                        if (this.$refs.chartCanvas) {
                            this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                                type: 'bar',
                                plugins: [ChartDataLabels],
                                data: {
                                    labels: this.labels,
                                    datasets: [{
                                        label: 'Број активних вд-а',
                                        data: this.values,
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // same color for all bars
                                        borderColor: 'rgb(75,159,222)', // same color for all bars
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
