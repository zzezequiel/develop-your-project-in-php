<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>New Product</h1>
        <br>

        <?php
         if ($this->action == "getProduct" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The product does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>


        <form class="mb-5 needs-validation" action="index.php?controller=Admin&action=<?php echo isset($this->data['id']) ? "update" : "create" ?>" method="post">

            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input required type="text" value="<?php echo isset($this->data['title']) ? $this->data['title'] : null ?>" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input required type="number" value="<?php echo isset($this->data['size']) ? $this->data['size'] : null ?>" class="form-control" id="size" name="size" aria-describedby="size" placeholder="Enter size land">
                    </div>
                </div>
            </div>

<!-- //generar select -->
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="property">Property</label>
                        <input type="number" value="<?php echo isset($this->data['id_user']) ? $this->data['id_user'] : null ?>" class="form-control" id="id_user" name="id_user" aria-describedby="id_user" placeholder="Enter id_user">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                    <label for="property">Location</label>
                        <input type="text" value="<?php echo isset($this->data['id_user']) ? $this->data['id_user'] : null ?>" class="form-control" id="id_user" name="id_user" aria-describedby="id_user" placeholder="Enter id_user">
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="pre_build">Pre build</label>
                        <input type="text" value="<?php echo isset($this->data['pre_build']) ? $this->data['pre_build'] : null ?>" class="form-control" id="pre_build" name="pre_build" aria-describedby="pre_build" placeholder="Insert if the land is built">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="exampleprice">Price</label>
                        <input type="textarea" value="<?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter price">
                    </div>
                </div>
            </div>


            <div class="form-row">
            <div class="col">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea required type="textarea" value="<?php echo isset($this->data['description']) ? $this->data['description'] : null ?>" class="form-control" id="description" name="description" aria-describedby="location" placeholder="Enter description"> Enter description here></textarea>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="location">Upload Image</label>
                            <input type="file" id="img" name="img" value="<?php echo isset($this->data['img']) ? $this->data['img'] : null ?>">
                            <input type="submit">
                    </div>
                </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Admin&action=getAllProducts&action=getAllProducts"; ?>">Return</a>
        </form>
    </div>
</body>
</html>