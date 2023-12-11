<?php
session_start();
include './class/Plane.php';

if (isset($_GET['disconnect'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>

<body class="bg-gradient-to-r to-blue-500 bg-cyan-500 from-cyan-500">
    <?php include('./component/header.php'); ?>
    <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {

    ?>

        <div class="grid grid-cols-2 gap-4  w-3/4 m-auto p-3 rounded-xl mt-10 mb-10">
            <div>
                <h2 class="text-5xl text-white">Données personnelles</h2>
                <p class="mt-2 text-xl">
                    <span class="text-white">Nom :</span> <?= $_SESSION['nom'] ?><br />
                    <span class="text-white">Prénom :</span> <?= $_SESSION['prenom'] ?><br />
                    <span class="text-white">Date de naissance :</span> <?= $_SESSION['naissance'] ?><br />
                    <span class="text-white">Civilité :</span> <?= $_SESSION['civilite'] ?>
                </p>
            </div>
            <div>
                <h2 class="text-5xl text-white">Coordonnées</h2>
                <p class="mt-2 text-xl">

                    <span class="text-white">Email :</span> <?= $_SESSION['email'] ?><br />
                    <span class="text-white"> N° téléphone :</span> <?= $_SESSION['telephone'] ?>
                </p>
            </div>
        </div>







    <?php
    } else {
    ?>

    <?php
    }
    ?>
    <div class="w-3/4 m-auto flex flex-col place-content-center">

        <div class="p-2 w-1/4 text-center border-2 border-cyan-100 ">Modifier ses informations</div>

        <form action="profil.php" method="get">
            <button type="submit" name="disconnect" class="p-2 w-1/4 text-center bg-cyan-100 w-1/4 mt-2">Se déconnecter</button>
        </form>
    </div>


</body>

</html>