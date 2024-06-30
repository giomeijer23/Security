<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <div class='banner'>
                <nav class="navbar" style="background-color: transparent;">
                    <img src="../../image/gm.jpeg" class="logo">
                    <ul>
                        <li><a href="/index">Home</a></li>
                        <li><a href="/profileFacts">Profile</a></li>
                        <li><a href="/dashboardFacts">Dashboard</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
            </div>
            </div>
        </nav>
    </header>

    </head>

    <body>
        <h2>ICT</h2>
        <div class="cijfertable">

            <table>
                <tr>
                    <th>Periode</th>
                    <th>Cursus</th>
                    <th>EC</th>
                    <th>Examen</th>
                    <th>Cijfer</th>

                </tr>
                <tr>
                    <td rowspan="6">1</td>
                    <td>Program- & Career Orientation (PCO)</td>
                    <td>2,5</td>
                    <td>Portfolio based assessment</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Computer Science Basics (CBA)</td>
                    <td>5</td>
                    <td>Written exam</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Programming Basics</td>
                    <td>5</td>
                    <td>Case study exam</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Personal professional development</td>
                    <td>12,5</td>
                    <td>Criterium focused assessment</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>IT Personality Projectweek 1</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>IT Personality 1</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td rowspan="1">2</td>
                    <td>Game Development</td>
                    <td>10</td>
                    <td>Presentation and Case study exam</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td rowspan="2">3</td>
                    <td>Framework development</td>
                    <td>5</td>
                    <td>Case study exam</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Framework Project 1</td>
                    <td>7,5</td>
                    <td>Criterium focused assessment</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td rowspan="3">4</td>
                    <td>Framework Project 2</td>
                    <td>10</td>
                    <td>Criterium focused assessment</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>IT Personality international week</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>IT Personality 2</td>
                    <td>1,25</td>
                    <td>Portfolio</td>
                    <td>10</td>
                </tr>
            </table>
        </div>

        <head>
    </body>
    <div class="grafiek">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script>
            /**
             * Sum elements of an array up to the index provided.
             */
            function sumArrayUpTo(arrData, index) {
                var total = 0;
                for (var i = 0; i <= index; i++) {
                    if (arrData.length > i) {
                        total += arrData[i];
                    }
                }
                return total;
            }

            function showBurnDown(elementId, burndownData, scopeChange = []) {

                var speedCanvas = document.getElementById(elementId);

                Chart.defaults.global.defaultFontFamily = "Arial";
                Chart.defaults.global.defaultFontSize = 14;

                const totalHoursInSprint = burndownData[0];
                const idealHoursPerDay = totalHoursInSprint / 9;
                i = 0;

                var speedData = {
                    labels: ['Periode 1', 'Periode 2', 'Periode 3', 'Periode 4'],
                    datasets: [
                        {
                            label: "Cijfer",
                            data: burndownData,
                            fill: false,
                            borderColor: "#EE6868",
                            backgroundColor: "#EE6868",
                            lineTension: 0,
                        },
                        {
                            label: "Ideal",
                            borderColor: "#6C8893",
                            backgroundColor: "#6C8893",
                            lineTension: 0,
                            borderDash: [5, 5],
                            fill: false,
                            data: [
                                11.25, // 1
                                22.50, // 2
                                33.75, // 3
                                45.00, // 4
                            ]
                        },
                    ]
                };

                var chartOptions = {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            boxWidth: 100,
                            fontColor: 'black'
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 60
                            }
                        }]
                    }
                };

                var lineChart = new Chart(speedCanvas, {
                    type: 'line',
                    data: speedData,
                    options: chartOptions
                });

            }
        </script>
        </head>

        <body>

            <div style="width:800px;"><canvas id="burndown43"></canvas></div>
            <script>
                showBurnDown(
                    "burndown43",
                    //   1    2    3    4    5    6    7    8    9   10
                    [0, 0, 0, 0,], // Aantal EC punten behaald
                    [11, 25, 25, 5, 33, 75, 45, 60, 0, 0, 0, 0]  // Gemiddeld aantal punten behalen
                );
            </script>
    </div>
</body>

</html>
