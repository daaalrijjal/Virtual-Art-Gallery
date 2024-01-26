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
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .custom-link {
      font-size: 20px;
      color: #ffffff;
      text-decoration: none;
      font-family: times New Roman;
    }

    .container-fluid1 {
      background-color: rgba(108, 88, 76, 0.7);
      margin-bottom: 140px;
      margin-top: 120px;
      max-width: 1500px;
      width: 95%;
      border-radius: 5px;
      margin-left: auto;
      margin-right: auto;
    }


    .container.p-3 {
      max-width: 1500px;
      margin: 0 auto;
    }


    h1 {
      color: #ffffff;
      font-family: times New Roman;
      font-size: 45px;
    }

    h4 {
      color: #ffffff;
      font-family: times New Roman;
      font-size: 22px;
    }

    p {
      font-family: times New Roman;
      color: #ffffff;
      font-size: 22px;
    }

    * {
      box-sizing: border-box;
      font-family: 'Lato', snas-serif;
    }

    .wrapper {
      justify-content: space-around;
      padding: 15px;

    }

    .card {
      width: 100%;
      height: 360px;
      padding: 2rem;
      background: #fff;
      position: relative;
      display: flex;
      align-items: flex-end;
      box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
      transition: 0.5s ease-in-out;
      background-color: rgba(108, 88, 76, 0.7);
      margin-bottom: 10px;
      flex-direction: column;
      position: relative;
      overflow: hidden;

    }

    .card:hover img {
      opacity: 0.5;
    }


    .card:hover {
      transform: translateY(20px);
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
      z-index: 3;
      color: #ffffff;
      opacity: 0;
      transform: translateY(30px);
      transition: 0.5s all;
      text-align: left;
      margin-right: auto;
      padding: 0 20px;
    }

    .card:hover .info {
      opacity: 1;
      transform: translateY(0px);
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

    @media (max-width: 766px) {
      .container-fluid1 {
        margin-bottom: 20px;
      }

      .card .info {
        font-size: 70px;
        text-align: left !important;
        padding: 0 20px;
      }

      h1 {
        font-size: 40px;
      }

      h4 {
        font-size: 20px;
      }

      .navbar-brand img {
        width: 140px;
      }

      .bottom-footer {
        padding: 20px;
        font-size: 13px;

      }

      .btn-floating {
        font-size: 10px;
      }

      .bottom-footer img {
        width: 70px;
      }
    }

    @media (max-width: 1200px) {

      .card .info {
        text-align: left !important;
        padding: 20px;
      }

      .card .info h2 {
        font-size: 25px;
      }

      .card .info .btn {
        size: 12px;
      }
    }
  </style>
  <title>Contemporary</title>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
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

  <div class="container-fluid1 p-5">
    <div class="row flex-lg-row flex-column">
      <div class="col-md-4 pt-3">
        <h1 class="mt-0">Contemporary Art</h1>
      </div>
      <div class="col-lg-8 pt-3">
        <p>Contemporary artwork encompasses the diverse and innovative expressions of artists living and working today.
          It reflects the dynamic nature of our global society, often pushing boundaries and challenging norms across
          various mediums. From painting to digital media and installations, it explores a range of themes, providing a
          snapshot of the ever-evolving world we live in.</p>
      </div>
    </div>
  </div>


  <div class="container p-3">
    <div class="row">
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a10work4.jpg" alt="image">
            <div class="info">
              <h2>"Spin" Series (1995)</h2>
              <a href="artist10.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a12work4.jpg" alt="image">
            <div class="info">
              <h2>"Oxyrhynchus" (2014-2015)</h2>
              <a href="artist12.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a11work4.jpg" alt="image">
            <div class="info">
              <h2>"The Holy Virgin Mary" (1996)</h2>
              <a href="artist11.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a10work3.jpg" alt="image">
            <div class="info">
              <h2>"The Virgin Mother" (2005-2006)</h2>
              <a href="artist10.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a12work3.jpg" alt="image">
            <div class="info">
              <h2>"Strategy" (1994)</h2>
              <a href="artist12.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a11work3.jpg" alt="image">
            <div class="info">
              <h2>"The Upper Room" (2002-2003)</h2>
              <a href="artist11.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a10work2.jpg" alt="image">
            <div class="info">
              <h2>"For the Love of God" (2007)</h2>
              <a href="artist10.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a12work2.jpg" alt="image">
            <div class="info">
              <h2>"Hyphen" (1999)</h2>
              <a href="artist12.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a11work2.jpg" alt="image">
            <div class="info">
              <h2>"Afrodizzia" (1996)</h2>
              <a href="artist11.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a10work1.jpg" alt="image">
            <div class="info">
              <h2>"The Physical Impossibility of Death in the Mind of Someone Living" (1991)</h2>
              <a href="artist10.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a12work1.jpg" alt="image">
            <div class="info">
              <h2>"Red Stare Head I" (2006)</h2>
              <a href="artist12.php" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wrapper">
          <div class="card">
            <img src="a11work1.jpg" alt="image">
            <div class="info">
              <h2>"No Woman, No Cry" (1998)</h2>
              <a href="artist11.php" class="btn">Read More</a>
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
            <button class="btn btn-outline-light btn-floating m-2"><i class="fab fa-facebook-f"></i></button>
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