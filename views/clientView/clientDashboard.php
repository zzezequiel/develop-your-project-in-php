<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/137c893bad.js" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="assets/appJS.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles.css" />

    <title>Anunnaki</title>
</head>

<body>
    <!-- HEADER -->
    
    <?php require_once('assets\templates\user\header.php')?>

    <!-- HEADER -->

    <!-- MAIN -->
    <main>
        <section class="my-5">
            <div id="carouselExampleCaptions" class="carousel slide carousel-dash container" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/imagen12.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="font-family-primary">Anunnaki</h1>
                            <h2>The future of the Metaverse</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/imagen3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h1 class="font-family-primary">Anunnaki</h1>
                            <h2>The future of the Metaverse</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/imagen15.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h1 class="font-family-primary">Anunnaki</h1>
                            <h2>The future of the Metaverse</h2>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button id="btnNext" class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- ================================================== -->

        <section class=" marketing my-5">
            <!-- START THE FEATURETTES -->

            
          
                             <?php
                             
                             foreach ($this -> data as $index => $products) {
                                
                        echo "  <hr class='featurette-divider'>
                                <div class='row featurette m-5'>
                                    <div class='col-md-7'>
                                        <h2 class='featurette-heading fw-normal lh-1'>".$products['title']. " <span class='text-muted'> ". $products['size']. " sq. metres</span></h2>
                                         <h5 class='featurette-heading fw-normal lh-1'>Property of: <b>".$products['name']." ".$products['lastName']."</b></h5> 
                                        <p class='lead'>".$products['description']."</p>
                                        <p class='lead'>Price ".$products['price']." $</p>
                                        
                                        <a id='product_page' class='btn btn-primary' href='?controller=Client&action=getProduct&id=" . $products['id'] ."'>See ofers</a>
                                        
                                        
                                    </div>
                                    
                                    <div class='col-md-5'>
                                    
                                    <img class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='500'
                                    height='300' role='img' 
                                    preserveAspectRatio='xMidYMid slice' focusable='false' src=" . $products['img'] . ">
                                    </div>
                                    <div class='col-md-5'>
                                    
                                    </div>
                                </div>";

                                
                            } 
                            ?> 
                        


            <!-- <hr class="featurette-divider"> -->
            <!-- /END THE FEATURETTES -->

        </section><!-- /.container -->
    </main>
    <!-- MAIN -->

    <!-- FOOTER -->
    <footer class="container">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                </ul>
            </footer>
        </div>
    </footer>
    <!-- FOOTER -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>