<?php
    // Code PHP
    require 'connexion.php';
    //recupere l'identifiant de la page depuis les parametres des l'URL (Constante $_GET) et si la constante n'est pas vide, sinon afficher le film 1.
    $pageId = isset($_GET['pageId']) ? $_GET['pageId'] : 1;
    $requete = $bdd->prepare('SELECT * FROM films WHERE id=:pageId');
    $requete->bindParam(':pageId',$pageId, PDO::PARAM_INT);
    //executer la requete sql
    $requete->execute();
    $film = $requete->fetch(PDO::FETCH_OBJ);
    
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film->titre
    // Code PHP
?> - NetFilm #1 du Film</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Code PHP
    include 'header.php';

?>
    <main>
        <section class="flex justify-center">
            <div class="flex font-sans bg-white border rounded-md w-1/2 mt-48">
                <div class="flex-none w-56 relative">
                    <img src="<?php echo "uploads/$film->affiche";
    // Code PHP
?>" alt="<?php
// Code PHP 
echo $film->titre;
?>" class="absolute inset-0 w-full h-full object-cover rounded-lg" loading="lazy" />
                </div>
                <div class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <p class="flex-auto font-medium text-slate-900">
                            Catégorie
                        </p>
                        <h2 class="w-full flex-none mt-2 order-1 text-3xl font-bold text-violet-600">
                            <?php
                            echo $film->titre;
    // Code PHP
?>
                        </h2>
                        <p class="text-sm font-medium text-slate-400">
                            <?php
    // Code PHP 
    echo $film->note;
?>/10
                        </p>
                    </div>
                    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                        <p class="space-x-2 flex text-sm">
                            <?php
    // Code PHP
?>
                        </p>
                    </div>
                    <div class="flex space-x-4 mb-5 text-sm font-medium">
                        Date : <?php
    // Code PHP 
    echo date("d m Y", strtotime($film->date)) ;
?>
                        Durée : <?php
    // Code PHP
    // $minutes = $film->duree;
    // $time = DateTime::createFromFormat('H:i', "0:$minutes);
    // echo $time->format('G\hi');  
    // $duree = $film 
    $minutes = $film->duree;
    $formattedTime = sprintf("%dh%02d", intdiv($minutes, 60), $minutes % 60);
    echo $formattedTime; 
?>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <section class="bg-slate-700 text-white mt-24 p-12">
            <h2 class="bg-slate-500 p-6 text-lg font-bold">Zone de débug - PHP</h2>
            <div>
                <?php
    // Code PHP
    var_dump($_GET);
    var_dump($film);
?>
            </div>
        </section>
        <main>
</body>

</html>

<?php
    // Code PHP
?>