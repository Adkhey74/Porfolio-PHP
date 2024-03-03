<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences</title>
    <link rel="icon" href="static/house-solid.svg" type="image/x-icon">

    <?php
    include 'link.php';
    $activepage = 'Compétences';

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
    ?> <div id="particles-js" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">


    </div>
    <div style="width: 99vw;" class="flex mt-3 ml-2 justify-center fade-in">
        <!-- <div class="input-group text-white word en " style="width: 20vw;">
            <span class="input-group-text bg-white/40 backdrop-blur text-black border-hidden  rounded-r-lg" style="font-family: 'titre', sans-serif !important">Categories</span>

            <select name="" id="Catégories" class=" form-select bg-white/40 backdrop-blur text-black border-hidden" style="font-family: 'titre', sans-serif !important">
                <option value="" class="bg-white backdrop-blur"></option>
                <option value="front-end" class="bg-light-blue backdrop-blur" style="font-family: 'titre', sans-serif !important">Front-end</option>
                <option value="back-end" class="bg-light-green backdrop-blur" style="font-family: 'titre', sans-serif !important">Back-end</option>
                <option value="databases" class="bg-light-pink backdrop-blur" style="font-family: 'titre', sans-serif !important">Databases</option>
            </select>

        </div> -->
        <div class="input-group text-white word fr " style="width: 20vw;">
            <span class="input-group-text bg-white/40 backdrop-blur text-black border-hidden  rounded-r-lg" style="font-family: 'titre', sans-serif !important">Catégories</span>

            <select name="" id="Catégories" class=" form-select bg-white/40 backdrop-blur text-black border-hidden" style="font-family: 'titre', sans-serif !important">
                <option value="" class="bg-white backdrop-blur"></option>
                <option value="front-end" class="bg-light-blue backdrop-blur" style="font-family: 'titre', sans-serif !important">Front-end</option>
                <option value="back-end" class="bg-light-green backdrop-blur" style="font-family: 'titre', sans-serif !important">Back-end</option>
                <option value="databases" class="bg-light-pink backdrop-blur" style="font-family: 'titre', sans-serif !important">Databases</option>
            </select>

        </div>

    </div>
    <div style="width: 99vw; height: 79vh; overflow:scroll;" class="flex justify-center mt-4 fade-in">

        <div class="grid grid-cols-3 gap-24 mb-5">
            <div id="HTML" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/html.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">HTML</h1>

                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>
            </div>
            <div id="CSS" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/csspng.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">CSS</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>

            </div>
            <div id="JS" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/js.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">JavaScript</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 70%"></div>
                </div>

            </div>
            <div id="PHP" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/PHP.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 15vw;">PHP</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 75%"></div>
                </div>

            </div>
            <div id="c-sharp" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/csharp.svg.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 15vw;">C-sharp</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 62%"></div>
                </div>

            </div>
            <div id="Mysql" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/mysql.png" alt="" class="r" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">MySQL</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 70%"></div>
                </div>

            </div>
            <div id="postgres" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/postgres.png" alt="" class="" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">PostgresSQL</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>

            </div>
            <div id="sqlserver" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/sqlserver.png" alt="" class="" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">SQL Server</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>

            </div>
            <div id="Python" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/python.png" alt="" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">Python</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 60%"></div>
                </div>

            </div>
            <div id="bootstrap" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/Bootstrap.png" alt="" class="" style="width: 10vw; height:20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">Bootstrap</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>

            </div>
            <div id="Tailwind" class=" rounded p-5 fade-in" style="width: 20vw;">
                <div class="flex justify-center">
                    <img src="static/media/Tailwindcss.svg.png" alt="" class="" style="width: 10vw; height: 20vh;">

                </div>
                <div class="flex justify-center">

                    <h1 class="text-white flex justify-center mt-4" style="width: 10vw;">Tailwind CSS</h1>
                </div>
                <div class="w-full bg-white/30 rounded-full mt-4 h-3 ">
                    <div class="bg-white/50  h-3 rounded-full" style="width: 80%"></div>
                </div>

            </div>

        </div>


    </div>



    </div>
    <a href="static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500"><i class="bi bi-github"></i></a>
    <div id="" class="fade-in Bienvenue fixed mb-1 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
        <span style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</span>

    </div>


    <div id="myModal" class="modal z-50">
        <span class="close absolute top-2" onclick="closeModal()">&times;</span>
        <div id="modal_content" class="" style="height: 85vh; width: 50vw;">

        </div>


    </div>
    </div>

    <script src="static/JS/particles.js"></script>
    <script script src="static/JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@vitalets/google-translate-api"></script>
    <?php
    include 'tanslate.php'
    ?>
    <script>
        anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml15 .word',
                scale: [14, 1],
                opacity: [0, 1],
                easing: "easeOutCirc",
                duration: 800,
                delay: (el, i) => 800 * i
            }).add({
                targets: '.ml15',
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1200
            });
        $('#Catégories').change(() => {
            if ($('#Catégories').val() == 'front-end') {



                $('#PHP').addClass('hidden')
                $('#Mysql').addClass('hidden')
                $('#Python').addClass('hidden')
                $('#c-sharp').addClass('hidden')
                $('#PHP').addClass('hidden')
                $('#HTML').addClass('hidden')
                $('#CSS').addClass('hidden')
                $('#bootstrap').addClass('hidden')
                $('#Tailwind').addClass('hidden')
                $('#postgres').addClass('hidden')
                $('#sqlserver').addClass('hidden')


                $('#PHP').removeClass('fade-in')
                $('#Mysql').removeClass('fade-in')
                $('#Python').removeClass('fade-in')
                $('#c-sharp').removeClass('fade-in')
                $('#PHP').removeClass('fade-in')
                $('#HTML').removeClass('fade-in')
                $('#CSS').removeClass('fade-in')
                $('#bootstrap').removeClass('fade-in')
                $('#Tailwind').removeClass('fade-in')



                $('#HTML').removeClass('hidden')
                $('#CSS').removeClass('hidden')
                $('#bootstrap').removeClass('hidden')
                $('#Tailwind').removeClass('hidden')

                $('#HTML').addClass('fade-in')
                $('#CSS').addClass('fade-in')
                $('#bootstrap').addClass('fade-in')
                $('#Tailwind').addClass('fade-in')

            }
            if ($('#Catégories').val() == 'back-end') {
                $('#PHP').addClass('hidden')
                $('#Mysql').addClass('hidden')
                $('#Python').addClass('hidden')
                $('#c-sharp').addClass('hidden')
                $('#PHP').addClass('hidden')
                $('#HTML').addClass('hidden')
                $('#CSS').addClass('hidden')
                $('#bootstrap').addClass('hidden')
                $('#Tailwind').addClass('hidden')

                $('#PHP').removeClass('fade-in')
                $('#Mysql').removeClass('fade-in')
                $('#Python').removeClass('fade-in')
                $('#c-sharp').removeClass('fade-in')
                $('#PHP').removeClass('fade-in')
                $('#HTML').removeClass('fade-in')
                $('#CSS').removeClass('fade-in')
                $('#bootstrap').removeClass('fade-in')
                $('#Tailwind').removeClass('fade-in')



                $('#PHP').removeClass('hidden')
                $('#Mysql').removeClass('hidden')
                $('#Python').removeClass('hidden')
                $('#c-sharp').removeClass('hidden')
                $('#JS').removeClass('hidden')
                $('#postgres').removeClass('hidden')
                $('#sqlserver').removeClass('hidden')

                $('#PHP').addClass('fade-in')
                $('#Mysql').addClass('fade-in')
                $('#Python').addClass('fade-in')
                $('#c-sharp').addClass('fade-in')
                $('#JS').addClass('fade-in')


            }
            if ($('#Catégories').val() == 'databases') {
                $('#PHP').removeClass('fade-in')
                $('#Mysql').removeClass('fade-in')
                $('#Python').removeClass('fade-in')
                $('#c-sharp').removeClass('fade-in')
                $('#PHP').removeClass('fade-in')
                $('#HTML').removeClass('fade-in')
                $('#CSS').removeClass('fade-in')
                $('#bootstrap').removeClass('fade-in')
                $('#Tailwind').removeClass('fade-in')


                $('#HTML').addClass('hidden')

                $('#CSS').addClass('hidden')

                $('#bootstrap').addClass('hidden')


                $('#Tailwind').addClass('hidden')

                $('#Tailwind').addClass('hidden')


                $('#PHP').addClass('hidden')


                $('#JS').addClass('hidden')

                $('#c-sharp').addClass('hidden')

                $('#Python').addClass('hidden')
                $('#postgres').removeClass('hidden')
                $('#sqlserver').removeClass('hidden')
                $('#Mysql').removeClass('hidden')
                $('#Mysql').addClass('fade-in')



            }
            if ($('#Catégories').val() == '') {
                $('#HTML').removeClass('hidden')
                $('#CSS').removeClass('hidden')
                $('#bootstrap').removeClass('hidden')
                $('#Tailwind').removeClass('hidden')
                $('#PHP').removeClass('hidden')
                $('#JS').removeClass('hidden')
                $('#c-sharp').removeClass('hidden')
                $('#Python').removeClass('hidden')
                $('#Mysql').removeClass('hidden')
                $('#postgres').removeClass('hidden')
                $('#sqlserver').removeClass('hidden')
                $('#HTML').addClass('fade-in')
                $('#CSS').addClass('fade-in')
                $('#bootstrap').addClass('fade-in')
                $('#Tailwind').addClass('fade-in')
                $('#PHP').addClass('fade-in')
                $('#JS').addClass('fade-in')
                $('#c-sharp').addClass('fade-in')
                $('#Python').addClass('fade-in')
                $('#Mysql').addClass('fade-in')
            }

        })
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
    function openModal(id) {
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
        modal_content.append(copiedElement)
        $('#modal_content').find('.desc').removeClass('hidden');

        document.body.style.overflow = 'hidden';




    }

    function closeModal() {
        const modal = document.getElementById('myModal');
        const modal_content = document.getElementById('modal_content');

        modal.style.display = 'none';
        modal_content.innerHTML = "";
        document.body.style.overflow = 'visible';

    }
</script>

</html>