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
  <title>Jenny Saville</title>
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
        <img src="artprof12.jpg" alt="Generic placeholder image" class="img-fluid" width="400">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0"> Jenny Saville </h1>
        <h4>(Born 1970)</h4>
        <p>Jenny Saville is a renowned British contemporary artist celebrated for her striking explorations of the human
          body. Her artworks delve into the complexities of anatomy and challenge conventional perceptions of beauty.
          Saville's distinctive style often features exaggerated and distorted figures, conveying a raw and visceral
          intensity. Through meticulous brushwork and texture, she brings a sculptural quality to her paintings. Drawing
          inspiration from diverse sources, including medical illustrations and historical art, Saville's work
          transcends traditional boundaries. Her impactful contributions to the art world have earned her global
          recognition, and her pieces grace esteemed collections worldwide. Saville remains a significant force in
          contemporary art, provoking contemplation on the essence of human existence.</p>
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
              <img src="a12work1.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Red Stare Head I"(2006)</h5>
            <p class="card-text">"Red Stare Head I" is a captivating artwork created by the renowned British artist
              Jenny Saville in the year 2006. This powerful painting is part of Saville's celebrated body of work that
              explores themes of identity, body image, and the human form. The piece is characterized by its striking
              portrayal of a human head, rendered with a vivid palette of red tones. Through Saville's distinctive
              brushwork and meticulous attention to detail, the painting exudes a visceral and raw quality, inviting
              viewers to engage with the intensity of the subject's gaze. "Red Stare Head I" exemplifies Saville's
              mastery in capturing the complexities of human existence and invites contemplation on the multifaceted
              nature of individuality and perception. This artwork stands as a testament to Saville's significant
              contributions to the contemporary art world.</p>
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
              <img src="a12work2.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Hyphen" (1999)</h5>
            <p class="card-text">"Hyphen" by Jenny Saville is a masterful exploration of the human form, emblematic of
              Saville's distinctive style. Known for her unapologetic portrayal of the body, Saville's "Hyphen"
              captivates with its raw intensity and meticulous attention to detail. The painting zooms in on a torso,
              revealing a dynamic interplay of light and shadow that imbues the figure with a striking sense of
              presence. What sets "Hyphen" apart is Saville's ability to delve into the physicality of the body, subtly
              hinting at the intricate connections and divisions that define human existence. With this work, Saville
              invites viewers to contemplate the complexities and nuances of the human form in a way that is both
              visceral and intellectually stimulating, showcasing her mastery of the art form.</p>
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
              <img src="a12work3.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Strategy" (1994)</h5>
            <p class="card-text">"Strategy" is a notable artwork created in 1994 by the renowned British artist Jenny
              Saville. This painting is a part of Saville's critically acclaimed body of work that often delves into
              themes related to the human body, identity, and societal perceptions. "Strategy" is characterized by
              Saville's distinctive and powerful brushwork, which conveys a sense of raw physicality and emotional
              depth. The piece showcases a captivating composition that challenges conventional representations of the
              human form, inviting viewers to contemplate the complexities of self-image and the ever-evolving nature of
              personal identity. "Strategy" is a testament to Saville's ability to provoke thought and spark dialogue
              through her evocative and thought-provoking art. It remains an important piece in the artist's portfolio,
              contributing to her significant impact on the contemporary art landscape.</p>
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
              <img src="a12work4.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Oxyrhynchus" (2014-2015)</h5>
            <p class="card-text">"Oxyrhynchus" is a notable artwork created by the accomplished contemporary artist
              Jenny Saville between the years 2014 and 2015. This compelling piece is part of Saville's renowned body of
              work that delves into themes of human anatomy, identity, and the multifaceted nature of beauty. The
              artwork is characterized by its meticulous and detailed portrayal of the human form, showcasing Saville's
              exceptional technical skill and profound understanding of the human body. "Oxyrhynchus" invites viewers to
              contemplate the intricacies of physicality and challenges conventional notions of beauty by presenting a
              raw and unflinching representation of the human figure. Through this artwork, Saville prompts a deeper
              exploration of the complexities and vulnerabilities that define our existence. "Oxyrhynchus" stands as a
              testament to Saville's significant influence in the contemporary art landscape.</p>
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