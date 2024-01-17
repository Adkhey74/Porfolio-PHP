<style>
    @font-face {
      font-family: 'titre';
      src: url('../static/font/Lobster-Regular.ttf') format('truetype');
      /* Ajoutez une version WOFF pour une compatibilité étendue */
      /* src: url('../static/font/game_over.woff') format('woff'), */
    }
  
    #singature {
      font-family: 'titre', sans-serif
    }
  </style>
  <nav class="flex items-center bg-white pr-0 justify-between p-6 lg:px-8 sticky top-0 z-40" aria-label="Global"
    style="height: 7vh;">
    <div class="flex lg:flex-1">
      <a href="{{url_for('home')}}" class="-m-1.5 p-1.5 text-2xl rounded-full p-2  text-black  " id="singature">
        AK
      </a>
    </div>
  
    <div class="flex justify-center lg:flex lg:gap-x-12 " style="width: 100vw;">
      <a href="#home"
        class="text-base  font-bold leading-6 text-black Bienvenue {% if active_page == 'Home' %}underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="bi bi-house-fill"></i> Acceuil</a>
      <a href="contact"
        class="text-base font-bold leading-6 text-black Bienvenue{% if active_page == 'Projet' %}underline underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="bi bi-person-workspace"></i> Projets</a>
      <a href="{{url_for('competence')}}"
        class="text-base font-bold leading-6 text-black Bienvenue{% if active_page == 'Competences' %}underline underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="fa-solid fa-briefcase"></i> Compétences</a>
      <a href="{{url_for('parcours')}}"
        class="text-base font-bold leading-6 text-black Bienvenue{% if active_page == 'Parcours' %}underline underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="fa-solid fa-graduation-cap"></i> Parcours</a>
      <a href="{{url_for('about')}}"
        class="text-base font-bold leading-6 text-black Bienvenue{% if active_page == 'About' %}underline underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="bi bi-person-square"></i> À propos</a>
      <!-- <a href="{{url_for('cv')}}"
        class="text-base  font-bold leading-6 text-black {% if active_page == 'CV' %}underline underline underline-offset-8{% endif %}"><i
          class="bi bi-file-person-fill"></i> CV</a> -->
  
      <a href="{{url_for('contact')}}"
        class="text-base font-bold leading-6 text-black Bienvenue{% if active_page == 'Contact' %}underline underline underline-offset-8{% endif %}"
        style="font-family: 'titre', sans-serif !important"><i class="bi bi-person-lines-fill"></i> Contact</a>
    </div>
  
    <div>
  
      <select class="form-select w-28 bg-white/30 backdrop-blur-sm border-hidden " name="" id="langSelect" style="font-family: 'titre', sans-serif !important">
        <option value="fr">French</option>
        <option value="en">English</option>
        <!-- Ajoutez autant d'options que nécessaire -->
  
        <!-- Utilisez des divs pour personnaliser chaque option -->
        <div class="custom-option" data-value="fr">
          <img style="height: 5vh; width: 5vw;" src="../static/media/france_flag.png" alt="">
          French
        </div>
        <div class="custom-option" data-value="en">
          <img style="height: 5vh; width: 5vw;" src="../static/media/uk_flag.png" alt="">
          English
        </div>
      </select>
  
    </div>
  </nav>
  <script>
    // Exemple simple de gestionnaire d'événements en JavaScript
    document.getElementById('yourSelectId').addEventListener('change', function () {
      var selectedValue = this.value;
      // Faire quelque chose avec la valeur sélectionnée...
    });
  
  </script>
  <!-- Mobile menu, show/hide based on menu open state. --> 