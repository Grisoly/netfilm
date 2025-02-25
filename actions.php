

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actions Netfilms</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php' ?>
    <div class="relative isolate px-6 pt-14 lg:px-8">
</div>
    <section class="flex justify-center">
        <div>
        <h1 class="font-bold text-4xl">Actions postées Netfilms</h1>
        <?php
    // Code PHP
?>
</div>
</section>
    <section class="mx-24 my-16">
        <h2 class="font-bold text-xl">Données du formulaire</h2>
            <ul>
            <?php
    // Code PHP
?>
            </ul>
            <p class="border rounded px-2 py-2 mt-4">🥳<?php echo $message; ?></p>
            <section class="flex flex-col gap-4 h-36 justify-center items-center">
                <a href="/netfilms/form_ajout.php" class="flex px-4 py-3 gap-2 bg-red-700 text-black rounded hover:bg-red-800 hover:scale-110 transition-all">Ajouter un film</a>
                <a href="/netfilms/" class="flex px-4 py-3 gap-2 bg-red-700 text-black rounded hover:bg-red-800 hover:scale-110 transition-all">Liste des films</a>
            </section>
    </section>
</body>
</html>