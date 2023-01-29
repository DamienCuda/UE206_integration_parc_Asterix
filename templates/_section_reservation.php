<?php
// Création d'une variable permettant de fixer la date du jour
// comme date minimum pour les réservations
$date = date_create(Date('now'));
?>

<section id="reservation" class="inline_padding text_center">
    <div>
        <h2 class="section_title">Rejoignez nous vite !</h2>
        <p class="subtitles subtitles_black">On attend plus que vous pour le banquet !</p>
    </div>
    <form action="#" id="reservation_form" class="grid_container">
        <fieldset class="flex_container">
        <div>
            <div>
                <label for="arrival_date">Arrivée</label>
                <input id="arrival_date" name="arrival_date" type="date" min="<?= date_format($date,"Y-m-d");?>">
            </div>
            <div>
                <label for="departure_date">Départ</label>
                <input id="departure_date" name="arrival_date" type="date" min="<?= date_format($date,"Y-m-d");?>">
            </div>
        </div>
        <div>
            <div>
                <label for="adult_nb">Adultes</label>
                <input id="adult_nb" name="adult_nb" type="number" min="0">
            </div>
            <div>
                <label for="children_nb">Enfants</label>
                <input id="children_nb" name="children_nb" type="number" min="0">
            </div>
        </div>
        </fieldset>
        <button type="submit" class="btn btn_green">Réservez</button>
    </form>
</section>