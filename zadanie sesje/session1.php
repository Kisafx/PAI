<?php
    session_start();

    echo'Welcome to page #1';

    $_SESSION['favcolor']='Czerwony';
    $_SESSION['animal']='Pies';
    $_SESSION['time']=time();
    $_SESSION['Imie']='Adam';
    $_SESSION['Nazwisko']='Adacki';
    
    echo('<br/><a href="session2.php">Page 2</a>')
?>