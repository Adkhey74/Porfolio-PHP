<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="icon" href="../static/house-solid.svg" type="image/x-icon">

    <?php 
  include 'link.php';
  $activepage = 'About';

  ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="../static/media/logo-transparent-png.png" sizes="64x64" type="image/png">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@600&family=Roboto&family=Roboto+Condensed:wght@300&display=swap');
</style>

<body class="bg-blue-900 overflow-x-hidden">
    <div class="scrollbar" id="style-1">
        <div class="force-overflow"></div>
    </div>
    <?php
    include 'navbar.php'
    ?>
    <div id="particles-js" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">


    </div>
    <div class="flex justify-center mt-5 fade-in" style="width: 100vw;">

        <img src="../static/media/pp-removebg-preview.png" class="fade-in rounded object-cover " alt="" style="width: 15vw; height: 30vh;">

    </div>
    <div style="width: 90vw;height: 20vh; " class="mt-5 fade-in">
        <h2 class="fr text-rose-500 text-4xl ml-28 fade-in  ">Qui suis-je ?</h2>
        <p class="fr ml-28  mt-2 text-white  text-xl fade-in">
            Je suis Adil Khadich, un étudiant passionné de 20 ans spécialisé dans le développement web.
            Originaire du monde du code, j'ai découvert ma passion pour la création de solutions numériques dès mon plus
            jeune âge. Mon parcours académique et mes projets personnels m'ont permis de développer des compétences
            approfondies en langages de programmation tels que HTML, CSS, JavaScript, et bien d'autres.

            Au-delà de mon amour pour le développement web, je suis un fervent amateur de football et un passionné
            d'e-sport. L'énergie compétitive et l'esprit d'équipe que l'on retrouve dans ces domaines me motivent au
            quotidien. Ces expériences m'ont également enseigné des leçons précieuses sur la collaboration, la
            résilience et la recherche constante de l'amélioration.
        </p>
        <h2 class="en text-rose-500 text-4xl ml-28 fade-in  ">  Who am I?</h2>
        <p class="en ml-28  mt-2 text-white  text-xl fade-in">
        I am Adil Khadich, a passionate 20-year-old student specializing in web development.
            Originally from the world of code, I discovered my passion for creating digital solutions as soon as I could
            young age. My academic background and personal projects have allowed me to develop skills
            advanced programming languages such as HTML, CSS, JavaScript, and many others.

            Beyond my love for web development, I am a passionate football fan and a passionate
            e-sport. The competitive energy and team spirit found in these fields motivate me to
            These experiences have also taught me valuable lessons about collaboration and
            resilience and constant search for improvement.
        </p>
        <!-- <img src="../static/media/" class="ml-96 mt-10 rounded" style="width: auto; height: 40vh;"> -->

    </div>
    <!-- <div style="height: fit-content; width: fit-content;" class="mt-5 fade-in">
        <h2 class="text-teal-700 text-4xl ml-28  fade-in ">Mon parcours professionnel</h2>
        <p class="ml-28  mt-2 text-white  text-xl fade-in">
            Mon parcours professionnel m'a conduit à un rôle stimulant en tant que développeur indépendant chez SIBRA,
            où j'ai entrepris la création d'une application web permettant de générer au format PDF les fiches horaires
            des bus. Travaillant en solitaire sur ce projet, j'ai eu l'opportunité de combiner mes compétences
            techniques avec une approche autonome du développement.


        </p>
        <div class="flex justify-center fade-in ">
            <img src="../static/media/BUS.jpg" class="ml-28 rounded mb-5 mt-5 object-cover" style="width: 30vw; height: 32vh;" >

        </div>

        


    </div> -->
    <div style="height: fit-content; width: fit-content;" class="mt-5 fade-in">
        <h2 class="fr text-rose-500 text-4xl ml-28  mb-2 fade-in ">Mes passions</h2>
        <h2 class="en text-rose-500 text-4xl ml-28  mb-2 fade-in ">My passions</h2>

        <h2 class="fr text-rose-700 text-2xl ml-28  fade-in ">L'E-sport</h2>
        <h2 class="en text-rose-700 text-2xl ml-28  fade-in ">E-sport</h2>

        <p class="fr ml-28  mt-2 text-white mr-5 text-xl fade-in">
            Je suis un grand fan de l'e-sport, et je prends beaucoup de plaisir à soutenir mes équipes préférées.
            J'apprécie particulièrement l'intensité des compétitions et le talent des joueurs. Mon intérêt pour
            l'e-sport va au-delà d'une simple distraction, c'est une véritable passion qui me permet de me connecter
            avec une communauté partageant les mêmes centres d'intérêt. Chaque match est une source d'excitation et de
            moments mémorables pour moi.


        </p>
        <p class="en ml-28  mt-2 text-white mr-5 text-xl fade-in">
        I’m a big fan of esports, and I enjoy supporting my favorite teams.
            I particularly appreciate the intensity of the competitions and the talent of the players. My interest in
            e-sport goes beyond a simple distraction, it’s a real passion that allows me to connect
            with a community that shares the same interests. Each game is a source of excitement and
            memorable moments for me.


        </p>
        <div class="flex justify-center fade-in " style="width: 100vw;">
            <div class="grid grid-cols-2 gap-32">
                <img src="../static/media/valo.png" class=" rounded mb-5 mt-5 " style="width: 20vw; height: 32vh;">
                <img src="../static/media/joblife.png" class="object-cover rounded mb-5 mt-5 " style="width: 35vw; height: 32vh;">


            </div>

        </div>
        <h2 class="fr text-rose-700 text-2xl ml-28  fade-in ">Le football</h2>
        <h2 class="en text-rose-700 text-2xl ml-28  fade-in ">Football</h2>

        <p class="fr ml-28  mt-2 text-white  mr-5 text-xl fade-in">
            Le football a vraiment marqué une décennie de ma vie, particulièrement au sein de clubs locaux comme Seynod,
            Annecy-le-Vieux et Vieugy. Bien sûr, ce ne sont pas les clubs les plus renommés, mais chaque expérience a
            laissé une empreinte significative sur moi. L'esprit d'équipe, que j'ai cultivé sur le terrain, s'est avéré
            être une compétence transférable clé dans ma carrière de développeur web. Travailler en équipe, tout comme
            sur le terrain de football, est essentiel dans le monde du développement. La collaboration, la communication
            efficace et la résolution collective de problèmes sont des éléments qui ont trouvé une place naturelle dans
            ma manière de travailler. Ces clubs, bien que modestes, ont donc joué un rôle déterminant en me fournissant
            des compétences humaines et professionnelles précieuses, et je suis reconnaissant pour chaque leçon tirée de
            ces expériences.
        </p>
        <p class="en ml-28  mt-2 text-white  mr-5 text-xl fade-in">
        Football really marked a decade of my life, especially in local clubs like Seynod,
            Annecy-le-Vieux and Vieugy. Of course, these are not the most renowned clubs, but each experience has
            left a significant imprint on me. The team spirit, which I cultivated in the field, turned out
            be a key transferable skill in my web development career. Working as a team, just like
            on the football field, is essential in the development world. Collaboration, communication
            effective and collective problem solving are elements that have found a natural place in
            the way I work. These clubs, while modest, were instrumental in providing me with
            valuable human and professional skills, and I am grateful for every lesson learned from
            these experiences.
        </p>
        <div class="flex justify-center fade-in " style="width: 100vw;">
            <img src="../static/media/foot.JPG" class="ml-28 rounded mb-5 mt-5 object-cover" style="width: 30vw; height: 52vh;">

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
    <a href="../static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="../static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500"><i class="bi bi-github"></i></a>    <div id="" class="fade-in fixed mb-3 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
        <h1 style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</h1>

    </div>


    <div id="myModal" class="modal z-50">
        <span class="close absolute top-2" onclick="closeModal()">&times;</span>
        <div id="modal_content" class="" style="height: 85vh; width: 50vw;">

        </div>


    </div>
    </div>

    <script src="../static/JS/particles.js"></script>
    <script src="../static/JS/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@vitalets/google-translate-api"></script>

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