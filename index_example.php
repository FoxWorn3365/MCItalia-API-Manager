<?php
// Includo il loader.php
include("loader.php");

// Eseguo la funzione
// Ricordo che per far andare correttamente il programma bisogna inserire lo slug
recupera("slimefun");

// Ora vediamo il nostro output
echo "Nel server $nome ci sono $online/$max player online. I voti di ieri sono $voti_ieri mentre i voti totali di oggi sono $voti. Il server è nella versione $versione";

?>
