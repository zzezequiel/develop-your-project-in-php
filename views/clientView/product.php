
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
            <h1>land's page!</h1>
            </br>

             
            <h5> Property of:<b>  <?php echo $this->data['first_name'] . " " . $this->data['last_name']  ?> </b></h5> 
            <hr>
            

                <div class="d-flex flex-row justify-content-between">
                    <div class=" row">
                        <div class="flex-column">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name"><b>Title</b></label>
                                    <p> <?php echo $this->data['title']?> </p>
                                </div>

                            </div>
                            

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="location"><b>Location</b></label>
                                    <p> <?php echo $this->data['location']?> </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pre_build"><b>Content</b></label>
                                    <p> <?php echo $this->data['pre_build'] ?> </p>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="size"><b>Size</b></label>
                                    <p> <?php echo $this->data['size'] ?> </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="price"><b>Price</b></label>
                                    <p> <?php echo $this->data['price']?> $ </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="description"><b>Description</b></label>
                                    <p> <?php echo $this->data['description'] ?> </p>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex justify-content-between mt-4">
                                <a id="return" class="btn btn-secondary btn-lg" href="<?php echo "?controller=Client&action=getAllProducts"; ?>">Return</a>
                                        <a type='button' class='btn btn-success btn-lg'>Buy</a>
                                        <a type='button' class='btn btn-secondary btn-lg '>Reoffer</a>
                            </div>
                        </div>
                        
                    </div>
                    

                    <div class="row mt-4">
                        <div class="col ms-5">
                            <div class="form-group">
                                
                                <img width="720" height="405"src=" <?php echo $this->data['img']?>">
                               
                            </div>
                        </div>
                    </div>
                    </div>

        </div>
        </main>
    
</body>

</html>
