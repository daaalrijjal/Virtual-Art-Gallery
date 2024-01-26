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
      font-size: 20px;
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
      width: 100%;
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
  <title>Ansel Adams</title>
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
        <img src="artprof17.jpg" alt="Generic placeholder image" class="img-fluid" width="400">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0">Ansel Adams </h1>
        <h4>(1902-1984) </h4>
        <p>Ansel Adams was a pioneering American photographer celebrated for his striking black-and-white captures of
          the American West. With a deep reverence for nature and an exacting eye for detail, he produced enduring
          images that stand as some of the most remarkable in photographic history. Adams also played a pivotal role in
          the realm of conservation photography, using his art to advocate for the protection of wilderness areas. His
          renowned work, "Moonrise, Hernandez, New Mexico" (1941), showcases a picturesque village set against a
          dramatic sky, with the moon ascending over a majestic mountain range, emblematic of the American landscape.
          Adams' unparalleled technical skill, compositional mastery, and darkroom expertise set a standard of
          excellence in photography, leaving an indelible mark on the global photographic community.</p>
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
              <img src="a17work1.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Moonrise, Hernandez, New Mexico"(1941)</h5>
            <p class="card-text">"Moonrise, Hernandez, New Mexico" is a renowned black-and-white photograph captured by
              the iconic American landscape photographer Ansel Adams in 1941. The image depicts a small village in New
              Mexico under a dramatic sky with the moon rising above distant mountains. Adams' meticulous use of light
              and shadow, coupled with his technical expertise, imbues the photograph with a profound sense of depth and
              atmosphere. This photograph is celebrated for its masterful composition and emotional resonance, making it
              one of the most recognizable and cherished works in the history of photography. "Moonrise, Hernandez, New
              Mexico" stands as a testament to Adams' extraordinary skill in capturing the sublime beauty of the natural
              world through the lens of his camera.</p>
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
              <img src="a17work2.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Clearing Winter Storm" (1944)</h5>
            <p class="card-text">"Clearing Winter Storm" is a renowned black-and-white landscape photograph captured by
              the celebrated American photographer Ansel Adams. The image is part of Adams' iconic portfolio showcasing
              the grandeur of Yosemite National Park in California. In this particular photograph, Adams skillfully
              captures a dramatic moment as a winter storm dissipates, revealing the rugged beauty of the landscape
              beneath. The interplay of light and shadow, combined with the majestic natural elements, creates a
              striking visual contrast. "Clearing Winter Storm" is celebrated for its meticulous composition and Adams'
              ability to convey a profound sense of awe and reverence for the natural world. This photograph stands as a
              testament to Ansel Adams' mastery in capturing the sublime essence of the American wilderness.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5">
        <div class="card">
          <div class="iframe-container">
            <<div class="scrollable-content">
              <div class="overlay" id="overlay">
                <div class="overlay-content">
                  <p>scroll through the artwork to enhance your viewing experience </p>
                </div>
              </div>
              <img src="a17work3.jpg" class="card-img-top" alt="Image 1">
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">"Jeffrey Pine Sentinel Dome"(1940)</h5>
          <p class="card-text">"Jeffrey Pine Sentinel Dome" is a renowned black-and-white photograph captured by the
            celebrated American photographer Ansel Adams. The image features a solitary Jeffrey Pine tree standing
            resiliently atop Sentinel Dome in Yosemite National Park, California. Adams' meticulous composition
            highlights the tree's intricate details against the backdrop of a vast and dramatic landscape. The
            photograph is revered for its ability to convey a sense of enduring strength and natural beauty, as well
            as Adams' exceptional skill in capturing the essence of the American wilderness. "Jeffrey Pine Sentinel
            Dome" remains an iconic representation of Adams' dedication to preserving the majesty of the natural world
            through his lens.</p>
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
            <img src="a17work4.jpg" class="card-img-top" alt="Image 2">
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">"Monolith, the Face of Half Dome, Yosemite National Park" (1927)</h5>
          <p class="card-text">"Monolith, the Face of Half Dome, Yosemite National Park" is a seminal photograph by
            the renowned American photographer Ansel Adams. This iconic image showcases the majestic Half Dome, an
            imposing granite formation in Yosemite National Park, California. Adams' masterful use of light and shadow
            brings out the intricate textures and rugged beauty of the rock face, while the surrounding landscape adds
            a sense of scale and awe. This photograph is celebrated for its impeccable composition and Adams' ability
            to capture the grandeur of the natural world. It remains a testament to Adams' enduring legacy as a
            pioneer in landscape photography.</p>
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