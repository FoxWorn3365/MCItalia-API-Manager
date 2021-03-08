<?php
/////////////////////////////////////
// Minecraft Italia API Manager    //
/////////////////////////////////////
// By FoxWorn3365 | © 2021 Cosma F //
/////////////////////////////////////

function recupera($nomeserver) {
  // Starto CURL
  $ch = curl_init();

  // Imposto la pagina che dovrà essere analizzata per recuperare il .json
  curl_setopt($ch, CURLOPT_URL, 'http://www.sito.com/pagina.html');

  // Imposto che gli header non vengano scarcati
  curl_setopt($ch, CURLOPT_HEADER, 0);

  // Eseguo CURL, salvando il risultato in una variabile
  $mcita = curl_exec($ch);

  // Chiudo CURL
  curl_close($ch);
  
  // Uso json_decode
  $output = json_decode($mcita);
  
  // Recupero i dati
  $nome = $output->name;
  $indirizzo = $output->address;
  $premium = $output->premium;
  $posizione = $output->position;
  $voti = $output-> votesTotal;
  $voti_ieri = $output->votesYesterday;
  $versione = $output->versionsString;
  $online = $output->online;
  $players = $output->players;
  $max = $output->slot;
}

// RILASCIATO SOTTO LICENZA MIT

?>
