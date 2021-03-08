<?php
/////////////////////////////////////
// Minecraft Italia API Manager    //
/////////////////////////////////////
// By FoxWorn3365 | © 2021 Cosma F //
/////////////////////////////////////

$nomeserver = file_get_contents('config.key');

$testo = file_get_contents('https://api.minecraft-italia.it/v5/server-info/' .$nomeserver);

$output = json_decode($testo);
  
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


// RILASCIATO SOTTO LICENZA MIT

?>
