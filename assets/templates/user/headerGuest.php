<header>
    <header>
        <nav class="navbar navbar-expand-md fixed-top headerNavbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?controller=Client&action=getAllproducts"><img src="assets/img/logo.png" alt="Logo"
                        class="logoDashboard me-3" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active1" aria-current="page" href="?controller=Client&action=getAllProducts">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buy Land</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item scroll-nav" href="#">Setting</a></li> 
                                <li><a class="dropdown-item scroll-nav" href="?controller=Login&action=logOut">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                    <p class="mt-3"> User: <?php echo $_SESSION['guestSession']?> </p>
               <img style="max-width: 50px;" class="ms-5 img-raised rounded-circle img-fluid" src="<?php echo $_SESSION['avatar']?>"> 

            </div>
        </nav>
    </header>
</header>