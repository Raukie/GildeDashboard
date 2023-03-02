<!DOCTYPE html>
<html lang="nl" style="width:100%;">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datacenter Dashboard</title>
    <!-- Guage Script Temp -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['', 21]
            ]);

            var options = {
                width: 400,
                height: 120,
                redFrom: 30,
                redTo: 40,
                yellowFrom: 25,
                yellowTo: 30,
                minorTicks: 5,
                max: 40
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

            chart.draw(data, options);

            setInterval(function() {
                data.setValue(0, 1, 18 + Math.round(6* Math.random()));
                chart.draw(data, options);
            }, 2000);
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <img src="GildeDataCentre.svg" class="logo">
                <button type="button" id="btnlogin" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="fa-solid fa-user-tie fa-2x"></i>
                </button>
        </div>
    </nav>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 mb-5">
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0" id="vertical-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Temperatuur</h1>
                        <p class="card-text"><div id="chart_div"></div></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0" id="vertical-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Deur 1</h1>
                        <h2 class="card-text">Status: Dicht</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" id="vertical-center">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Deur 2</h1>
                        <h2 class="card-text">Status: Dicht</h2>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label for="username">Gebuikersnaam</label>
                    <input type="text" class="form-control" id="username" required>
                </div>
                <div>
                    <label for="username">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuleer</button>
                <a href="admin/temperature.php" type="button" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</div>


    <script src="bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/34ccf65de0.js" crossorigin="anonymous"></script>
</body>
</html>