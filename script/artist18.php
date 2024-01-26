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
            width: 170%;
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
    <title>Cindy Sherman</title>
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
                    <input id="searchBoxInput" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
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
                <img src="artprof18.jpg" alt="Generic placeholder image" class="img-fluid" width="400">
            </div>
            <div class="col-md-8 pr-5">
                <h1 class="mt-0">Cindy Sherman</h1>
                <h4> (Born 1954)</h4>
                <p>Cindy Sherman, is an American photographer widely recognized for her groundbreaking contributions to
                    contemporary art. Her work predominantly revolves around self-portraiture, where she assumes various
                    personas and characters, often challenging societal norms and expectations. Sherman's photographs
                    explore themes of identity, gender, and the constructed nature of representation. Her ability to
                    transform herself through makeup, costume, and expression has led to a body of work that critiques
                    and deconstructs the portrayal of women in popular culture. Through her art, Cindy Sherman has had a
                    profound impact on the discourse surrounding identity and representation in the visual arts.</p>
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
                            <img src="a18work3.jpg" class="card-img-top" alt="Image 1">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"History Portraits"(1989-1990)</h5>
                        <p class="card-text">"History Portraits" is a pivotal photographic series created by the
                            influential American artist Cindy Sherman between 1989 and 1990. In this collection, Sherman
                            shifts her focus from exploring popular culture to delving into the realm of art history.
                            The series features Sherman embodying various historical figures, from Renaissance paintings
                            to Old Masters, reinterpreting and reinventing their iconic images. Through meticulous
                            attention to detail in costumes, makeup, and settings, Sherman brings a contemporary
                            perspective to these revered artworks, blurring the boundaries between reality and
                            representation. "History Portraits" serves as a profound commentary on the enduring power of
                            art, challenging conventional notions of authorship, identity, and the role of the artist.
                            Through this series, Sherman prompts viewers to reexamine the canon of art history, offering
                            a fresh lens through which to appreciate and question the legacy of these timeless
                            masterpieces. </p>
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
                            <img src="a18work4.jpg" class="card-img-top" alt="Image 2">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> "Society Portraits" (2008)</h5>
                        <p class="card-text">"Society Portraits" is a significant series by the renowned American artist
                            Cindy Sherman. In this collection, Sherman continues her exploration of identity and
                            representation, this time focusing on the social elite and cultural influencers. Through a
                            series of meticulously crafted portraits, Sherman assumes the roles of various characters
                            who embody the essence of high society. Each portrait challenges societal norms and
                            expectations, offering a satirical commentary on the world of privilege and prestige.
                            Through her masterful use of makeup, costume, and expression, Sherman invites viewers to
                            question the constructed nature of social identity. "Society Portraits" serves as a
                            thought-provoking reflection on the performative nature of social status and the ways in
                            which we present ourselves to the world. With this series, Cindy Sherman continues to push
                            the boundaries of contemporary art, inviting viewers to engage in a critical examination of
                            class, wealth, and influence in society. </p>
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
                            <img src="a18work1.jpg" class="card-img-top" alt="Image 1">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Untitled Film Stills" (1977-1980)</h5>
                        <p class="card-text">"Untitled Film Stills" is a seminal photographic series created by American
                            artist Cindy Sherman. In this groundbreaking collection, Sherman assumed the roles of both
                            photographer and subject, evoking the essence of characters from vintage Hollywood films.
                            The series artfully replicates the visual language and ambiance of film stills from the
                            mid-20th century. Each photograph features Sherman embodying diverse personas, often
                            portraying women in moments of suspense, contemplation, or enigma. This body of work
                            challenges conventional notions of identity, gender, and representation. Through meticulous
                            costume, makeup, and facial expressions, Sherman delves into how visual cues shape our
                            perceptions of individuals and their stories. "Untitled Film Stills" stands as a testament
                            to the constructed nature of images and their impact on societal portrayals of women. It
                            propelled Cindy Sherman to international prominence, leaving an indelible mark on
                            contemporary art, photography, and feminist discourse.
                        </p>
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
                            <img src="a18work2.jpg" class="card-img-top" alt="Image 2">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">"Centerfolds" (1981)
                            <p class="card-text">"Centerfolds" is a significant photographic series created by renowned
                                American artist Cindy Sherman in the year 1981. This collection diverges from Sherman's
                                earlier work, as she transitions from mimicking characters in vintage Hollywood films to
                                exploring the visual language of adult magazine centerfolds. In this series, Sherman
                                continues to serve as both the photographer and the subject, adopting various roles to
                                challenge societal ideals of female beauty and sexuality. The images are characterized
                                by
                                their vivid colors, dramatic lighting, and intimate compositions, emulating the glossy
                                and
                                hyper-stylized aesthetic of centerfold photography. Through this body of work, Sherman
                                prompts viewers to critically engage with notions of desire, objectification, and the
                                constructed nature of femininity in popular culture. "Centerfolds" showcases Sherman's
                                keen
                                ability to deconstruct and reframe established visual narratives, marking a pivotal
                                moment
                                in her artistic trajectory. </p>
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