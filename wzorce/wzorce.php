<?php
// $wzorzec = '/być/';
// $tekst = "być albo nie być";

// wyszkiwanie "być"
// if(preg_match($wzorzec,$tekst)){
//     echo "Znaleziono wzorzec <br>";
// } else {
//     echo "Nie znaleziono wzorca <br>";
// }
// echo "znaleziono: ".preg_match_all($wzorzec,$tekst);
// wyszukiwanie liczb
// $wrzorzec='/\d/';
// $tekst="mam 4 zeszyty";
// if(preg_match($wrzorzec,$tekst))
//     echo"znaleziono cyfrę";
// else
//     echo"nie znaleziono cyfrę"

$wzorzec = "/\S*\.gif/i"; // i ignoruje wielkość znaków
$tekst = "w pliku obrazek.gif jest ikona";

if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono obrazek!";
} else {
    echo "nie znaleziono obrazka!";
}

?>

