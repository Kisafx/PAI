  
<?php
// $wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
// $tekst = "email: john@poczta.eu";


// if(preg_match($wzorzec, $tekst)){
//     echo "Znaleziono email!";
// } else {
//     echo "nie znaleziono email!";
// };
// echo "<br> znaleziono: ".preg_match_all($wzorzec,$tekst)

$wzorzec = '/((\nhhtps?:\/\/)|(\bwww\.))\S*/';
$tekst = "adres: www.zsgsucha.pl";

if(preg_match($wzorzec, $tekst)){
    echo "znaleziono adres www";
} else {
     echo "nie adresu www!";
};
echo "<br> znaleziono: ".preg_match_all($wzorzec,$tekst);

?>
