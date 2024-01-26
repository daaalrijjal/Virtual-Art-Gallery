<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <script src="artists.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container-fluid1 {
      background-color: rgba(108, 88, 76, 0.7);
      max-width: 100%;
      margin-bottom: 20px;
      margin-top: 60px;
      margin-left: 5%;
      margin-right: 5%;
      box-sizing: border-box;
    }

    h2 {
      font-size: 30px;
      color: #ffffff;
      text-decoration: none;
      font-family: times New Roman;
    }

    p {
      color: #ffffff;
      font-size: 22px;
      font-family: times New Roman;
    }

    h1 {
      color: #ffffff;
      font-family: times New Roman;
    }

    h4 {
      color: #ffffff;
      font-family: times New Roman;
    }

    h5 {
      color: #ffffff;
      font-family: times New Roman;
      font-size: 22px;
    }

    h5.card-title {
      color: #ffffff;
      font-family: times New Roman;
      font-size: 35px;
    }

    .iframe-container {
      position: relative;
      width: 100%;
      height: 500px;
      overflow: auto;
      border-radius: 10px;
      padding: 25px;
    }


    ::-webkit-scrollbar {
      display: none;
    }

    .scrollable-content {
      display: inline-block;
      width: max-content;
    }

    .card-img-top {
      width: 120%;
      height: auto;
      max-width: none;
      max-height: none;
      transition: transform 0.3s ease-in-out;
      cursor: grabbing;
    }


    .card {
      background-color: rgba(108, 88, 76, 0.7);
      padding: 25px;
      transition: transform 0.3s ease-in-out;
      text-align: left;
      height: 100%;
    }

    .card:hover {
      transform: translateY(20px);
    }

    .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      transition: opacity 0.5s ease;
    }

    .overlay-content {
      padding-top: 200px;
      text-align: center;
      color: white;
    }

    @media (max-width: 1000px) {
      p {
        font-size: 18px;
      }

      h5 {
        font-size: 25px;
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
  </style>
  <title>Hieronymus Bosch </title>
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
          <input id="searchBoxInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <script src="autoComp.js"></script>
          <link rel="stylesheet" type="text/css" href="autoComp.css" />
        </form>
      </div>
    </div>
  </div>
</nav>

<body>
  <div class="container-fluid1 p-5">
    <div class="row">
      <div class="col-md-3">
        <img src="artprof1.jpg" alt="Generic placeholder image" class="img-fluid" width="400">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0">Hieronymus Bosch </h1>
        <h4>(1450-1516)</h4>
        <p>Hieronymus Bosch, born around 1450 in the Netherlands, was a visionary painter renowned for his intricate and
          fantastical artworks. His most iconic piece, "The Garden of Earthly Delights," showcases a triptych of
          paradise, earthly pleasures, and infernal torment, each panel teeming with an array of enigmatic creatures and
          intricate details. Bosch's style melded the surreal with the real, producing vivid and nightmarish imagery
          that conveyed profound moral and allegorical messages. Beyond this masterpiece, works like "The Temptation of
          St. Anthony" and "The Haywain Triptych" further exemplify his penchant for the bizarre and symbolic. While
          Bosch's life remains veiled in mystery, his enduring legacy as a pioneer of imaginative art continues to
          captivate audiences worldwide. His paintings serve as enduring reminders of the complexities of human
          existence, prompting contemplation and interpretation for generations to come.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid2 p-5">
    <h1 class="title p-2">Featured Artworks</h1>
    <div class="row">

      <div class="col-md-6 mb-5">
        <div class="card">
          <div class="iframe-container">
            <div class="scrollable-content">
              <div class="overlay" id="overlay">
                <div class="overlay-content">
                  <p>scroll through the artwork to enhance your viewing experience </p>
                </div>
              </div>
              <img src="a1work1.jpg" class="card-img-top" alt="Image 1">
            </div>

          </div>
          <div class="card-body">
            <h5 class="card-title">"The Garden of Earthly Delights" (c. 1490-1510)</h5>
            <p class="card-text">"The Garden of Earthly Delights," a triptych masterpiece by the Early Netherlandish
              artist Hieronymus Bosch, completed around 1490-1510, is an enigmatic and intricate exploration of
              humanity's moral and spiritual journey. The triptych unfolds a narrative that progresses from the creation
              of a paradisiacal Eden to the seductive allure of earthly pleasures in the central panel, and finally, to
              a nightmarish vision of hell on the right panel. Bosch's intricate and surreal imagery populates the
              painting with a fascinating array of fantastical creatures, bizarre landscapes, and intricate symbolism.
              The central panel, with its hedonistic revelry and sensual excesses, is particularly captivating. "The
              Garden of Earthly Delights" remains a celebrated testament to Bosch's creative genius and continues to
              captivate viewers with its timeless exploration of human desires, frailties, and moral complexities.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5">
        <div class="card">
          <div class="iframe-container">
            <div class="scrollable-content">
              <div class="overlay" id="overlay">
                <div class="overlay-content">
                  <p>scroll through the artwork to enhance your viewing experience </p>
                </div>
              </div>
              <img src="a1work2.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"The Temptation of St. Anthony" (c. 1495-1515)</h5>
            <p class="card-text">"The Temptation of St. Anthony," believed to be the work of the Early Netherlandish
              painter Hieronymus Bosch between 1495 and 1515, is an extraordinary and surreal portrayal of the spiritual
              trials faced by Saint Anthony, an esteemed Christian ascetic. This remarkable work immerses viewers in a
              nightmarish dreamscape filled with bizarre creatures, monstrous apparitions, and fantastical symbolism.
              The central panel, in particular, is a tumultuous spectacle of torment, showcasing St. Anthony's enduring
              struggle against earthly temptations. Bosch's meticulous attention to detail and his imaginative
              iconography make "The Temptation of St. Anthony" a masterpiece of the Northern Renaissance, offering
              profound insights into the realms of sin, virtue, and spiritual endurance. The painting's unique fusion of
              the spiritual and the grotesque has cemented its place as an enigmatic and thought-provoking artwork that
              continues to invite interpretation and contemplation.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5">
        <div class="card">
          <div class="iframe-container">
            <div class="scrollable-content">
              <div class="overlay" id="overlay">
                <div class="overlay-content">
                  <p>scroll through the artwork to enhance your viewing experience </p>
                </div>
              </div>
              <img src="a1work3.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"The Haywain Triptych" (c. 1510-1520)</h5>
            <p class="card-text">"The Haywain Triptych," attributed to the Early Netherlandish painter Hieronymus Bosch
              during the early 16th century, is a mesmerizing masterpiece that unfolds a multifaceted narrative of human
              folly, sin, and salvation. Comprising three panels, the central scene portrays a haywain drawn by demons,
              symbolizing the transient allure of earthly wealth and desires. The left panel depicts Eden in a state of
              innocence, while the right panel plunges into the chaotic depths of Hell. Bosch's meticulous attention to
              detail and his vivid imagination have rendered "The Haywain Triptych" a celebrated work of Northern
              Renaissance art, serving as a stark cautionary tale about the consequences of human avarice, carnal
              temptation, and sin. The painting's intricate symbolism and surreal imagery continue to captivate
              audiences, offering timeless insights into human nature and spirituality.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5">
        <div class="card">
          <div class="iframe-container">
            <div class="scrollable-content">
              <div class="overlay" id="overlay">
                <div class="overlay-content">
                  <p>scroll through the artwork to enhance your viewing experience </p>
                </div>
              </div>
              <img src="a1work4.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"The Last Judgment" (c. 1482-1516)</h5>
            <p class="card-text">"The Last Judgment," a monumental triptych by the Northern Renaissance artist
              Hieronymus Bosch, crafted over several years around 1482-1516, is an awe-inspiring portrayal of the final
              judgment as described in Christian theology. The central panel depicts Christ as the judge of all
              humanity, flanked by angels, saints, and the redeemed on one side, and the condemned and demonic forces on
              the other. The flanking panels provide intricate glimpses into the destinies of the blessed and the
              agonies of the damned. Bosch's work is celebrated for its nightmarish and detailed imagery, populated by
              fantastical and grotesque creatures, serving as a stark reminder of the consequences of human sin and the
              ultimate reckoning in the afterlife. "The Last Judgment" endures as a masterpiece rich in spiritual and
              moral themes, characterized by its symbolic depth and complexity, offering viewers profound reflections on
              its intricate narrative and allegorical significance.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.overlay').forEach(overlay => {
        overlay.style.opacity = 1;
        setTimeout(() => {
          overlay.style.opacity = 0;
        }, 7000);
      });
    });
  </script>

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