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
        
<div class="container mx-auto">
                             <?php
                             
                             foreach ($this -> data as $index => $products) {
                                
                        echo "  <hr class='featurette-divider'>
                                
                                <div class='row my-5'>
                                    <div class='col-md-7'>
                                        <h2 class='featurette-heading fw-normal lh-1'>".$products['title']. " <span class='text-muted'> ". $products['size']. " sq. metres</span></h2>
                                         <h5 class='featurette-heading fw-normal lh-1'>Property of: <b>".$products['name']." ".$products['lastName']."</b></h5> 
                                        <p class='lead'>".$products['description']."</p>
                                        <p class='lead'>Price ".$products['price']." $</p>
                                        
                                        <a id='product_page' style='width:20%'class='btn btn-primary btn_sm d-flex align-items-center justify-content-center' href='?controller=Client&action=getProduct&id=" . $products['id'] ."'>See ofers</a>
                                    </div>
                                    
                                    <div class='col-md-5'>
                                        <img class='' width='500'
                                        height='300' role='img' 
                                        preserveAspectRatio='xMidYMid slice' focusable='false' src=" . $products['img'] . ">
                                    </div>
                                </div>";

                                
                            } 
                            ?> 
                        </div>
 
                <div class="d-flex justify-content-between mt-5 ">
                    <a style="width: 30%" id="return" class="btn btn-secondary btn-lg my-5 d-flex align-items-center justify-content-center" href="<?php echo "?controller=Client&action=getAllProducts"; ?>">Return</a>
                </div>
            </div>
        </div>
    </main>

    
</body>
</html>