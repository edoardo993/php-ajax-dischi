<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Discs</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>

        <!-- header -->
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo">
            </div>
        </header>
        <!-- end header -->

        <!-- cds container -->
        <div class="cds-container container">

            <?php
                require_once 'database/database.php';
                foreach($discs as $infoDisk){
            ?>

            <div class="cd">
                <img src="<?php echo $infoDisk['poster'] ?>" alt="">
                <h3><?php echo $infoDisk['title'] ?></h3>
                <span class="author"><?php echo $infoDisk['author'] ?></span>
                <span class="year"><?php echo $infoDisk['year'] ?></span>
            </div>

            <?php
            }
            ?>

        </div>
        <!-- end cds container -->

    </body>
</html>