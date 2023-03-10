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
       <?php require("./layout/_navbar.php")?>

       

        <main id="main">
            <div class="main-container-blog">
                <!-- left -->
                <div class="left">
                    <div class="content">
                        <?php require("./layout/_content.php")?>
                    </div>

                    <!-- comments start -->
                    <div class="comment">
                        <?php require("./layout/_comment.php")?>
                    </div>
                    <!-- commentes end -->
                    <!-- message start -->
                    <div class="message">
                        <?php require("./layout/_messages.php")?>
                    </div>
                    <!-- message end -->
                </div>
                <!-- right -->
                <div class="right" style="margin-top: 40px;">
                    <?php require("./layout/_right-content.php")?>
                    
                </div>
            </div>
        </main>

        <footer id="footer">
            <?php require("./layout/_footer.php")?>
        </footer>
    </div>
</body>
</html>