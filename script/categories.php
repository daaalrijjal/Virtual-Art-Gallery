<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 400px;
            padding-left: 70px;
        }

        .container1 {
            padding-top: 150px;
            padding-left: 80px;
            padding-bottom: 100px;
        }

        .containersm {
            background-color: rgba(108, 88, 76, 0.7);
            width: 90%;
            box-sizing: border-box;
            margin: 10px auto;
            padding: 10px;
        }

        h1 {
            font-family: Times, serif;
            font-size: 45px;
            color: #ffffff;
        }

        h5 {
            color: #fff;
            font-family: Times, serif;
            padding:10px;

        }

        .card {
            width: 100%;
            height: 330px;
            display: inline-block;
            border-radius: 10px;
            box-sizing: border-box;
            cursor: pointer;
            margin-bottom: 20px;
            background-position: center;
            background-size: cover;
            transition: tranform 0.5s;

        }

        .card1 {
            background-image: url("street.jpg");
        }

        .card2 {
            background-image: url("pop.jpg");
        }

        .card3 {
            background-image: url("contemp.jpg");
        }

        .card4 {
            background-image: url("abstract.jpg");
        }

        .card5 {
            background-image: url("fantasy.jpg");
        }

        .card6 {
            background-image: url("photo.jpg");
        }

        .card:hover {
            transform: translateY(-10px);

        }

        @media (max-width: 766px) {
            .container {
                padding-top: 50px;
                padding-left: 10px;
                padding-bottom: 10px;
            }

            .container1 {
                padding-top: 50px;
                padding-left: 10px;
                padding-bottom: 10px;
            }


            h1 {
                font-size: 25px;
            }

            h5 {
                font-size: 20px;
            }

            .navbar-brand img {
                width: 140px;
            }

            .bottom-footer {
                padding: 15px;
                font-size: 13px;

            }

            .btn-floating {
                font-size: 10px;
            }

            .bottom-footer img {
                width: 70px;
            }
        }
    </style>
    <title>Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="museo.png" width="180" alt="logo" class="d-inline-block align-top p-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="artists.php">Artists</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Artworks
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="contemporary.php">Contemporary</a></li>
                        <li><a class="dropdown-item" href="popart.php">Pop Art</a></li>
                        <li><a class="dropdown-item" href="streetart.php">Street Art</a></li>
                        <li><a class="dropdown-item" href="photography.php">Photography</a></li>
                        <li><a class="dropdown-item" href="abstract.php">Abstract</a></li>
                        <li><a class="dropdown-item" href="fantasy.php">Fantasy</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="categories.php">View all</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
            </li>
            </ul>
            <div class="search-container">
                <form class="d-flex autocomplete">
                    <input  id="searchBoxInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <script src="autoComp.js"></script>
                    <link rel="stylesheet" type="text/css" href="autoComp.css" /> 
                </form>
            </div>
        </div>
    </div>
</nav>

<body>
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <h1 class="display-4">Browse by Catergory</h1>
            </div>
        </div>

        <div class="col-md-8">
            <div class="container1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="streetart.php">
                                <div class="card card1 ">
                                    <h5>Street Art</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="popart.php">
                                <div class="card card2">
                                    <h5>Pop Art</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="contemporary.php">
                                <div class="card card3">
                                    <h5>Contemporary</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="abstract.php">
                                <div class="card card4">
                                    <h5>Abstract</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="fantasy.php">
                                <div class="card card5">
                                    <h5>Fantasy</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="containersm">
                            <a href="photography.php">
                                <div class="card card6">
                                    <h5>Photography</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  bottom-footer text-center">
        <div class="col-md-4 text-center">
            <span class="text-muted">© 2023 Museo, Inc</span>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <a href="/" class="text-muted text-decoration-none">
                <img src="museo.png" alt="Your Logo" width="100">
            </a>
        </div>

        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <ul class="nav list-unstyled d-flex">
                <li>
                    <form action="#!">
                        <button class="btn btn-outline-light btn-floating m-2"><i
                                class="fab fa-facebook-f"></i></button>
                    </form>
                </li>
                <li>
                    <form action="#!">
                        <button class="btn btn-outline-light btn-floating m-2"><i class="fab fa-instagram"></i></button>
                    </form>
                </li>
                <li>
                    <form action="#!">
                        <button class="btn btn-outline-light btn-floating m-2"><i class="fab fa-google"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>