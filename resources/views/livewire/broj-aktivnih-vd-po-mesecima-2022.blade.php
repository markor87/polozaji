<div x-data="chartData({ labels: {!! json_encode($months) !!}, values: {!! json_encode($counts) !!} })" x-init="initChart">
    <canvas x-ref="chartCanvas" width="800" height="400"></canvas>
</div>

<script>
    function chartData(data) {
        return {
            labels: data.labels,
            values: data.values,
            chart: null,
            initChart: function() {
                if (this.chart) {
                    this.chart.destroy();
                }
                this.chart = new Chart(this.$refs.chartCanvas.getContext('2d'), {
                    type: 'line', // or whatever type you're using
                    data: {
                        labels: this.labels,
                        datasets: [{
                            data: this.values,
                            // ... other dataset properties ...
                        }]
                    },
                    // ... other chart options ...
                });
            }
        };
    }
</script>
