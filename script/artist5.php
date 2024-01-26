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
      margin-bottom: 100px;
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
  <title>Roy Lichtenstein</title>
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
        <img src="artprof5.jpg" alt="Generic placeholder image" class="img-fluid" width="400">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0">Roy Lichtenstein </h1>
        <h4>(1923-1997)</h4>
        <p>Roy Lichtenstein was an American pop artist known for his distinctive comic book-inspired style. He gained
          prominence in the 1960s for his large-scale reproductions of comic book panels, often featuring bold, primary
          colors and the use of Ben-Day dots, a printing technique used in comic books. Lichtenstein's work is
          characterized by its exploration of popular culture, consumerism, and the visual language of mass media. One
          of his most iconic works is "Whaam!" (1963), a diptych painting that depicts an aircraft firing a rocket. This
          piece exemplifies Lichtenstein's ability to transform mundane, everyday images into high art through his
          distinctive style.
          Throughout his career, Lichtenstein's art evolved beyond comic book themes, and he explored various other
          subjects and artistic techniques. He created pieces inspired by art history, including reinterpretations of
          famous works by artists like Picasso and Monet.Roy Lichtenstein's contributions to the art world continue to
          be celebrated for their wit, commentary on popular culture, and innovative use of techniques borrowed from
          mass media. His legacy has left an indelible mark on the world of contemporary art.</p>
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
              <img src="a5work1.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Drowning Girl" (1963) </h5>
            <p class="card-text">"Drowning Girl" is a renowned painting created by the American pop artist Roy
              Lichtenstein. Part of his iconic "Drowning Girl" series, the artwork is characterized by its bold, comic
              book-style imagery. The painting features a distressed woman in distress floating in water, her speech
              bubble expressing anguish. Lichtenstein's use of Ben-Day dots and thick black lines reflects the influence
              of comic book art and popular culture, a hallmark of the Pop Art movement. The piece is not just a
              representation of a melodramatic scene but also a commentary on the emotional intensity and artificiality
              of popular media. "Drowning Girl" exemplifies Lichtenstein's unique approach to art, which sought to
              elevate the mundane and the commercial into high art.</p>
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
              <img src="a5work2.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Whaam!" (1963)</h5>
            <p class="card-text">"Whaam!" is a famous painting created by the American pop artist Roy Lichtenstein. This
              iconic artwork is one of Lichtenstein's most celebrated pieces and exemplifies his signature style, which
              draws inspiration from comic book imagery. "Whaam!" portrays an explosive scene of an aircraft being shot
              down in a dramatic, larger-than-life manner. The use of Ben-Day dots, bold lines, and vibrant primary
              colors reflects Lichtenstein's fascination with popular culture and commercial art. The piece is not just
              a representation of a high-impact moment but also a reflection on the role of art and its intersection
              with mass media. "Whaam!" remains a quintessential example of Lichtenstein's unique approach to blending
              fine art with elements of everyday life and entertainment.</p>
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
              <img src="a5work3.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Hopeless" (1963)</h5>
            <p class="card-text">"Hopeless" (1963) is a significant painting by the American artist Roy Lichtenstein, a
              prominent figure in the Pop Art movement. This artwork features a despondent woman, portrayed in
              Lichtenstein's characteristic comic book style, with her speech bubble containing the word "Hopeless." The
              painting is a commentary on the emotional intensity and melodrama often depicted in popular comic book
              narratives. Lichtenstein's use of Ben-Day dots, bold lines, and primary colors, typical of comic book art,
              emphasizes the emotional impact of the scene while simultaneously challenging the boundary between high
              art and popular culture. "Hopeless" is a prime example of Lichtenstein's ability to capture both the
              superficial and profound aspects of everyday life, making it a noteworthy work within the Pop Art
              movement.</p>
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
              <img src="a5work4.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Oh,Jeff...I Love You,Too...But..." (1964)</h5>
            <p class="card-text">"Oh, Jeff...I Love You, Too...But..." (1964) is a notable painting by the American pop
              artist Roy Lichtenstein. This artwork is part of his series that reinterprets romance and relationship
              scenes in a comic book style. In this painting, a distressed woman with a speech bubble exclaims her love
              for Jeff but expresses reservations with the added "But..." Lichtenstein's use of Ben-Day dots, bold
              lines, and primary colors highlights the emotional tension within the scene. Through this work,
              Lichtenstein both pays homage to and parodies the clichés of romantic narratives, offering a critical
              commentary on the idealized images of love found in popular culture. "Oh, Jeff...I Love You, Too...But..."
              is a prime example of Lichtenstein's ability to extract complex emotions from seemingly superficial
              sources, making it a noteworthy contribution to the Pop Art movement.</p>
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