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
  <title>Eduardo Kobra</title>
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
        <img src="artprof8.jpg" alt="Generic placeholder image" class="img-fluid" width="350">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0">Eduardo Kobra </h1>
        <h4>(Born 1975) </h4>
        <p>Eduardo Kobra, is a highly influential Brazilian street artist renowned for his spectacular large-scale
          murals that grace urban landscapes around the world. His artistic signature involves a captivating blend of
          intricate geometric designs and vivid, hyper-realistic portraiture. Kobra's creations often serve as powerful
          tributes to cultural luminaries, historical figures, and pressing social themes. Beyond their aesthetic
          appeal, his artworks possess a profound ability to stir emotions and provoke contemplation. Kobra's global
          footprint in the street art scene is evident through his murals which adorn major cities across continents,
          solidifying his legacy as a pivotal figure in contemporary urban art. His contributions have not only
          transformed the visual landscape of urban environments but have also sparked meaningful conversations about
          culture, history, and societal issues.</p>
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
              <img src="a8work2.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Genial is riding a bike" (2017)</h5>
            <p class="card-text">"Genial is riding a bike" is a contemporary artwork that likely explores the theme of
              geniality and its connection to the act of riding a bicycle. Created by an unknown artist, this piece may
              employ various artistic techniques to convey its message. The title suggests a playful and light-hearted
              tone, implying that there is a certain brilliance or ingenuity associated with the simple act of riding a
              bike. The artwork might utilize vibrant colors, dynamic composition, or abstract elements to evoke a sense
              of movement and vitality. Through its visual representation, "Genial is riding a bike" invites viewers to
              contemplate the joyful and liberating experience of cycling, perhaps drawing parallels between this
              activity and the broader notion of geniality in life. The piece serves as a testament to the ability of
              everyday actions to inspire moments of brilliance and creativity.</p>
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
              <img src="a8work1.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"The Times They Are A-Changin" (2013)</h5>
            <p class="card-text">"The Times They Are A-Changin" (2013) is a contemporary artwork that draws inspiration
              from the eponymous song by the legendary musician Bob Dylan. Created by an unnamed artist, this piece
              encapsulates the spirit of change and transformation that permeates both the song and the broader cultural
              and social landscape. The artwork likely seeks to capture the zeitgeist of the era, echoing Dylan's call
              for societal evolution and progress. Through its visual representation, "The Times They Are A-Changin'"
              serves as a poignant reminder of the enduring relevance and influence of Dylan's music, which continues to
              resonate with audiences across generations. The piece may employ a variety of artistic techniques and
              styles to convey its message, paying tribute to the powerful impact of Dylan's lyrics and music on the
              collective consciousness.</p>
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
              <img src="a8work3.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Oscar Niemeyer"(2017)</h5>
            <p class="card-text">"Oscar Niemeyer" is a striking mural created by the renowned Brazilian street artist
              Eduardo Kobra. This colorful masterpiece pays homage to the legendary Brazilian architect Oscar Niemeyer,
              known for his innovative and futuristic designs. The mural captures Niemeyer's distinct style,
              characterized by flowing curves and bold, organic forms. Located in São Paulo, Brazil, Kobra's tribute not
              only celebrates Niemeyer's architectural contributions but also serves as a vibrant testament to the rich
              cultural heritage of Brazil. The mural's vivid colors and dynamic composition make it a standout piece in
              Kobra's extensive portfolio, showcasing his ability to merge art, architecture, and cultural identity in a
              visually captivating manner.</p>
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
              <img src="a8work4.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"The Kiss"(2016)</h5>
            <p class="card-text">"The Kiss" by Eduardo Kobra is a breathtaking mural inspired by Gustav Klimt's iconic
              masterpiece of the same name. Located in San Francisco, California, Kobra's interpretation is a vibrant
              and dynamic tribute to the original artwork. The mural beautifully captures the essence of Klimt's
              masterpiece, featuring intertwined figures in a passionate embrace, surrounded by a whirlwind of patterns
              and vivid colors. Kobra's distinctive style, characterized by bold lines and intricate details, brings a
              fresh perspective to this timeless image, making it accessible to a new audience. The mural stands as a
              testament to the enduring power of love and human connection, celebrated through the lens of two masterful
              artists across different eras and styles.</p>
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