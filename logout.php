<center>
<?php

    session_start();
    session_unset();
    session_destroy();
    if($_SESSION == NULL)
    {
        echo 'LOGOUT ESEGUITO<br>Ritorno alla login page in 5 secondi...</a>';
        header('Refresh: 5; URL=index.html');
    } else
    {
        echo('errore nella chiusura di sessione, contatta lo sviluppatore<br><br><br>Email:<br>Mail To: <textarea rows="1" cols="30" readonly style="resize: none;">niconotnicko@gmail.com</textarea><br>Subject: <textarea rows="1" cols="30" readonly style="resize: none;">non funziona :(</textarea><br>Corpo: <textarea rows="5" cols="30" readonly style="resize: none;">guarda brother, credo che tu abbia sbagliato qualcosa, qui non funziona niente</textarea><br><br><br><a href="mailto:niconotnicko@gmail.com?subject=&body=guarda brother, credo che tu abbia sbagliato qualcosa, qui non funziona niente">INVIA MAIL</a><br><br>');
    }
?>
</center>