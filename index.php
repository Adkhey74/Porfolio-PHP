<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>
  <link rel="icon" href="static/media/logo-transparent-png.png" sizes="64x64" type="image/png">

  <?php
  include 'link.php';
  $activepage = 'home';
  ?>

</head>
<style>
  .ml11 .en {
    font-family: 'titre', sans-serif !important
  }

  .ml11 .fr {
    font-family: 'titre', sans-serif !important
  }

  .ml11 .line {
    opacity: 0;
    position: absolute;
    left: 0;
    height: 20vh;
    width: 3px;
    background-color: #fff;
    transform-origin: 0 100%;
  }

  .ml11 .text-wrapper {
    position: relative;
    display: inline-block;

  }

  .ml11 .line {
    opacity: 0;
    left: 0;
    height: 100%;
    width: 3px;
    background-color: #fff;
    transform-origin: 0 50%;
  }

  .let {
    color: initial;
    /* Réinitialiser la couleur à sa valeur par défaut */
  }

  .ml11 .letter {
    display: inline-block;
    line-height: 1em;
  }
</style>

<?php
include 'body.php'
?>

<?php
include 'navbar.php'
?>
<div id="particles-js" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">


</div>
<!-- <div class="bg-black/20 backdrop-blur-sm" style="height: 185vh;width: 100vw;z-index: -50; position: fixed; top: 0;">

  </div> -->
<div class="flex justify-center  fade-in " style="height: 93vh;">

  <div class="flex justify-end items-center" style="width: 50vw; height: 80vh;">
    <div class="Bienvenue text-6xl flex items-center text-white mr-14 " style="height: 20vh; width: 27vw;">
      <h1 class="ml11 grid  " style="width: 26vw;">
        <span class="text-wrapper fr grid-col-16">
          <span class="line line1 fr"></span>
          <h1 class="letters1 fr">
            Bienvenue, je suis Adil développeur web
          </h1>
        </span>
        <span class="text-wrapper en">
          <span class="line line2 en"></span>
          <h1 class="letters2 en">
            Welcome, I am Adil web developer
          </h1>
        </span>
      </h1>



    </div>
    <h1 class="object-cover  rounded-full hover:scale-110 text-8xl  Bienvenue  backdrop-blur-sm flex justify-center
     items-center transition duration-500 ease-in-out bg-gray-100 cursor-pointer scale-100 p-28 hover:bg-red-500 hover:text-white transform hover:-translate-y-1" 
     style="font-family: 'titre', sans-serif !important;">AK</h1>

  </div>



</div>
<a href="static/media/CV.pdf" class="fr Bienvenue fade-in fixed mb-3 test   ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl    text-gray-100 btn   h-10 ml-2 mt-1 transition duration-500 ease-in-out bg-gray-950 cursor-pointer hover:bg-red-500 hover:text-white transform hover:-translate-y-1" download style="left:-250px; overflow: hidden;" target="_blank">
  <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
</a>
<a href="static/media/CV_anglais.pdf" class="en Bienvenue fade-in fixed mb-3 test   ml-2 w-12 hover:w-20 bottom-12 btn rounded-xl text-xl   bg-gray-950 text-white hover:bg-red-500 btn   h-10 ml-2 mt-1" download style="left:-250px; overflow: hidden;" target="_blank">
  <i class="bi bi-file-earmark-text"></i> <span style="font-family: 'titre', sans-serif !important">CV</span>
</a>
<a href="https://github.com/Adkhey74" target="_blank" class="fade-in fixed mb-3 let-0 ml-2  test bottom-0 btn rounded-xl  bg-gray-950 text-xl text-white hover:bg-red-500" style="left:-250px;"><i class="bi bi-github"></i></a>
<div id="" class="fade-in Bienvenue fixed mb-3 right-0 ml-2 bottom-0 btn rounded-xl text-xl  blur-sm text-white  btn  h-10 ml-2 mt-1  hover:blur-none ">
  <span style="font-family: 'titre', sans-serif !important">Dev by Adil Khadich</span>

</div>

<script src="static/JS/particles.js"></script>
<script src="static/JS/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>






</body>


<?php
include 'tanslate.php'
?>


