<?php
    // Code PHP
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire ajout de film</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    // Code PHP
?>
    <main class="flex flex-col items-center mt-48 mb-36">
        <section class="flex flex-col gap-4">
            <h1 class="font-bold text-4xl">Formulaire d'ajout de film</h1>
            <p>Comment ajouter un film dans notre super vidéothèque de films...</p>
        </section>
        <section class="my-12 mx-10 flex flex-col items-center border border-solid border-white rounded">
            <h2 class="font-bold text-2xl mt-12">Ajouter un film</h2>
            <form class="px-12 py-6 flex flex-col gap-6" action="actions.php" method="post" enctype="multipart/form-data">
                <div class="flex flex-col gap-2">
                    <label for="titre">Nom du film : </label>
                    <input type="text" class="border border-red-600 h-10 px-2 py-4" name="titre" id="titre" placeholder="Entrez le nom du film..." required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="affiche">Affiche du film : </label>
                    <input type="file" class="border border-red-600 h-10 px-2 py-2" name="affiche" id="affiche">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="date">Date du film : </label>
                    <input type="date" class="border border-red-600 h-10 px-2 py-2" name="date" id="date">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="categorie">Categorie du film : </label>
                    <select class="border border-red-600 h-10 px-2 py-2" name="categorie" id="categorie">
                    <?php
    // Code PHP
?>
                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="note">Note du film (/10) : </label>
                    <input type="number" class="border border-red-600 h-10 px-2 py-4" name="note" id="note">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="duree">Durée du film (en minutes) : </label>
                    <input type="number" class="border border-red-600 h-10 px-2 py-4" name="duree" id="duree">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="synopsis">Synopsis du film : </label>
                    <textarea class="border border-red-600 px-2 py-2" name="synopsis" id="synopsis" rows="10"></textarea>
                </div>
                <button type="submit" class="px-4 py-3 gap-2 bg-red-700 text-white rounded hover:bg-red-800 hover:scale-105 transition-all">Soumettre</button>
            </form>
        </section>
    </main>
    <?php
    // Code PHP
?>
    <script src="script.js"></script>
</body>
</html>