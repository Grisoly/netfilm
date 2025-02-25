<?php
    // Code PHP
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetFilms</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
<?php
    // Code PHP
?>
    <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-24 lg:py-36">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <button class="ouvrir-modale relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-red-900/40 hover:ring-gray-900/20">
          #Hashtag
        </button>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Films et séries en illimité, et bien plus</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Prêt à regarder NetFilms ? Saisissez votre adresse e-mail pour vous abonner ou réactiver votre abonnement.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/videotheque2024/form_ajout.php" class="flex items-center gap-2 rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600  hover:scale-110 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6 pt-1" fill="currentColor"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>Ajouter un film</a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
<div class="modale cache">
      <button class="fermer-modale">&times;</button>
      <h1>Je suis une fenêtre modale</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="couverture cache"></div>

    <?php
    // Code PHP
?>
    <section class="mx-8 lg:mx-24 my-16">
      <h2 class="font-bold text-xl">Questions fréquentes</h2>

      <div class="mt-8">
        <!-- single question 1 -->
        <article class="question">

          <!-- question title -->
          <div class="question-title">
            <p>Acceptez-vous les cartes de crédit ?</p>
            <button type="button" class="question-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>

          <!-- question text -->
          <div class="question-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod mi condimentum sapien consequat maximus. In eget erat tortor.
          </div>
        </article>
        <!-- end single question -->

        <!-- single question 2 -->
        <article class="question">

          <!-- question title -->
          <div class="question-title">
            <p>Quels sont vos points de livraisons ?</p>
            <button type="button" class="question-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>

          <!-- question text -->
          <div class="question-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod mi condimentum sapien consequat maximus. In eget erat tortor.
          </div>
        </article>
        <!-- end single question -->

        <!-- single question 3 -->
        <article class="question">

          <!-- question title -->
          <div class="question-title">
            <p>Quels sont vos services ?</p>
            <button type="button" class="question-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>

          <!-- question text -->
          <div class="question-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus euismod mi condimentum sapien consequat maximus. In eget erat tortor.
          </div>
        </article>
        <!-- end single question -->
      </div>
    </section>

    
    <?php
    // Code PHP
?>
    <script src="script.js"></script>
</body>
</html>