 <div style="background: linear-gradient(0deg, rgba(255,251,251,1) 0%, #8cc454 50%);height: 100px"></div>
<div class="container" style="height: 200px;position: relative;height: 100px">
	<canvas id="myChart"></canvas>
</div>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Januari 2021', 'Februari 2021', 'Maret 2021', 'April 2021', 'Mei 2021'],
        datasets: [{
            label: 'Jumlah Pengunjung',
            data: [3, 7, 5, 4, 9],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                '#8cc454'
            ],
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
</script>