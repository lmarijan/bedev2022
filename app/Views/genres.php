<h1>Zanrovi filmova:</h1>

<?php
    foreach ($viewData['genres'] as $genre) {
        echo "<hr>";
        echo $genre->ID_zanra, "<br>", $genre->naziv, "<br>";
        echo "<hr>";
    }
?>