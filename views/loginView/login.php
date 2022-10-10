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

    <title>Anunnaki</title>
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
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item img-3 min-vh-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" id="btnNext" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!-- RIGHT SECTION -->
            <section class="container col-lg-5 d-flex flex-column align-item-end min-vh-100">
                <section class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                    <img src="assets/img/logo.png" alt="Logo" class="logo" />
                </section>

                <!-- LOGIN FORM -->
                <section class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                    <div id="loginSection" class="">
                        <h2 class="font-weight-bold mb-4 font-family-primary">
                            Sign into ANUNNAKI
                        </h2>

                        <form action="" method="post" id="formLogin" class="mb-5">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label font-weight">Email</label>
                                <input type="email" id="emailLogin" class="form-control bg-dark-x border-0"
                                    placeholder="Email address" aria-describedby="emailHelp"
                                    onkeyup="validateEmail()" />
                                <span id="advertEmail"></span>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" id="passLogin" class="form-control bg-dark-x border-0 mb-2"
                                    placeholder="Password" id="exampleInputPassword1" onkeyup="validatePass()" />
                                <!-- <span id="advertPass"></span> -->
                                <a href="#" class="form-text text-muted text-decoration-none">Click here if you have
                                    forgotten your password</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 font-family-primary">
                                Sign in
                            </button>
                        </form>
                        <div id="footerLogin">
                            <p class="text-center text-muted font-family-primary">
                                Sign in with
                            </p>
                            <div class="d-flex justify-content-around">
                                <button type="submit" class="btn btn-outline-light flex-grow-1 me-2">
                                    <i class="fa-brands fa-google lead me-2"></i>Google
                                </button>
                                <button type="submit" class="btn btn-outline-light flex-grow-1 ms-2">
                                    <i class="fa-brands fa-facebook-f lead me-2"></i>Facebook
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- LOGIN FORM -->
                    <div id="footerLogin2" class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
                        <p class="d-inline-block mb-0 font-family-primary">Don’t have an account?</p>
                        <a href="#" id="loadRegisterForm"
                            class="text-light font-weight-bold text-decoration-none font-family-primary"
                            onclick="loadRegisterForm()">Create one now</a>
                    </div>
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