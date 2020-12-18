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
            <div class="filter">
                <select>
                    <?php foreach ($database as $album) {?>
                        <option value=""><?php echo $album['author'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="main container">
                <div v-for="album in albums" class="box">
                    <div class="img">
                        <img :src="album.poster" :alt="album.title">
                    </div>
                    <h3>{{ album.title }}</h3>
                    <h5>{{ album.author }}</h5>
                    <h4>{{ album.year }}</h4>
                    <h5>{{ album.genre }}</h5>
                </div>        
            </div>

        </main>


    </div>    

    <script src="./dist/js/app.js"></script>
</body>
</html>