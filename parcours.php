<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours</title>
    <link rel="icon" href="static/house-solid.svg" type="image/x-icon">

    <?php
    include 'link.php';
    $activepage = 'Parcours';

    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="static/media/logo-transparent-png.png" sizes="64x64" type="image/png">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Roboto&family=Roboto+Condensed:wght@300&display=swap');
</style>

<body class="bg-blue-900">
    <div class="scrollbar" id="style-1">
        <div class="force-overflow"></div>
    </div>
    <?php
    include 'navbar.php'
    ?>
    <div id="particles-js" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">
    </div>
    <div class="flex justify-center w-screen fade-in">
        <div class="grid grid-cols-2 w-96  mt-10 " style="width: 30vw;">
            <button id="scolaire" class="scolaire rounded h-10 text-white fr bg-neutral-700 hover:bg-white/20 w-60 place-self-center"><i class="fa-solid fa-graduation-cap"></i> Scolaire</button>
            <button id="pro" class="pro rounded h-10 text-white fr bg-white/40 backdrop-blur hover:bg-white/20 w-60 place-self-center"><i class="fa-solid fa-user-tie"></i> Professionnels</button>

            <button id="scolaire" class=" scolaire rounded h-10 text-white en bg-neutral-700 hover:bg-white/20 w-60 place-self-center"><i class="fa-solid fa-graduation-cap"></i> Academic</button>
            <button id="pro" class="pro rounded h-10 text-white en bg-white/40 backdrop-blur hover:bg-white/20 w-60 place-self-center"><i class="fa-solid fa-user-tie"></i> professionals</button>

        </div>
    </div>

    <div class="flex justify-center w-screen items-center fade-in" style="height: 80vh;">


        <div id="par_scol" class="">
            <img src="static/media/parcour_sco.png" alt="" class="rounded " style="width: 70vw; height: 70vh;">


        </div>
        <div id="par_pro" class=" hidden ">
            <img src="static/media/parcour_pro.png" alt="" class="rounded " style="width: 70vw; height: 70vh;">

        </div>
        <!-- <div id="par_pro" class="grid grid-cols-2 w-96 hidden ">
            <div class=" bg-white h-20  rounded  place-self-center" style="width: 1px;">

            </div>
            <div></div>
            <div class="bg-white h-20 w-20  rounded-full place-self-center">

            </div>
            <p class="text-white">BUT Informatique (en cours)
                Université Savoie Mont Blanc, Annecy
                2021-2024 </p>

            <div class=" bg-white h-60  rounded  place-self-center" style="width: 1px;">

            </div>
            <div></div>
            <div class="bg-white h-20 w-20  rounded-full place-self-center">

            </div>
            <p class="text-white" style="width: 25vw;">Baccalauréat sciences et technologies de l'industrie et du
                développement
                durable
                2021 Lycée Louis Lachenal Argonay, France
                -Spécialité Systeme d'Information Numerique
                -Mention Assez Bien</p>

            <div class=" bg-white h-20  rounded  place-self-center" style="width: 1px;">

            </div>
            <div></div> -->

    </div>




    </div>
    <a href="static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500"><i class="bi bi-github"></i></a>
    <a href="static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500"><i class="bi bi-github"></i></a>    <div id="" class="fade-in Bienvenue fixed mb-1 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
        <span style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</span>

    </div>


    <div id="myModal" class="modal z-50">
        <span class="close absolute top-2" onclick="closeModal()">&times;</span>
        <div id="modal_content" class="" style="height: 85vh; width: 50vw;">

        </div>


    </div>


    <script src="static/JS/particles.js"></script>
    <script src="static/JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@vitalets/google-translate-api"></script>

    <?php
    include 'tanslate.php'
    ?>

    <script>
        $(document).ready(function() {

            $('.scolaire').click(() => {
                $('.scolaire').removeClass('bg-white/40').addClass('bg-neutral-700');
                $('.pro').removeClass('bg-neutral-700').addClass('bg-white/40');

                $('#par_pro').addClass('hidden');
                $('#par_scol').removeClass('hidden');
            });

            $('.pro').click(() => {
                $('.scolaire').removeClass('bg-neutral-700').addClass('bg-white/40');
                $('.pro').removeClass('bg-white/40').addClass('bg-neutral-700');

                $('#par_scol').addClass('hidden');
                $('#par_pro').removeClass('hidden');
            });




            const images = document.querySelectorAll('.fade-in');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    } else {
                        entry.target.classList.remove('is-visible');
                    }
                });
            });

            images.forEach(image => {
                observer.observe(image);
            });

            // Observer each image
            images.forEach(image => {
                observer.observe(image);
            });
            if (!$.browser.webkit) {
                $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
            }
        });
    </script>




</body>


</html>