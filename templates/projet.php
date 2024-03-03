<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="icon" href="../static/house-solid.svg" type="image/x-icon">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="../static/media/logo-transparent-png.png" sizes="64x64" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php
    include 'link.php';
    $activepage = 'Projet';

    ?>
</head>
<style>
    swiper-container {
        border-radius: 10px !important;
    }

    swiper-slide {
        border-radius: 10px !important;

        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide img {
        border-radius: 10px !important;

        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Roboto&family=Roboto+Condensed:wght@300&display=swap');
</style>

<body class="bg-blue-900 ">
    <div class="scrollbar" id="style-1">
        <div class="force-overflow"></div>
    </div>


    <?php
    include 'navbar.php'
    ?>
    <div id="particles-js" class="absolute top-0 -z-50 w-screen h-screen" >
    </div>


        <div class="grid  grid-cols-5 gap-32  mt-5 " style="width: 95vw; height: 80vh; overflow: auto;">

            <div class=" col-start-2 col-span-3 ml-32 mb-48    mt-16 fade-in">
                <!-- <div id="carouselExampleIndicators" class="fade-in  carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner border-hidden rounded">
                            <div class="carousel-item active">
                                <div id="proj1" onclick="openModal('proj1')">
                                    <img src="../static/media/miliboo.png" class="d-block w-100 rounded  hover:cursor-pointer" style="height: 50vh;" alt="...">
                                    <h3 class="text-red-500 mt-2 text-xl desc hidden">Description : </h3>

                                    <p class=" hidden text-white descfr mt-2 text-base">

                                        Miliboo est une entreprise de vente de meubles en ligne. Le but de notre projet
                                        universitaire était de développer le site web ainsi que tous les autres aspects
                                        nécessaires pour une vente en ligne sécurisée (base de données, rendu droit,
                                        cryptographie, etc.).

                                        Nb : Miliboo est une entreprise qui existe réelement, mais nous n'étions pas en
                                        relation avec eux, c'est un projet fictif.</p>
                                    <p class=" hidden text-white descen mt-2 text-base">

                                        Miliboo is an online furniture sales company. The purpose of our project
                                        university was to develop the website as well as all other aspects
                                        necessary for a secure online sale (database, straight,
                                        cryptography, etc.).

                                        Note: Miliboo is a company that actually exists, but we were not in
                                        relationship with them is a fictional project.</p>


                                </div>

                            </div>
                            <div class="carousel-item">
                                <img id="proj1" src="../static/media/miliboo2.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                            </div>
                            <div class="carousel-item">
                                <img id="proj1" src="../static/media/miliboo3.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                            </div>
                            <div class="carousel-item">
                                <img id="proj1" src="../static/media/miliboo4.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                            </div>
                            <div class="carousel-item">
                                <img id="proj1" src="../static/media/miliboo5.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                            </div>
                        </div>
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class=" " aria-hidden="true"><i class="text-4xl text-neutral-900 bi bi-caret-left-fill"></i></span>
                            <span class="visually-hidden ">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class=" " aria-hidden="true"><i class="text-4xl text-neutral-900 bi bi-caret-right-fill"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->
                <swiper-container class="mySwiper" rewind="true" navigation="true" pagination="true" >
                    <swiper-slide class="bg-black" onclick="openModal('proj1')">
                        <div id="proj1" class="w-full">
                            <img src="../static/media/miliboo2.png" class="d-block w-100 rounded hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">

                            <h3 class="text-red-500 mt-2 text-xl desc hidden">Description : </h3>

                            <p class=" hidden text-white descfr mt-2 text-base">

                                Miliboo est une entreprise de vente de meubles en ligne. Le but de notre projet
                                universitaire était de développer le site web ainsi que tous les autres aspects
                                nécessaires pour une vente en ligne sécurisée (base de données, rendu droit,
                                cryptographie, etc.).

                                Nb : Miliboo est une entreprise qui existe réelement, mais nous n'étions pas en
                                relation avec eux, c'est un projet fictif.</p>
                            <p class=" hidden text-white descen mt-2 text-base">

                                Miliboo is an online furniture sales company. The purpose of our project
                                university was to develop the website as well as all other aspects
                                necessary for a secure online sale (database, straight,
                                cryptography, etc.).

                                Note: Miliboo is a company that actually exists, but we were not in
                                relationship with them is a fictional project.</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <img id="proj1" src="../static/media/miliboo2.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                    </swiper-slide>
                    <swiper-slide>
                        <img id="proj1" src="../static/media/miliboo3.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                    </swiper-slide>
                    <swiper-slide>
                        <img id="proj1" src="../static/media/miliboo4.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                    </swiper-slide>
                    <swiper-slide>
                        <img id="proj1" src="../static/media/miliboo5.png" class="d-block w-100  hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj1')">
                    </swiper-slide>
                </swiper-container>

                <div>
                    <div class="fade-in grid grid-cols-3 pt-1 pb-1" style="width: 47vw;">
                        <a href="https://github.com/Adkhey74/Miliboo" target="_blank" class="btn bg-black  justify-start mt-1 mb-1 text-gray-300 fade-in hover:text-white w-fit">Github
                            <i class="bi bi-github"></i>
                        </a>
                        <h1 class="text-white text-xl place-self-center">
                            Miliboo
                        </h1>
                        <a onclick="openModal('proj1')" target="_blank" class="btn bg-black text-xl  place-self-end mt-1 mb-1 text-gray-300 fade-in hover:text-white w-fit">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>

                </div>

                <div class="grid grid-cols-3" style="width: 47vw;">
                    <div class="place-self-start">
                        <h3 class="text-red-500 fade-in">Date</h3>
                        <span class="text-zinc-200 font-bold fade-in">Oct. 2022 - Jan.2023 </span>
                    </div>
                    <div class="place-self-center">
                        <h3 class="text-red-500 fade-in">Techs</h3>
                        <span class="text-zinc-200 fade-in  font-bold"> HTML, CSS, JavaScript, Laravel</span>
                    </div>
                    <div class="place-self-end fr">
                        <h3 class="text-red-500 fade-in ">Rôles</h3>
                        <span class="text-zinc-200 fade-in  font-bold">Développement back-end</span>
                    </div>
                    <div class="place-self-end en">
                        <h3 class="text-red-500 fade-in">Roles</h3>
                        <span class="text-zinc-200 fade-in  font-bold">Back-end development</span>
                    </div>
                </div>

            </div>
            <div class=" col-start-2 col-span-3 ml-32 mb-40  fade-in">
                <div id="carouselExampleIndicators2" class="fade-in  carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 5"></button>

                    </div>
                    <div class="carousel-inner border-hidden rounded">
                        <div class="carousel-item active">
                            <div id="proj2__1" onclick="openModal('proj2__1')">
                                <img src="../static/media/land_reunion_home.png" class="d-block w-100 object-cover rounded  hover:cursor-pointer  " style="height: 50vh;" alt="...">
                                <h3 class="text-red-500 hidden desc mt-2 text-xl">Description : </h3>
                                <p class="hidden text-white descen mt-2 text-base">

                                    Land Cover on Reunion is an innovative application designed to map the island
                                    of Réunion by identifying in detail and precise all its lands.
                                    Each type of terrain is distinguished by a specific color, allowing a
                                    clear and intuitive visualization of the island’s geographical diversity.

                                    This project takes advantage of convolutional neural network (CNN) models, developed
                                    with TensorFlow, a cutting-edge machine learning platform. These models
                                    CNN are specially designed to analyze and interpret complex images,
                                    making our application particularly effective in recognition and
                                    classification of different types of land cover.

                                    Intended for a wide range of users, from geography enthusiasts to
                                    professionals in the field, Land Cover on Reunion aims to be accessible and useful for
                                    all. Whether for educational projects, research, or simply to
                                    satisfy curiosity, our app offers a unique perspective on
                                    the natural environment of the island.

                                    One of the main advantages of Land Cover on Reunion is its ability to provide
                                    detailed and accurate information about the landscape of the island, which can be
                                    beneficial for a variety of applications, ranging from urban planning to
                                    nature conservation. This innovative approach not only facilitates
                                    understanding of the complex geography of Reunion, but also paves the way
                                    new ways of exploring and preserving the environment.</p>
                                <p class="hidden text-white descfr mt-2 text-base">

                                    Land Cover on Reunion est une application innovante conçue pour cartographier l'île
                                    de la Réunion en identifiant de manière détaillée et précise tous ses terrains.
                                    Chaque type de terrain est distingué par une couleur spécifique, permettant une
                                    visualisation claire et intuitive de la diversité géographique de l'île.

                                    Ce projet tire parti de modèles de réseaux de neurones convolutifs (CNN), développés
                                    avec TensorFlow, une plateforme d'apprentissage automatique de pointe. Ces modèles
                                    CNN sont spécialement conçus pour analyser et interpréter des images complexes,
                                    rendant notre application particulièrement efficace dans la reconnaissance et la
                                    classification des différents types de couvertures terrestres.

                                    Destinée à un large éventail d'utilisateurs, de passionnés de géographie aux
                                    professionnels du domaine, Land Cover on Reunion se veut accessible et utile pour
                                    tous. Que ce soit pour des projets éducatifs, de recherche, ou simplement pour
                                    satisfaire la curiosité, notre application offre une perspective unique sur
                                    l'environnement naturel de l'île.

                                    L'un des principaux avantages de Land Cover on Reunion est sa capacité à fournir des
                                    informations détaillées et précises sur le paysage de l'île, ce qui peut être
                                    bénéfique pour une variété d'applications, allant de la planification urbaine à la
                                    conservation de la nature. Cette approche innovante non seulement facilite la
                                    compréhension de la géographie complexe de la Réunion, mais ouvre également la voie
                                    à de nouvelles méthodes d'exploration et de préservation de l'environnement.</p>

                            </div>

                        </div>

                        <div class="carousel-item">
                            <img id="proj2__2" src="../static/media/model2.png" class="d-block w-100 object-cover rounded hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj2__1')">
                        </div>
                        <div class="carousel-item">
                            <img id="proj1" src="../static/media/dataset.png" class="d-block w-100 object-cover rounded hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj2__1')">
                        </div>
                        <div class="carousel-item">
                            <img id="proj2__4" src="../static/media/model.png" class="d-block w-100 object-cover rounded hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj2__1')">
                        </div>
                        <div class="carousel-item">
                            <img id="proj2__5" src="../static/media/land_reunion_pictures.png" class="d-block w-100 object-cover rounded hover:cursor-pointer" style="height: 50vh;" alt="..." onclick="openModal('proj2__1')">
                        </div>



                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class=" " aria-hidden="true"><i class="text-4xl text-neutral-900 bi bi-caret-left-fill"></i></span>
                        <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class=" " aria-hidden="true"><i class="text-4xl text-neutral-900 bi bi-caret-right-fill"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div>
                    <div class="fade-in grid grid-cols-3 pt-1 pb-1" style="width: 47vw;">
                        <a href="https://github.com/Adkhey74/Land-cover-on-Reunion" target="_blank" class="btn bg-black  justify-start mt-1 mb-1 text-gray-300 fade-in hover:text-white w-fit">Github
                            <i class="bi bi-github"></i>
                        </a>
                        <h1 class="text-white text-xl place-self-center">
                            Land cover on Reunion
                        </h1>
                        <a onclick="openModal('proj2__1')" target="_blank" class="btn bg-black text-xl  place-self-end mt-1 mb-1 text-gray-300 fade-in hover:text-white w-fit">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>

                </div>

                <div class="grid grid-cols-3" style="width: 47vw;">
                    <div class="place-self-start">
                        <h3 class="text-red-500 fade-in">Date</h3>
                        <span class="text-zinc-200 font-bold fade-in">Nov. 2023 - Dec.2023</span>
                    </div>
                    <div class="place-self-end">
                        <h3 class="text-red-500 fade-in">Techs</h3>
                        <span class="text-zinc-200 fade-in  font-bold">HTML, CSS, JavaScript, Flask</span>
                    </div>
                    <div class="place-self-end fr">
                        <h3 class="text-red-500 fade-in">Rôles</h3>
                        <span class="text-zinc-200 fade-in  font-bold">Développement front et back</span>
                    </div>
                    <div class="place-self-end en">
                        <h3 class="text-red-500 fade-in">Roles</h3>
                        <span class="text-zinc-200 fade-in  font-bold">front and Back development</span>
                    </div>



                </div>


            </div>
        </div>
    </div>
    <a href="../static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="../static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500"><i class="bi bi-github"></i></a>
    <div id="" class="fade-in fixed mb-3 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
        <h1 style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</h1>

    </div>


    <div id="myModal" class="modal z-50 bg-black/50 backdrop-blur-md">
        <span class="close absolute top-2" onclick="closeModal()">&times;</span>
        <div id="modal_content" class="" style="height: 85vh; width: 50vw;">

        </div>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="../static/JS/particles.js"></script>
    <script src="../static/JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@vitalets/google-translate-api"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php
    include 'tanslate.php'
    ?>
    <script>
        $(document).ready(function() {
            $('#langSelect').change(function() {
                translate();
            });

            function translate() {

                var sourceText = $('#translatable').text();
                var sourceLang = 'en';
                var targetLang = 'fr';
                console.log(sourceText);

                var url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=" + sourceLang + "&tl=" + targetLang + "&dt=t&q=" + encodeURI(sourceText);
                //console.log(url);

                $.getJSON(url, function(data) {
                    $('#translatable').val(data[0][0][0]);
                });

            }
        });
    </script>


    <script>
        $(document).ready(function() {
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
<script>
    var compt = 1;

    function openModal(id) {

        if (compt == 1) {
            const modal = document.getElementById('myModal');
            const modal_content = document.getElementById('modal_content');

            const modalcontent = document.getElementById(id);

            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';

            modal_content.style.display = 'flex';
            modal_content.style.justifyContent = 'center';
            modal_content.style.alignItems = 'center';

            modal_content.style.marginTop = '7vh';

            var copiedElement = modalcontent.cloneNode(true);
            modal_content.append(copiedElement);
            $('#modal_content').find('.desc').removeClass('hidden');

            if ($('#langSelect').val() === 'fr') {
                $('#modal_content').find('.descfr').removeClass('hidden');

                $('#modal_content').find('.descen').addClass('hidden');

            } else {
                $('#modal_content').find('.descen').removeClass('hidden');
                $('#modal_content').find('.descfr').addClass('hidden');

            }

            document.body.style.overflow = 'hidden';
            modal.classList.add("active");

            // Ajout de la classe pour l'effet "flip down"
            modal_content.classList.add("flip-down");
            compt = 2;

        }

    }

    function closeModal() {
        compt = 1;

        const modal = document.getElementById('myModal');
        const modal_content = document.getElementById('modal_content');

        modal.style.display = 'none';
        modal_content.innerHTML = "";
        document.body.style.overflow = 'visible';
    }
</script>

</html>