<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    .custom-jumbotron {
      padding: 100px;
    }

    .btn-custom {
      border-color: #ffffff;
      color: #FFFFFF;
    }

    .btn-custom:hover {
      background-color: #6c584c;
      color: #FFFFFF;
    }

    h1 {
      font-family: Times, serif;
      font-size: 50px;
      color: #ffffff;
    }

    p.lead {
      font-size: 25px;
      color: #ffffff;
    }

    .title {
      margin-left: 140px;
      margin-top: 140px;
      font-family: Times, serif;
      font-size: 45px;
      color: #ffffff;
    }

    .container1 {
      max-width: 1600px;
      margin-left: auto;
      margin-right: auto;
    }

    .image-container {
      background-color: rgba(108, 88, 76, 0.7);
      border-radius: 10px;
      width: 700px;
      height: 480px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container1 .image-item {
      opacity: 1 !important;
      border-radius: 10px;
    }

    .slider-wrapper {
      position: relative;
      margin-bottom: 20px;
    }

    .slider-wrapper .slide-button {
      position: absolute;
      top: 50%;
      outline: none;
      border: none;
      height: 50px;
      width: 50px;
      z-index: 5;
      color: #fff;
      display: flex;
      cursor: pointer;
      font-size: 2.2rem;
      background: #fff;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transform: translateY(-50%);
    }

    .slider-wrapper .image-list {
      display: grid;
      grid-template-columns: repeat(10, 1fr);
      gap: 18px;
      font-size: 0;
      list-style: none;
      margin-bottom: 20px;
      overflow-x: auto;
      scrollbar-width: none;
    }

    .slider-wrapper .image-list::-webkit-scrollbar {
      display: none;
    }


    .slider-wrapper .image-list .image-item {
      width: 675px;
      height: 450px;
      object-fit: cover;
      opacity: 1;
    }

    .container .slider-scrollbar {
      height: 24px;
      width: 100%;
      display: flex;
      align-items: center;
      margin-bottom: 140px;
    }

    .slider-scrollbar .scrollbar-track {
      background: #ccc;
      width: 100%;
      height: 2px;
      display: flex;
      align-items: center;
      border-radius: 4px;
      position: relative;
    }

    .slider-scrollbar:hover .scrollbar-track {
      height: 4px;
    }

    .slider-scrollbar .scrollbar-thumb {
      position: absolute;
      background: #000;
      top: 0;
      bottom: 0;
      width: 50%;
      height: 100%;
      cursor: grab;
      border-radius: inherit;
    }

    .slider-scrollbar .scrollbar-thumb:active {
      cursor: grabbing;
      height: 8px;
      top: -2px;
    }

    .slider-scrollbar .scrollbar-thumb::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: -10px;
      bottom: -10px;
    }

    
    @media only screen and (max-width: 1023px) {
      .slider-wrapper .slide-button {
        display: none !important;
      }

      .slider-wrapper .image-list {
        gap: 10px;
        margin-bottom: 15px;
        scroll-snap-type: x mandatory;
      }

      .slider-wrapper .image-list .image-item {
        width: 480px;
        height: 380px;
      }

      .slider-scrollbar .scrollbar-thumb {
        width: 20%;
      }
      .image-container {
        width:500px;
        height:400px;
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
    .title {
      margin-left:20px;
      font-size: 40px;
    }
  }
  </style>
  <title>Museo virtual gallery</title>
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
    <div class="col-md-6 p-5">
      <div class="container my-4">
        <div class="jumbotron custom-jumbotron">
          <h1 class="display-4">Unveiling the Museo Collection</h1>
          <p class="lead">Explore a diverse collection of stunning artworks created by talented artists from around the
            world. Immerse yourself in the world of creativity, where every piece tells a unique story and evokes
            powerful emotions.</p>
          <a class="btn btn-custom btn-lg" href="#featured" role="button">Explore</a>
        </div>
      </div>
    </div>
  </div>

  <h2 class="title p-4">Featured Artworks</h2>
  <a id="featured"></a>
  <div class="container1">
    <div class="slider-wrapper p-3">
      <ul class="image-list">
        <li class="image-container">
          <a href="artist12.php">
            <img class="image-item" src="a12work4.jpg" alt="img-1">
          </a>
        </li>

        <li class="image-container">
          <a href="artist13.php">
            <img class="image-item" src="a13work1.jpg" alt="img-2">
          </a>
        </li>

        <li class="image-container">
          <a href="artist12.php">
            <img class="image-item" src="a7work1.jpg" alt="img-3">
          </a>
        </li>

        <li class="image-container">
          <a href="artist13.php">
            <img class="image-item" src="a13work2.jpg" alt="img-4">
          </a>
        </li>

        <li class="image-container">
          <a href="artist1.php">
            <img class="image-item" src="a1work1.jpg" alt="img-5">
          </a>
        </li>

        <li class="image-container">
          <a href="artist14.php">
            <img class="image-item" src="a14work1.jpg" alt="img-6">
          </a>
        </li>

        <li class="image-container">
          <a href="artist1.php">
            <img class="image-item" src="a1work2.jpg" alt="img-7">
          </a>
        </li>

        <li class="image-container">
          <a href="artist15.php">
            <img class="image-item" src="a15work4.jpg" alt="img-8">
          </a>
        </li>

        <li class="image-container">
          <a href="artist10.php">
            <img class="image-item" src="a10work1.jpg" alt="img-9">
          </a>
        </li>

        <li class="image-container">
          <a href="artist7.php">
            <img class="image-item" src="a7work4.jpg" alt="img-10">
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="slider-scrollbar">
      <div class="scrollbar-track">
        <div class="scrollbar-thumb"></div>
      </div>
    </div>
  </div>

  <script>
    const initSlider = () => {
      const imageList = document.querySelector(".slider-wrapper .image-list");
      const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
      const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
      const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

      scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

        const handleMouseMove = (e) => {
          const deltaX = e.clientX - startX;
          const newThumbPosition = thumbPosition + deltaX;

          const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
          const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
          scrollbarThumb.style.left = `${boundedPosition}px`;
          imageList.scrollLeft = scrollPosition;
        }

        const handleMouseUp = () => {
          document.removeEventListener("mousemove", handleMouseMove);
          document.removeEventListener("mouseup", handleMouseUp);
        }

        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
      });

      const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
      }

      imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();

        if (imageList.scrollLeft >= maxScrollLeft) {
          imageList.scrollLeft = 0;
        }
      });

      const simulateNextClick = () => {
        const scrollAmount = imageList.clientWidth;
        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });

        if (imageList.scrollLeft >= maxScrollLeft) {
          imageList.scrollLeft = 0;
        }
      };

      let sliderInterval = setInterval(simulateNextClick, 2000); 

      const sliderWrapper = document.querySelector('.slider-wrapper');
      sliderWrapper.addEventListener('mouseover', () => {
        clearInterval(sliderInterval);
      });

      sliderWrapper.addEventListener('mouseout', () => {
        sliderInterval = setInterval(simulateNextClick, 5000); 
      });
    }

    window.addEventListener("resize", initSlider);
    window.addEventListener("load", initSlider);
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