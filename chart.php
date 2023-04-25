<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        const yValues = [60000, 59000, 59000, 60000, 57999, 57000, 54600];
        const xValues = ["28 Days","21 Days","14 Days","7 Days","Today"];
        // const xValues = [13,14,15,16,17,18,19];

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
                            min: 50000,
                            max: 65000
                        }
                    }],
                }
            }
        });
    </script>

</body>