<script>
  anime({
    targets: '.test',
    translateX: 250,
    duration: 1

  });
  $('#navbar').addClass('opacity-0');

  anime({
    targets: '#navbar',
    easing: "easeOutExpo",

    complete: function(anim) {

      $('#navbar').addClass('opacity-1').animate({
        opacity: 1
      }, 600);

      // Supprimer la classe 'opacity-0'
      $('#navbar').removeClass('opacity-0');

      // Supprimer la classe 'hidden' après l'animation
    },
    duration: 700



  });
  window.onload = function() {

    if (($('#langSelect').val() === 'en')) {



      var textWrapper = document.querySelector('.ml11 .letters2');

      textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|,)/g, "<span class='en hover:text-red-500 cursor-pointer'>$&</span>");

      anime.timeline({
          loop: false
        })
        .add({
          targets: '.ml11 .line2',
          scaleY: [0, 1],
          opacity: [0.5, 1],
          easing: "easeOutExpo",
          duration: 700
        })
        .add({
          targets: '.ml11 .line2',
          translateX: [0, document.querySelector('.ml11 .letters2').getBoundingClientRect().width + 10],
          easing: "easeOutExpo",
          duration: 700,
          delay: 100
        })
        .add({
          targets: '.ml11 .en',
          opacity: [0, 1],
          easing: "easeOutExpo",
          duration: 600,
          offset: '-=775',
          delay: (el, i) => 34 * (i + 1),

        })
        .add({
          targets: '.ml11',
          duration: 1000,
          easing: "easeOutExpo",
          delay: 1000
        });
    } else {

      var textWrapper = document.querySelector('.ml11 .letters1');

      textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|,)/g, "<span class='letter fr hover:text-red-500 cursor-pointer'>$&</span>");

      anime.timeline({
          loop: false
        })
        .add({
          targets: '.ml11 .line1',
          scaleY: [0, 1],
          opacity: [0.5, 1],
          easing: "easeOutExpo",
          duration: 700
        })
        .add({
          targets: '.ml11 .line1',
          translateX: [0, document.querySelector('.ml11 .letters1').getBoundingClientRect().width + 10],
          easing: "easeOutExpo",
          duration: 700,
          delay: 100
        })
        .add({
          targets: '.ml11 .letter',
          opacity: [0, 1],
          easing: "easeOutExpo",
          duration: 600,
          offset: '-=775',
          delay: (el, i) => 34 * (i + 1),

        })
        .add({
          targets: '.ml11',
          duration: 1000,
          easing: "easeOutExpo",
          delay: 1000
        });
    }

    $('#langSelect').change(() => {
      if (($('#langSelect').val() === 'en')) {



        var textWrapper = document.querySelector('.ml11 .letters2');

        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|,)/g, "<span class='en'>$&</span>");

        anime.timeline({
            loop: false
          })
          .add({
            targets: '.ml11 .line2',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
          })
          .add({
            targets: '.ml11 .line2',
            translateX: [0, document.querySelector('.ml11 .letters2').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
          })
          .add({
            targets: '.ml11 .en',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i + 1),

          })
          .add({
            targets: '.ml11',
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
      } else {

        var textWrapper = document.querySelector('.ml11 .letters1');

        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|,)/g, "<span class='letter fr hover:text-red-500 cursor-pointer'>$&</span>");

        anime.timeline({
            loop: false
          })
          .add({
            targets: '.ml11 .line1',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
          })
          .add({
            targets: '.ml11 .line1',
            translateX: [0, document.querySelector('.ml11 .letters1').getBoundingClientRect().width + 10],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
          })
          .add({
            targets: '.ml11 .letter',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i + 1),

          })
          .add({
            targets: '.ml11',
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
      }
    })
  };



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
<script>
  (function() {
    var addEvent = function(object, type, callback) {
      if (object == null || typeof(object) == 'undefined') return;
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
      document.addEventListener('mousemove', function(e) {
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
      document.addEventListener('mousemove', function(e) {
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
      document.addEventListener('touchmove', function(e) {
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
      addEvent(window, "resize", function(event) {
        var containerWidth = $('.container').outerWidth();
        $(document).bind(inputType, function(e) {
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