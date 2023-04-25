<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        const yValues = [38990, 36500, 37990, 34990, 30299];
        const xValues = ["28 Days","21 Days","14 Days","7 Days","Today"];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 28000,
                            max: 40000
                        }
                    }],
                }
            }
        });
    </script>

</body>