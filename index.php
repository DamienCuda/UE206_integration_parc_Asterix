<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo-parc-asterix.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap');</style>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>

    <title>Bienvenue au Parc Astérix !</title>
</head>
<body>
    <!-- Modal contenant l'iframe vidéo Youtube ouverte par le bouton du hero banner -->
    <dialog id="video_modal">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/eFuv9H3aMQ4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </dialog>

    <!-- Header -->
    <?php include('templates/header.php')?>

    <main>
        <!-- Hero banner -->
        <?php include('templates/_section_hero.php')?>

        <!-- Section réservation -->
        <?php include('templates/_section_reservation.php')?>

        <!-- Attraction mise en avant -->
        <?php include('templates/_section_featured_attraction.php')?>

        <!-- Section hébergement -->
        <?php include('templates/_section_housing.php')?>
        
        <!-- Section Liens utiles -->
        <?php include('templates/_section_tips.php')?>

        <!-- Section formules -->
        <?php include('templates/_section_formules.php')?>

        <!-- Section Actus -->
        <?php include('templates/_section_actu.php')?>
    </main>
    <!-- Footer -->
    <?php include('templates/footer.php')?>
</body>
</html>