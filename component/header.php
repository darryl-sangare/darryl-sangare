<header class="grid grid-cols-2 gap-4 lg:grid-cols-4 bg-white shadow-xl" >
    <div class="cursor-pointer grid place-items-start pt-1 pb-2 lg:col-span-1  "><img src="./assets/images/logo.svg" class="w-14 mt-2 ml-4  " alt=""></div>
    <div class="cursor-pointer grid place-items-end pb-2 pr-6 lg:hidden  "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify">
            <line x1="3" x2="21" y1="6" y2="6" />
            <line x1="3" x2="21" y1="12" y2="12" />
            <line x1="3" x2="21" y1="18" y2="18" />
        </svg></div>

    <div class="hidden lg:grid place-items-center col-span-2 grid-cols-3 p-3 ">
        <a class="grid font-semibold text-lg cursor-pointer text-white hover:underline text-black  pb-1" href="index.php">Accueil</a>
        <a class="grid font-semibold text-lg cursor-pointer text-white hover:underline text-black  pb-1" href="index.php#activites">Decouvrir</a>

        <a class="grid font-semibold text-lg cursor-pointer text-white hover:underline text-black  pb-1">Contact</a>
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
        <div class="hidden lg:grid place-items-center grid-cols-1 pl-9  ">
            <div class=" grid  "> <a class=" bg-blue-600 w-full text-center rounded-md textfont-semibold text-md cursor-pointer  p-2 pl-6 pr-6 text-white " href="connexion.php">Se connecter</a></div>

        </div>

    <?php
    }
    ?>


</header>