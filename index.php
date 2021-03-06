<?php session_start();
/* ---------------------------------------
,--.           ,--.                  
|  |,--,--,  ,-|  | ,---. ,--.  ,--. 
|  ||      \' .-. || .-. : \  `'  /  
|  ||  ||  |\ `-' |\   --. /  /.  \  
`--'`--''--' `---'  `----''--'  '--' 
--------------------------------------- */ ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinckier.N CV</title>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<!-- ---------- "html" de la page ---------- -->
<section id="menu">
    <div>
        <?php include("layout/menu.php") ?>
    </div>
    <div>
        <main>
            <?php include("routeur.php") ?>
        </main>
    </div>
</section>
<!-- --------------------------------------- -->


<!-- --------------------------------------------------------------------------------------- -->
<div style="height: 50px;"></div>
<!-- --------------------------------------------------------------------------------------- -->

<footer style="text-align: center">
    Copyright © 2022 CV Nicolas.Vinckier
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>