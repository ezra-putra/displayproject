<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
    <style>
        .no-space {
            margin: 0;
            padding: 0;
        }
        .card-body-custom {
            padding: 0.5rem 1rem;
        }
        .card {
            border-radius: 0;
        }
        .body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid no-space">
        <div class="row no-space">
            <div class="col-md-6 no-space">
                <div class="card" style="background-color: rgb(62, 62, 252)">
                    <div class="card-body card-body-custom">
                        <div class="p-3 m-1 ms-4">
                            <h1 style="color: white; font-family:Anton SC">TODAY SCHEDULE</h1>
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 id="date" style="color: lightseagreen; font-family:Anton SC"></h3>
                                </div>
                                <div class="col-md-3">
                                    <h3 id="time" style="color: lightseagreen; font-family:Anton SC"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card no-space body">
                    <div class="card-body card-body-custom" style="background-color: rgb(49, 49, 49);">
                        <div class="p-3 m-1 ms-4">
                            @foreach ($event as $e)
                            <h2 style="color: lightseagreen; font-family:Anton SC">{{ $e->name }}</h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="color: white; font-family:Anton SC">{{ $e->room }}</h4>
                                </div>
                                <div class="col-md-4">
                                    <h4 style="color: white; font-family:Anton SC">{{ \Carbon\Carbon::parse($e->timestart)->format('H:i') }} - {{ \Carbon\Carbon::parse($e->timeend)->format('H:i') }} WIB</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-space" >
                <div class="card body">
                    <div class="card-body card-body-custom">
                        <img src="#" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function updateClock() {
        var now = new Date();
        var hours = String(now.getHours()).padStart(2, '0');
        var minutes = String(now.getMinutes()).padStart(2, '0');
        var seconds = String(now.getSeconds()).padStart(2, '0');
        var currentTime = hours + ':' + minutes + ':' + seconds;

        var day = String(now.getDate()).padStart(2, '0');
        var monthNames = ['JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'];
        var month = monthNames[now.getMonth()];
        var year = now.getFullYear();
        var currentDate = day + ' ' + month + ' ' + year;

        document.getElementById('time').innerText = currentTime;
        document.getElementById('date').innerText = currentDate;
    }

    setInterval(updateClock, 1000);
    window.onload = updateClock;
</script>
</html>
