<?php
// Tableau des actualités
$actualites = [
    "0" => [
        "img"       => "assets/img/IMG-Toutatis-parcours_1.jpg",
        "titre"     => "Le festival Toutatis",
        "subtitle"  => "Ouverture au printemps 2023",
        "url_cible" => "#",
    ],
    "1" => [
        "img"       => "assets/img/TDZ_actu.png",
        "titre"     => "Tonnerre 2 Zeus",
        "subtitle"  => "La célèbre attraction, version 2023",
        "url_cible" => "#",
    ],
    "2" => [
        "img"       => "assets/img/pegase_express.jpg",
        "titre"     => "L'appli  mobile",
        "subtitle"  => "Tout le parc dans votre poche",
        "url_cible" => "#",
    ],
];
?>
<section id="section_actu" class="inline_padding">
    <h2 class="section_title">LES NOUVELLES TOUTES FRAICHES !</h2>
    <p class="subtitles subtitles_black">Du rififi chez les Romains et dans toute la Gaule… Nom d’un menhir, on ne s’ennuie pas ! Retrouvez toutes nos actualités : banquets, attractions, aventures, émotions. Le ciel vous en tomberait presque sur la tête.</p>
    <!-- Affichage avec boucle sur le tableau des actualités -->
    <div id="actualites_articles" class="flex_container">
        <?php foreach($actualites as $actualite){?>
            <a href="<?= $actualite['url_cible']?>" title="Vers l'actualités">
                <article class="actualite grid_container">
                    <img class="news_card_img" src="<?= $actualite['img']?>" alt="#">
                    <div class="news_card_info">
                        <h3 class="news_card_title"><?= $actualite['titre']?></h3>
                        <p class="news_card_sub"><?= $actualite['subtitle']?></p>
                    </div>
                </article>
            </a>
        <?php } ?>
    </div>
</section>
