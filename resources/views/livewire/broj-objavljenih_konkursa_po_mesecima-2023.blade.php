<div>
<div class="w-full"
     x-data="chartData4({{ json_encode($chartData) }})"
     x-init="initChart4()">
    <canvas id="myChart4" x-ref="chartCanvas"></canvas>
</div>
    <script>
        function chartData4(data) {
            return {
                chart: null,
                labels: data.labels,
                values: data.values,
                initChart4() {
                    setTimeout(() => {
                        if (this.$refs.chartCanvas) {
                            this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                                type: 'bar',
                                data: {
                                    labels: this.labels,
                                    datasets: [{
                                        label: 'Број објављених конкурса по месецима 2023.',
                                        data: this.values,
                                        backgroundColor: 'rgba(17,121,204,0.2)', // same color for all bars
                                        borderColor: 'rgb(5,133,232)', // same color for all bars
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
