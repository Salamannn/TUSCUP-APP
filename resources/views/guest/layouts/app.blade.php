<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUS CUP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton+SC&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="bg-white ">
        <ul class="nav justify-content-center" style="font-family: Poppins">
            <li class="nav-item mt-3">
                <a class="nav-link fs-5 text-dark" href="/jadwal">Jadwal</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-5 text-dark" href="#">Profil Tim</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link fs-1 text-dark " style="font-family: Anton SC" href="/">
                    <suradib style="color: #AA0000"> TUS </suradib> CUP
                </a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-5 text-dark  " href="/grup">Klasemen</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link fs-5 text-dark" href="/bracket">Bagan</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    <footer class="bg-dark">
        <div class="container p-2 py-4">
            <div class="row bg-dark">
                <div class="col-auto text-light fs-3  border-end" style="font-family: Anton SC;">
                    <span style="color: #FB5353;"> TUS </span>CUP
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
