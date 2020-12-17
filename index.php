<!-- import -->
<?php require __DIR__ . '/partials/variables.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>Document</title>
</head>
<body>

    <div id="app">

        <!-- import header -->
        <?php require __DIR__ . '/partials/templates/header.php' ?> 
        <main>
            <div class="main container">
                <?php foreach ($database as $album){ ?>
                    <div class="box">
                        <div class="img">
                            <img src="<?php echo $album['poster'] ?>" alt="">
                        </div>
                        <h3><?php echo $album['title'] ?></h3>
                        <h5><?php echo $album['author'] ?></h5>
                        <h4><?php echo $album['year'] ?></h4>
                        <h5><?php echo $album['genre'] ?></h5>
                        
                    </div>

                <?php } ?>
                
                


            </div>

        </main>


    </div>    

    <script src="./dist/js/app.js"></script>
</body>
</html>