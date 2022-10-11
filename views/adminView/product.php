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
    <main>
        <div class="container">
            <h1>Employee's page!</h1>
            </br>

            <?php
            if ($this->action == "getProduct" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
                echo "<p>The Land does not exists!</p>";
            } else if (isset($error)) {
                echo "<p>$error</p>";
            }
            ?>
            <form class="mb-5 needs-validation" action="index.php?controller=Admin&action=<?php echo isset($this->data['idproduct']) ? "updateProduct" : "createProduct" ?>" method="post">
                <input type="hidden" name="id" value="<?php echo isset($this->data['idproduct']) ? $this->data['idproduct'] : null ?>">
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input required type="text" value="<?php echo isset($this->data['title']) ? $this->data['title'] : null ?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Descriotion</label>
                            <input required type="text" value="<?php echo isset($this->data['description']) ? $this->data['description'] : null ?>" class="form-control" id=description" name="description" aria-describedby="lasdescription" placeholder="Enter description">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input required type="location" value="<?php echo isset($this->data['location']) ? $this->data['location'] : null ?>" class="form-control" id="location" name="location" aria-describedby="location" placeholder="Enter location">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="prebuild">Content</label>
                            <select name="prebuild" class="form-control" id="gender" required>
                                <option value="">Please Select</option>
                                <option value="1" <?php echo isset($this->data['prebuild']) && $this->data['prebuild']  == 1 ? 'selected' : null; ?>>Construct</option>
                                <option value="2" <?php echo isset($this->data['prebuild']) && $this->data['prebuild']  == 2 ? 'selected' : null; ?>>Not constructed</option>
                            </select>
                        </div>
                    </div>
                </div>

                

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" value="<?php echo isset($this->data['size']) ? $this->data['size'] : null ?>" class="form-control" id="size" name="size" aria-describedby="size" placeholder="Enter size">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" value="<?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter price">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Admin&action=getAllProducts&action=getAllProducts"; ?>">Return</a>
            </form>
        </div>
        </main>
    
</body>

</html>