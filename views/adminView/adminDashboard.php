
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
    <?php require_once('assets\templates\admin\header.php')?>
   

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
                                        
                                        <p class='lead'>Price: ".$products['price'] . "€" ."</p>
                                        <a class='btn btn-primary py-2' href='?controller=Admin&action=getProduct&id=" . $products['id'] . "'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='28' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                        </svg>
                                        </a>
                                        <a class='btn btn-danger py-2 ms-2' href='?controller=Admin&action=deleteProduct&id=" . $products['id'] . "'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='28' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class='col-md-5'>
                                    
                                    <img class='bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto' width='200'
                                    height='200' role='img' 
                                    preserveAspectRatio='xMidYMid slice' focusable='false' src=" . $products['img'] . ">
                                    
                                    
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