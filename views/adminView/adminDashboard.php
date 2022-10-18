
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
<?php 
    if (isset($_SESSION['clientSession'])){
        header("Location: index.php?controller=Client&action=getAllProducts"); 

    } ?> 
    
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
                <div class="row">

                <?php
                
                
                    foreach ($this -> data as $index => $products) {

                        echo "
                            <div class='shadow-lg p-3 mb-5 bg-body rounded bg-white bg-transparent card text-white mb-1 mx-3 my-3' style='width:25rem'>
                                <img width='350px' height='100%' class='mt-4 mb-4 mx-auto d-block' src=" . $products['img'] . ">
                                <h4 class='text-center font-family-primary'>".$products['title']."</h4>
                                <p class='text-center'>Property of: <b>".$products['name']." ".$products['lastName']."</b></p>
                                <hr class='featurette-divider mt-1'>
                                <p class='text-center'>Price: <b> ".$products['size'] . " sq. metres</b></p>
                                <p class='text-center'>Price:<b> ".$products['price'] ." $</b></p>

                                <div class='row mx-2 my-2 mt-4 mb-4'>
                                    <a class='col btn btn-outline-secondary btn_sm d-flex align-items-center justify-content-center' href='?controller=Admin&action=getProduct&id=" . $products['id'] . "'>UPDATE&nbsp 
                                        <svg xmlns='http://www.w3.org/2000/svg' width='14' fill='currentColor' class='bi bi-pencil-square ' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                        </svg>
                                    </a>

                                    <a class='col btn btn-outline-danger ms-2 btn_sm d-flex align-items-center justify-content-center' href='?controller=Admin&action=deleteProduct&id=" . $products['id'] . "'>DELETE&nbsp
                                        <svg xmlns='http://www.w3.org/2000/svg' width='14' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg>
                                    </a>
                                </div>
                            </div>




";

                                
                    } 
                ?> 
                        </div>
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