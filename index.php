<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sitesi</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/utils.css">
    <script src="https://kit.fontawesome.com/ff0e6d1a18.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
       <?php require("./layout/_navbar.php") ?>

        <main id="main">
            <div class="main-container">
                <?php require("./layout/_blogs.php")?>              
            </div>
        </main>
        <?php require("./layout/_footer.php")?>
    </div>
</body>
</html>