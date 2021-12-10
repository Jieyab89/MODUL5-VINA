<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- FOOTER LOPE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Home</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav  mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Booking.php">VACCINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Booking.php">PATIENT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="card-footer nt-auto text-center bg-white border-0" data-bs-toggle="modal" data-bs-target="#footer" style="margin-top:27%">
        <div class="container-fluid text-center">
            <p>Made With <i class="bi bi-heart-fill" style="color:rgb(0, 111, 255);"></i> by Vina Fadillah_1202194208</p>
        </div>
    </footer>
