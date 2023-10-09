<?php

// RICEVE I VALORI DEL FORM E LI ASSEGNA A DELLE VARIABILI
$paragraph = $_POST["paragraph"];

$paragraph_length = strlen($paragraph);

$badword = $_POST["badword"];

// var_dump("Lunghezza del paraghrafo $paragraph_length");

// SOSTITUISCE IL VALORE DI $badword CON *** NELLA VARIABILE $paragraph E LO ASSEGNA ALLA VARIABILE $censured_par
$censured_par = str_replace($badword, '***', $paragraph);

// CREA UN MARKUP BASILARE E STAMPA I VALORI DESIDERATI IN PAGINA
echo "<h1>Original text:</h1>";
echo "<p>$paragraph</p>";
echo "<h4>The submitted text contains $paragraph_length characters.</h4>";
echo "<h1>Censored text:</h1>";
echo "<p>$censured_par</p>";
