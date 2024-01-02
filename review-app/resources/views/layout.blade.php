<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-white">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/review" class="nav-link">FeedBack</a></li>
            </ul>
        </header>
    </div>

    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto text-white">
            @yield('title_exemple')
        </div>
    </div>
    @yield('nav_bar')

</body>

</html>
