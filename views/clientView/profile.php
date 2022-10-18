<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/137c893bad.js" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="assets/appJS.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
<?php require_once('assets\templates\user\header.php');?>

<main>
        <div class="container-xl mt-5">
        <h1 class="col card-text text-center  mt-5"><b>Your Profile</b></h1>
            <div class="d-flex justify-content-center">
                <img style="max-width: 150px;" class=" img-raised rounded-circle img-fluid" src="<?php echo $this->data[0]['avatar']?>">
            </div>
            <div class="col" style="width:100%;">
                <br><br>
                <div class="card-body">
                    
                    <div class="row">
                        <h4 class="col card-text text-center"><b>Name</b></h4>
                        <h4 class="col card-text text-center"><b>Last Name</b></h4>
                        <h4 class="col card-text text-center"><b>Age</b></h4>
                        <h4 class="col card-text text-center"><b>Phone</b></h4>
                        <h4 class="col card-text text-center"><b>City</b></h4>
                    </div>

                    <div class="row">
                        <p class="col text-center"> <?php echo $this->data[0]['first_name']?> </p>
                        <p class="col text-center"> <?php echo $this->data[0]['last_name'] ?> </p>
                        <p class="col text-center"> <?php echo $this->data[0]['age'] ?> years</p>
                        <p class="col text-center"> <?php echo $this->data[0]['phone'] ?> </p>
                        <p class="col text-center"> <?php echo $this->data[0]['city'] ?> </p>
                    </div>
                </div>
                
                                
                <h2 class="col card-text text-center  mt-5"><b>Owned Lands</b></h2>
                <div class="row">

                <?php
                    foreach ($this -> data as $index => $userdata) {
                        echo "
                        <a class='mb-1 mx-3 my-3' style='width:25rem; text-decoration:none;' href='?controller=Client&action=getProduct&id=" . $userdata['id'] ."'>
                            <div class='shadow-lg p-3 mb-5 bg-body rounded bg-white bg-transparent card text-white mb-1 mx-3 my-3' style='width:25rem'>
                                <img width='350px' height='100%' class='mt-4 mb-4 mx-auto d-block' src=" . $userdata['img'] . ">
                                <h4 class='text-center text-uppercase font-family-primary'>".$userdata['title']."</h4>
                                <hr class='featurette-divider mt-1'>
                                <p class='text-center'>Price: <b> ".$userdata['size'] . " sq. metres</b></p>
                                <p class='text-center'>Price:<b> ".$userdata['price'] ." $</b></p>

                            </div>
                        </a>
                        ";
                                
                    } 
                ?> 
    </div>
 
                <div class="ms-4 mt-5 ">
                    <a style="width: 15%" id="return" class="btn btn-secondary btn-lg my-5 d-flex align-items-center justify-content-center" href="<?php echo "?controller=Client&action=getAllProducts"; ?>">Return</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <!--  -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>