
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
    <main>
        <div class="container-xl mt-5">

            <div class="col" style="width:100%;">
                <img src="<?php echo $this->data['img']?>" alt="productimg" class="card-img-top">
                <br><br>
                <div class="card-body">
                    <h1 class="text-center text-uppercase font-family-primary"><?php echo $this->data['title']?></h1>
                    <h3 class="text-center"> Property of:<b>  <?php echo $this->data['first_name'] . " " . $this->data['last_name']  ?> </b></h3>
                    <hr>
                    <div class="row">
                        <h4 class="col card-text text-center"><b>Location</b></h4>
                        <h4 class="col card-text text-center"><b>Content</b></h4>
                        <h4 class="col card-text text-center"><b>Size</b></h4>
                        <h4 class="col card-text text-center"><b>Price</b></h4>
                    </div>

                    <div class="row">
                        <p class="col text-center"> <?php echo $this->data['location']?> </p>
                        <p class="col text-center"> <?php echo $this->data['pre_build'] ?> </p>
                        <p class="col text-center"> <?php echo $this->data['size'] ?> meters</p>
                        <p class="col text-center"> <?php echo $this->data['price'] ?> </p>
                    </div>
                </div>

            
                <h4 class="col card-text text-center mt-2"><b>Description</b></h4>
                <p class="col text-center"> <?php echo $this->data['description'] ?> </p>

                <div class="d-flex justify-content-between mt-5">
                    <a style="width: 30%" id="return" class="btn btn-secondary btn-lg my-5 d-flex align-items-center justify-content-center" href="<?php echo "?controller=Client&action=getAllProducts"; ?>">Return</a>
                    <a style="width: 30%"type='button' class='btn btn-success btn-lg my-5 d-flex align-items-center justify-content-center'>Buy</a>
                    <a style="width: 30%" type='button' class='btn btn-secondary btn-lg my-5 d-flex align-items-center justify-content-center'>Reoffer</a>
                </div>
            </div>
        </div>
    </main>
    
</body>

</html>
