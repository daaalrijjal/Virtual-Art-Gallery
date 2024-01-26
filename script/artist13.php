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
  <title>Wassily Kandinsky </title>
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
    <div class="row ">
      <div class="col-md-3">
        <img src="artprof13.jpg" alt="Generic placeholder image" class="img-fluid" width="320">
      </div>
      <div class="col-md-8 pr-5">
        <h1 class="mt-0">Wassily Kandinsky </h1>
        <h4> (1866-1944)</h4>
        <p>Wassily Kandinsky was a pioneering Russian painter and art theorist known for his pivotal role in the
          development of abstract art. Born in Moscow, Kandinsky's encounter with French Impressionist paintings ignited
          his passion for art, leading him on a transformative artistic journey. From early figurative works influenced
          by Impressionism and Fauvism, he evolved to pioneer "non-objective art," believing that art should evoke
          emotions and spiritual experiences through color and form. His seminal book "Concerning the Spiritual in Art"
          (1910) and founding role in the Blue Rider movement profoundly influenced modern art, and his legacy endures
          in major museums worldwide.</p>
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
              <img src="a13work1.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Composition VII" (1913)</h5>
            <p class="card-text">"Composition VII" is a groundbreaking abstract painting created by the Russian artist
              Wassily Kandinsky in 1913. It stands as one of the most iconic works of the Abstract Art movement. This
              masterpiece is characterized by its dynamic use of color, shape, and form, and is often regarded as a
              pinnacle of Kandinsky's non-representational style. "Composition VII" eschews recognizable imagery in
              favor of a purely emotional and spiritual expression through color and form. The painting is a symphony of
              swirling lines, bold geometric shapes, and vibrant hues, creating a sense of movement and rhythm on the
              canvas. Kandinsky believed that color and form could convey profound spiritual truths and emotions, and
              "Composition VII" exemplifies his belief in the transcendent power of abstract art. This work is
              considered a seminal piece in the history of abstract painting, influencing generations of artists and
              contributing to the development of modern art.</p>
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
              <img src="a13work2.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Yellow-Red-Blue" (1925)</h5>
            <p class="card-text">"Yellow-Red-Blue" is a significant abstract painting created by the renowned Russian
              artist Wassily Kandinsky in the year 1925. This iconic artwork is a vivid exemplification of Kandinsky's
              pioneering exploration of non-representational art, often associated with the movement known as Abstract
              Expressionism. "Yellow-Red-Blue" is characterized by its dynamic composition and bold use of primary
              colors, namely yellow, red, and blue, which are arranged in a striking geometric configuration. The
              painting exudes a sense of energy and movement, as shapes and colors interact with one another in a
              rhythmic and harmonious manner. Kandinsky, a pioneer of abstract art, believed that colors and shapes
              possessed their own inherent spiritual and emotional qualities, and he sought to convey these through his
              work. "Yellow-Red-Blue" remains a seminal piece in the evolution of abstract art, reflecting Kandinsky's
              profound influence on the trajectory of modern art in the 20th century.</p>
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
              <img src="a13work3.jpg" class="card-img-top" alt="Image 1">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"> "Black Lines"(1913)</h5>
            <p class="card-text">"Black Lines" is a significant abstract painting created by the Russian artist Kazimir
              Malevich . This iconic work is considered a cornerstone of the Suprematist movement, which Malevich
              pioneered. In "Black Lines," Malevich strips away representational elements, opting for pure abstraction.
              The canvas is dominated by a black square intersected by bold, dynamic lines. This composition reflects
              Malevich's vision of art as a departure from the material world into the realm of pure form and color.
              "Black Lines" symbolizes a paradigm shift in artistic expression, challenging conventional notions of
              representation and inviting viewers to engage with art on a more elemental level. It remains a touchstone
              of 20th-century abstract art, influencing generations of artists and leaving an enduring legacy in the
              annals of modern art history.</p>
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
              <img src="a13work4.jpg" class="card-img-top" alt="Image 2">
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">"Improvisation 31 (Sea Battle)" (1913)</h5>
            <p class="card-text">"Improvisation 31 (Sea Battle)" is a significant painting created by the renowned
              Russian artist Wassily Kandinsky in 1913. It is a seminal work from Kandinsky's abstract period, a
              movement he pioneered. The painting is characterized by its vibrant colors, dynamic shapes, and bold use
              of abstraction. "Improvisation 31" is believed to depict a tumultuous sea battle, although the forms are
              highly stylized and non-representational. Kandinsky believed that color and form could evoke emotions and
              spiritual experiences, and this painting exemplifies his belief in the power of abstract art to
              communicate on a deeply emotional level. The work is considered a masterpiece of early 20th-century
              abstraction and a testament to Kandinsky's revolutionary approach to art.</p>
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