<?php
include __DIR__.'/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="d-flex align-items-center">
        <div class="logo_container">
            <img class="img-fluid" src="./img/logo.png" alt="">
        </div>
    </header>
    <main class="container">
        <div class="row">
            <?php foreach($albums as $album){?>
            <div class="col colonne py-3 gy-0 d-flex" >
                <div class="my_card rounded text-center align-items-stretch">
                    <img class="img-fluid" src="<?php echo $album['poster']?>" alt="">
                    <h3><?php echo $album['title']?></h3>
                    <div class="specifics"><?php echo $album['author']."<br>".$album['year']?> </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    
</body>
</html>