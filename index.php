<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>

.col-md-3, .col-md-9, .col-md-12, .col-md-4 {
        padding: 0; /* Remove padding from columns */
    }

        .row{
            margin: 0;
            padding: 0;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .container-fluid {
            padding: 0;
        }
        
        .third-row {
            margin: 50;
            background-color: rgba(0, 0, 0, 1);
            align-items: 20;
        }

        div {
            border: 0px solid brown;
        }
        .card {
            margin: 0;
            border-radius: 0;
        }
        .card-img {
            height: 600px;
            width: 100%;
            border-radius: 0;
            object-fit: 0;
            filter: hue-rotate(0deg) brightness(30%);
        }
        .card-img-overlay {
            padding: 0;
            margin: 0;
        }

        nav {
            background-color: #1A4870;

            align-items: center;
        }
        .nav a {
            flex: 1;
            align-items: center;
            color: solid rgb(241, 226, 226);
            text-decoration: none;
        }
        .first-row {
            background-color: rgba(0, 0, 0, 1);
            padding: 0;
            text-align: 0;
        }

        .color{
            color:white;
        }
        .card-body{
            background-color: lightpink;
        }
        .container-fluid {
            padding: 0;
            background-color: #FFB6C1; /* Light Pink */
        }

        

 
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row first-row">
            <div class="col-md-3">
                <a href="index.php" style="padding-left: 12px"> <img src="image/fas-logo.png" height="90px" width="90px" style="border-radius: 30px"></a>
            </div>
            <div class="col-md-9 d-flex align-items-end">
                <div class="d-flex justify-content-between w-50">
                <a href="index.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">Home</a>
                <a href="about.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">About</a>
                <a href="catalog.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">Catalog</a>
                <a href="sales.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">Sales</a>
                <a href="contact.php" style="text-decoration: none; color: rgb(255, 255, 255)">Contact</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card text-bg-dark">
                    <img src="image/baloons.jpg" class="card-img" alt="baloons">
                    <div class="card-img-overlay">
                        <div class="row justify-content-left" style="margin-top: 150px;">
                            <div class="col-md-6">
                                  <!-- <h5 class="card-title">Fashion For All</h5>
                        <p class="card-text">Fashion For All is an inspiration sort by professionals and top clients from previous times.</p>
                        <p class="card-text">Our aim is to satisfy the need and create a balance for all classes. We are more glad to have everyone or almost everyone in our circle.</p>
                        <p class="card-text"><small>Bringing all your ideas to light, we won't back down our creativity with you.</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row second-row justify-content-center">
            <div class="col-md-8 color">
            <div class="card">
                <!-- <div class="card-header">Quote   
                </div> -->
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>"Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening."</p>
                        <footer class="blockquote-footer">Coco Chanel<cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
            </div>
        </div>

        <div class="row second">
            <div class="col-md-6">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/knitmen.webp" class="d-block w-100" alt="knitemen">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Knitted</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/boots.jpg" class="d-block w-100" alt="boots">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sexy Boots</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/blue.jpg" class="d-block w-100" alt="blue">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Foot-Wear</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>
 
        <div class="row third-row">
            <div class="col-md-4 color">
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="https://wa.me/2347083037092">Whatsapp</a>
            </div>
            <div class="col-md-4 color">
                All Rights Reserved. &COPY;2024 Designed by Deborah
            </div>
            <div class="col-md-4 color">
                <p>Email: <a href="mailto:mydailyonlinehustle@gmail.com">mydailyonlinehustle@gmail.com</a></p>
                <p>Phone Number: <a href="tel+07083037092">07083037092</a></p>

            </div>


        </div>

    </div>
    
</body>
</html>