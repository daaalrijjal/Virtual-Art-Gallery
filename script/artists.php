<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        h1 {
            color: #ffffff;
            font-family: times New Roman;
            font-size: 45px;
        }

        h4 {
            color: #ffffff;
            font-family: times New Roman;
            font-size: 25px;
        }
        h2{
            box-sizing: border-box;
            font-family: 'Lato', snas-serif;
        }

        .container {
            max-width: 1900px;
        }

        .head {
            padding-top: 70px;
            padding-bottom: 40px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .wrapper {

            padding: 50px;

        }

        .card {
            background-color: rgba(108, 88, 76, 0.7);
            padding: 2rem;
            height: 450px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
            transition: 0.5s ease-in-out;
        }

        .card:hover {
            transform: translateY(20px);
        }

        .card:hover img {
            opacity: 0.5;
        }

        .card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            z-index: 2;
            transition: 0.5s all;
            opacity: 0;
        }

        .card:hover:before {
            opacity: 0;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
            transition: opacity 0.5s ease-in-out;
        }


        .card .info {
            position: relative;
            z-index: 3;
            color: #ffffff;
            opacity: 0;
            transform: translateY(30px);
            transition: 0.5s all;
            padding: 10px;
        }

        .card:hover .info {
            opacity: 1;
            transform: translateY(0px);
        }

        .card .info h1 {
            margin: 0;
        }

        .card .info p {
            letter-spacing: 1px;
            font-size: 15px;
            margin-top: 8px;
            margin-bottom: 20px;
        }

        .card .info .btn {
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-color: #ffffff;
            color: #FFFFFF;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.4s ease-in-out;
        }

        .card .info .btn:hover {
            background-color: #6c584c;
            color: #FFFFFF;
            border: none;
        }

        @media (max-width: 765px) {
            h1 {
                font-size: 30px;
            }

            h4 {
                font-size: 20px;
            }

            .head {
                padding: 20px;
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
    <title>Artists</title>
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
    <header class="head">
        <h1>Featured Artists</h1>
        <h4>Explore a curated selection of artists whose works have left an indelible mark on the world of art. </h4>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist1.jpg">
                        <div class="info">
                            <h2> Hieronymus Bosch (1450-1516)</h2>
                            <a href="artist1.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist4.jpg">
                        <div class="info">
                            <h2>Andy Warhol (1928-1987)</h2>
                            <a href="artist4.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist7.jpg">
                        <div class="info">
                            <h2> Banksy (Active since early 2000s)</h2>
                            <a href="artist7.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist10.jpg">
                        <div class="info">
                            <h2>Damien Hirst (Born 1965)</h2>
                            <a href="artist10.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist13.jpg">
                        <div class="info">
                            <h2>Wassily Kandinsky (1866-1944)</h2>
                            <a href="artist13.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist16.jpg">
                        <div class="info">
                            <h2> Dorothea Lange (1895-1965)</h2>
                            <a href="artist16.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist2.jpg">
                        <div class="info">
                            <h2>Richard Dadd (1817-1886)</h2>
                            <a href="artist2.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist5.jpg">
                        <div class="info">
                            <h2>Roy Lichtenstein (1923-1997)</h2>
                            <a href="artist5.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist8.jpg">
                        <div class="info">
                            <h2>Eduardo Kobra (Born 1975)</h2>
                            <a href="artist8.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist11.jpg">
                        <div class="info">
                            <h2>Chris Ofili (Born 1968)</h2>
                            <a href="artist11.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist14.jpg">
                        <div class="info">
                            <h2>Jackson Pollock (1912-1956)</h2>
                            <a href="artist14.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist17.jpg">
                        <div class="info">
                            <h2> Ansel Adams (1902-1984)</h2>
                            <a href="artist17.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist3.jpg">
                        <div class="info">
                            <h2> Brian Froud (Born 1947 )</h2>
                            <a href="artist3.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist6.jpg">
                        <div class="info">
                            <h2>Claes Oldenburg (Born 1929)</h2>
                            <a href="artist6.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist9.jpg">
                        <div class="info">
                            <h2> Keith Haring (1958-1990)</h2>
                            <a href="artist9.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="card ">
                        <img src="artist12.jpg">
                        <div class="info">
                            <h2>Jenny Saville (Born 1970)</h2>
                            <a href="artist12.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist15.jpg">
                        <div class="info">
                            <h2>Kazimir Malevich (Born 1929)</h2>
                            <a href="artist15.php" class="btn">Read More</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="wrapper">
                    <div class="card ">
                        <img src="artist18.jpg">
                        <div class="info">
                            <h2> Cindy Sherman (Born 1954)</h2>
                            <a href="artist18.php" class="btn">Read More</a>
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