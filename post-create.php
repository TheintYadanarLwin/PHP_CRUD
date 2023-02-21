<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>POST CREATE</title>
</head>

<body>

    <?php
    require "database.php";
    $titleError = "";
    $descriptionError = "";

    if (isset($_POST["create-btn"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];

        if(empty($title)) {
            $titleError = "Tile is Required";
        }
        if(empty($description)) {
            $titleError = "Description is Required";
        }

        if(!empty($title) && !empty($description)) {
            $query = "INSERT INTO posts(title,description) VALUES('$title','$description')";
            mysqli_query($db,$query);
        }
       
    }

    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">POST LISTS</div>
                        <div>
                            <a href="index.php" class="btn btn-secondary">
                                << BACK </a>
                        </div>
                    </div>
                    <form method="POST" action="post-create.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" value="<?php echo $title; ?>" name="title" class="form-control" placeholder="Enter Post Title">
                                <span class="text-danger"><?php echo $titleError; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="Textarea">Description</label><?php echo $description; ?></textarea>
                                <span class="text-danger"><?php echo $descriptionError; ?></span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button name="create-btn" type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>