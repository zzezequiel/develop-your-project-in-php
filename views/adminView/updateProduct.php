<!-- im sending to admin controller, where a contact to model controller but i have problems with store the new data product, it returns a array as null. I thisnk its the tag name in the form, probably id set wrong the names.  -->



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
        <div class="container-xl mt-5">
            <h1>land's page!</h1>
            </br>

             
            <form class="mb-5 needs-validation" action="index.php?controller=Admin&action=update" method="POST">
                <input type="hidden" name="id" value="<?php echo $this->data['id'] ?>">
                <div class="d-flex flex-row justify-content-between">
                    <div class=" row">
                        <div class="flex-column">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input required type="text" value="<?php echo $this->data['title']?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input required type="text" value="<?php echo $this->data['description']?>" class="form-control" id="description" name="description" aria-describedby="description" placeholder="Enter description">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input required type="location" value="<?php echo $this->data['location']?>" class="form-control" id="location" name="location" aria-describedby="location" placeholder="Enter location">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pre_build">Content</label>
                                    <select name="pre_build" class="form-control" id="pre_build" required>
                                        <option value="">Please Select</option>
                                        <option value="1" <?php echo $this->data['pre_build'] == 1  ?>>Construct</option>
                                        <option value="2" <?php echo $this->data['pre_build'] == 2  ?>>Not constructed</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="text" value="<?php echo $this->data['size'] ?>" class="form-control" id="size" name="size" aria-describedby="size" placeholder="Enter size">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" value="<?php echo $this->data['price']?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter price">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Admin&action=getAllProducts"; ?>">Return</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col ms-5">
                            <div class="form-group">
                                
                                <img src=" <?php echo $this->data['img']?>">
                                <input type="file" class="mt-4"  id="img" name="img" aria-describedby="img" aria-describedby="img" placeholder="Enter img">
                            </div>
                        </div>
                    </div>
                    </div>
                

            </form>
        </div>
        </main>
    
</body>

</html>