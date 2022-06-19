<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <title>PMB</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PMB Darurat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @auth
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Welcome Back, {{auth()->user()->name}}</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route ('dashboard')}}">My Dashboard</a>
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Setting</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route ('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit" ><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    @else
                    <a href="/login" class="btn btn-secondary my-2 my-sm-0" type="submit">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12 col-md-6 col-sm-2">
                <div class="row">
                    <div class="col-lg-6">
                        <h1> Selamat Datang </h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-primary mb-3" style="max-width: 20rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                            </div>
                        </div>
                        <div class="card border-primary mb-3" style="max-width: 20rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>