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

    <title>Anunnaki new product</title>
</head>

<body>

    <div class="container">
        <h1>Create new product</h1>
        </br>

        <?php
        if ($this->action == "getProduct" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The Products does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>

        <form class="mb-5 needs-validation" action="index.php?controller=Admin&action=create" method="POST">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                    <label for="title">Property of:</label>
                    <input required type="name" value="1" class="form-control" id="id_user" name="id_user" aria-describedby="id_user" placeholder="Admin" readonly>
                            
                    </div>
                    <br>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input required type="name" value="" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Enter title">
                        <br>
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input required type="number" value="" class="form-control" id="size" name="size" aria-describedby="sizeHelp" placeholder="Enter Size">
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="pre_build">Prebuild</label>
                        <select name="pre_build" class="form-control" id="pre_build" required>
                            <option value="">Please Select</option>
                            <option value="1">Constructed</option>
                            <option value="2">Structure</option>
                        </select>
                        <br>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="name" value="" class="form-control" id="location" name="location" aria-describedby="locationHelp" placeholder="Enter location">
                    </div>
                    <br>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="number" value="" class="form-control" id="price" name="price" aria-describedby="priceHelp" placeholder="Enter price">
                        <br>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea value="" class="form-control" id="description" name="description" cols="20" rows="20" aria-describedby="descriptionHelp" placeholder="Enter description"></textarea><br>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="age">Upload Image</label>
                        <input type="file" value="" class="form-control" id="img" name="img" aria-describedby="imgHelp" placeholder="Enter img"><br>
                    </div>
                </div>
            </div>

            <a type="submit" class="btn btn-primary btn-lg">Submit</a>
            <a id="return" class="btn btn-secondary btn-lg" href="<?php echo "?controller=Admin&action=getAllProducts"; ?>">Return</a><br>
        </form>
    </div>
</body>

</html>