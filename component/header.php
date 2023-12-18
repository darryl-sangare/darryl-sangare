<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC2FL</title>
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo.svg" />
</head>

<body class="bg-cyan-500 overflow-hidden overflow-y-scroll">
    <header class="grid grid-cols-2 gap-4 lg:grid-cols-4 bg-white shadow-xl">
        <div class="cursor-pointer grid place-items-start pt-2 lg:col-span-1  "><img src="./assets/images/logof.png" class="w-14 mt-0 ml-12 mb-1 " alt=""></div>
        <div class="cursor-pointer grid place-items-end pb-2 pr-6 lg:hidden "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
            </svg></div>

        <div class="hidden lg:grid place-items-center col-span-2 grid-cols-3 p-3 ">
            <a class="grid font-semibold text-md cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php">ACCUEIL</a>
            <a class="grid font-semibold text-md cursor-pointer text-black hover:underline text-black  pb-1 " href="index.php#activites">DECOUVRIR</a>

            <a class="grid font-semibold text-md cursor-pointer text-black hover:underline text-black  pb-1 ">CONTACT</a>
        </div>


        <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            $dateObj = new DateTime($_SESSION['naissance']);
            $anniversaire = $dateObj->format('m-d');
        ?>

            <div class="hidden lg:flex  place-items-center  self-center justify-end pr-10">
                <img src="./assets/images/compte.svg" alt="compte identifier">
                <a href="profil.php">
                    <p class="font-semibold text-sm text-white"> <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?><?php if ($anniversaire == $_SESSION['today']) {
                                                                                                                        echo "🎉";
                                                                                                                    } ?></p>
                </a>
            </div>

        <?php
        } else {
        ?>
            <div class="hidden lg:grid place-items-center grid-cols-2 pl-14 ">
                <div class=" grid"> <a class="  w-full text-center rounded-sm text-white  text-md cursor-pointer  py-2 px-5  font-Arial bg-blue-800 hover:bg-blue-600 duration-300  hover:scale-105 " href="index.php?connexion">Se connecter</a></div>

            </div>

        <?php
        }
        ?>


    </header>