<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="icon" href="../static/media/logo-transparent-png.png" sizes="64x64" type="image/png">

  <?php 
  include 'link.php';
  $activepage = 'Contact';

  ?>

</head>
<body class="bg-blue-900">

<?php 
  include 'navbar.php'
  ?> 
  <?php
    include 'tanslate.php'
    ?>
    <div id="particles-js" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">
  </div>
  <div class=" flex justify-center items-center fade-in " style="height: 93vh;  width: 100vw;">

    <div class="flex justify-center items-center space-x-24 " style="width: 100vw; height: fit-content;">
      <div class="grid grid-rows-2 grid-flow-col gap-x-32">
        <div class=" text-white flex justify-center" style="font-size: 200px;"><i class="bi bi-phone"></i></div>

        <a href="#" class="fade-in   text-xl   text-white hover:bg-neutral-800 btn  h-10 ">
          07 82 92 38 06
        </a>
        <div class="  text-white flex justify-center" style="font-size: 200px;"><i class="bi bi-envelope"></i></div>
        <a href="#" class="fade-in   text-xl   text-white hover:bg-neutral-800 btn  h-10 ">
          adil.khadich@gmail.com
        </a>

        <div class="  text-white flex justify-center" style="font-size: 200px;"><i class="bi bi-linkedin"></i></div>

        <a href="https://www.linkedin.com/in/adil-khadich-289691237/"
          class="fade-in   text-xl   text-white hover:bg-neutral-800 btn  h-10 " target="_blank">
          Linkedin
        </a>
      </div>

    </div>



  </div>
  </div>
  <a href="../static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-gray-900 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
    <a href="../static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3  let-0 ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-gray-900 btn   h-10 ml-2 mt-1" download style=" overflow: hidden;" target="_blank">
        <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
    </a>
  <a href="https://github.com/Adkhey74" target="_blank"
    class="fade-in fixed mb-3 let-0 ml-2 bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-gray-900"><i
      class="bi bi-github"></i></a>
  <div id=""
    class="fade-in fixed mb-3 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
    <h1 style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</h1>

  </div>

  <script src="../static/JS/particles.js"></script>
  <script src="../static/JS/app.js"></script>






</body>


<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  $(document).ready(function () {

    // $('.info').hover(
    //     function () {

    //     }
    // )
  });
  function validateNumberInput(input) {
    // Remplace tous les caractères qui ne sont pas des chiffres par une chaîne vide
    input.value = input.value.replace(/[^0-9.]/g, '');
  }

</script>
<script>
  $(document).ready(function () {
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
<script>



  (function () {
    var addEvent = function (object, type, callback) {
      if (object == null || typeof (object) == 'undefined') return;
      if (object.addEventListener) {
        object.addEventListener(type, callback, false);
      } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
      } else {
        object["on" + type] = callback;
      }
    };
    function detectMouseMove() {
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('mousemove', function (e) {
        $('.hover').css({
          left: e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });

      })
    }
    detectMouseMove();


    function detectTouch() {
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('mousemove', function (e) {
        $('.hover').css({
          left: e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });
      })
    }
    detectMouseMove();

    function touchMove() {
      // Initial container width
      var containerWidth = $('.container').outerWidth();
      document.addEventListener('touchmove', function (e) {
        $('.hover').css({
          left: e.pageX
        });
        $('.left-side').css({
          left: e.pageX + 75
        });
        var rightSideLeft = containerWidth - e.pageX;
        $('.right-side').css({
          right: rightSideLeft
        });

      })
    }

    touchMove();

    function detectInput(inputType) {
      // Detect container width after resizing
      addEvent(window, "resize", function (event) {
        var containerWidth = $('.container').outerWidth();
        $(document).bind(inputType, function (e) {
          $('.hover').css({
            left: e.pageX
          });
          $('.left-side').css({
            left: e.pageX + 75
          });
          var rightSideLeft = containerWidth - e.pageX;
          $('.right-side').css({
            right: rightSideLeft
          });
        });
      });
    }

    detectInput('mousemove');
    detectInput('touchmove');

  })();


</script>

</html>