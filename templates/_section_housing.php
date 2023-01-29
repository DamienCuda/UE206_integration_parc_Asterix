<?php
// Tableau des actualités
$hotels = [
    "0" => [
        "img"       => "assets/img/lutece_bg.jpg",
        "logo"      => "assets/img/lutece_0.png",
        "prix"      => "125,75",
        "name"      => "Les Quais de Lutece",
        "subtitle"  => "Une halte festive dans la ville antique",
        "rating"    => 3,
    ],
    "1" => [
        "img"       => "assets/img/suspendu_bg.jpg",
        "logo"      => "assets/img/suspendu.png",
        "prix"      => "95,5",
        "name"      => "La cité suspendue",
        "subtitle"  => "Une halte au milieu de la forêt",
        "rating"    => 4,
    ],
    "2" => [
        "img"       => "assets/img/hiboux_bg.jpg",
        "logo"      => "assets/img/hiboux.png",
        "prix"      => "92,50",
        "name"      => "Les troix hiboux",
        "subtitle"  => "Le plus chouette des hôtels",
        "rating"    => 3,
    ],
];
?>
<section id="housing" class="inline_padding">
    <div>
        <h2 class="section_title text-center">Nos Hôtels</h2>
        <p class="subtitles subtitles_black">Prenez votre temps et prolongez votre expérience Gauloise en passant un séjour aux hôtels
                            Les Trois Hiboux, La Cité Suspendue ou Les Quais de Lutèce.</p>
    </div>
    <div id="housing_articles" class="flex_container">
        <?php foreach($hotels as $hotel){?>
            <a href="#" title="Vers l'hôtel" class="hotel_card grid_container">
                <article class="grid_container">
                    <img src="<?= $hotel['logo']?>" alt="#" class="hotel_logo">
                    <img class="hotel_card_img" src="<?= $hotel['img']?>" alt="#">
                    <div class="hotel_card_info grid_container">
                        <div class="hotel_info grid_container">
                            <h3 class="hotel_card_title hotel_name"><?= $hotel['name']?></h3>
                            <div class="flex_container">
                                <?php for($i= 1; $i <= $hotel['rating']; $i++){?>
                                    <span class="hotel_rating"><i class='bx bxs-star'></i></span>
                                <?php } ?>
                                <span class="star"></span><span class="star"></span><span class="star"></span>
                            </div>
                            <p><?= $hotel['subtitle']?></p>
                        </div>
                        <div class="text-center grid_container hotel_price_info">
                            <p>à partir de</p>
                            <p class="hotel_price"><?= $hotel['prix']?>€</p>
                            <p>par personne</p>
                        </div>
                        <p class="text_center hotel_link">Découvrez cet hôtel</p>
                    </div>
                </article>
            </a>
        <?php } ?>
    </div>
</section>