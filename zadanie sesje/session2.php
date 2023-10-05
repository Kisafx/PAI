<?php
    session_start();

    echo'Welcome to page #2<br>';

    echo'Ulubiony korol: '.$_SESSION['favcolor'].'<br>';
    echo'Ulubione zwierzę'.$_SESSION['animal'].'<br>';
    echo date('Y m d H:i:s'),$_SESSION['time'].'<br>';
    echo'Twoje Imie to: '.$_SESSION['Imie'].'<br>';
    echo'Twoje Nazwisko to: '.$_SESSION['Nazwisko'].'<br>';
    echo('<br/><a href="session1.php">Page 1</a>');

    echo $_SESSION['bzdura']
?>