
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

    <title>Anurati</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <header>
            <nav class="navbar navbar-expand-md fixed-top headerNavbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Logo"
                            class="logoDashboard me-3" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active1" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Buy Land</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled no-access">Admin Panel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item scroll-nav" href="#">Profile</a></li>
                                    <li><a class="dropdown-item scroll-nav" href="#">Setting</a></li>
                                    <li><a class="dropdown-item scroll-nav" href="#">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
        </header>
    </header>
    <!-- HEADER -->

    <!-- MAIN -->
    <main>
        <section class="marketing my-5">
            <!-- START THE FEATURETTES -->
            <div class="container">
                <div class='row m-5'>
                    <div class="col">
                        <button>Add Land</button>
                    </div>
                </div>
                             <?php
                             foreach ($this -> data as $index => $products) {
                        echo "  <hr class='featurette-divider'>
                                <div class='row featurette m-5 '>
                                    <div class='col-md-7'>
                                        <h2 class='featurette-heading fw-normal lh-1'>".$products['title']. " <span class='text-muted'> ". $products['size']. " sq. metres</span></h2>
                                        <p class='lead'>".$products['description']."</p>
                                        <p class='lead'>Price ".$products['price']."</p>
                                    </div>
                                    <div class='col-md-5'>
                                    
                                    <img class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='200'
                                    height='200' role='img' 
                                    preserveAspectRatio='xMidYMid slice' focusable='false' src=" . $products['img'] . ">
                                    </div>
                                    <div class='col-md-5'>
                                    <a class='btn btn-secondary' href='?controller=Admin&action=getProduct&id=" . $products['idproduct'] . "'>Edit</a>
                                    <a class='btn btn-danger' href='?controller=Employee&action=deleteProduct&id=" . $products['idproduct'] . "'>Delete</a>
                                    </div>
                                </div>";

                                
                            } 
                            ?> 
                        
            </div>
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
