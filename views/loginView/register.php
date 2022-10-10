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
    <script src="assets/login.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles.css" />

    <title><!DOCTYPE html>
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
    <script src="assets/login.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles.css" />

    <title>Anurati</title>
</head>

<body>
    <!-- HEADER -->
    <header></header>
    <!-- HEADER -->

    <!-- MAIN -->
    <main>
        <div class="row g-0">
            <!-- CAROUSEL LEFT -->
            <section class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item img-1 min-vh-100 active">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                        <div class="carousel-item img-2 min-vh-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                        <div class="carousel-item img-3 min-vh-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" id="btnNext" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!-- RIGHT SECTION -->
            <section class="col-lg-5 d-flex flex-column align-item-end min-vh-100">
                <section class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="assets/img/logo.png" alt="Logo" class="logo" />
                </section>
                <section class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <div id="registerSection" role="tabpanel" aria-labelledby="tab-register">

                        <form action="" method="post" class="mb-5">
                            <!-- Pills navs -->
                            <ul class="nav nav-pills nav-justified mb-5" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="tab-login" onclick="loadLoginForm()" data-mdb-toggle="pill"
                                        href="#" role="tab" aria-controls="pills-login"
                                        aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill"
                                        href="#pills-register" role="tab" aria-controls="pills-register"
                                        aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->

                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <div class="mb-4">
                                <label class="form-label font-weight">First Name</label>
                                <input type="text" class="form-control bg-dark-x border-0" id="exampleInputEmail1" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label font-weight">Email</label>
                                <input type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail1" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Repeat password</label>
                                <input type="password" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <button type="submit" class="btn btn-primary w-100 font-family-primary">
                                <span class="me-1">Create Account</span>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </form>
                    </div>
                </section>
            </section>
            <!-- RIGHT SECTION -->
        </div>
    </main>
    <!-- MAIN -->

    <!-- FOOTER -->
    <footer></footer>
    <!-- FOOTER -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html></title>
</head>

<body>
    <!-- HEADER -->
    <header></header>
    <!-- HEADER -->

    <!-- MAIN -->
    <main>
        <div class="row g-0">
            <!-- CAROUSEL LEFT -->
            <section class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item img-1 min-vh-100 active">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                        <div class="carousel-item img-2 min-vh-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                        <div class="carousel-item img-3 min-vh-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Metaverse</h5>
                                <p>The New Reality.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" id="btnNext" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!-- RIGHT SECTION -->
            <section class="col-lg-5 d-flex flex-column align-item-end min-vh-100">
                <section class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="assets/img/logo.png" alt="Logo" class="logo" />
                </section>
                <section class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <div id="registerSection" role="tabpanel" aria-labelledby="tab-register">

                        <form action="" method="post" class="mb-5">
                            <!-- Pills navs -->
                            <ul class="nav nav-pills nav-justified mb-5" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="tab-login" onclick="loadLoginForm()" data-mdb-toggle="pill"
                                        href="#" role="tab" aria-controls="pills-login"
                                        aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill"
                                        href="#pills-register" role="tab" aria-controls="pills-register"
                                        aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->

                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                            <div class="mb-4">
                                <label class="form-label font-weight">First Name</label>
                                <input type="text" class="form-control bg-dark-x border-0" id="exampleInputEmail1" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label font-weight">Email</label>
                                <input type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail1" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Repeat password</label>
                                <input type="password" class="form-control bg-dark-x border-0 mb-2" />
                            </div>
                            <button type="submit" class="btn btn-primary w-100 font-family-primary">
                                <span class="me-1">Create Account</span>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </form>
                    </div>
                </section>
            </section>
            <!-- RIGHT SECTION -->
        </div>
    </main>
    <!-- MAIN -->

    <!-- FOOTER -->
    <footer></footer>
    <!-- FOOTER -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>