<!-- funzioni utili PHP -->
<!-- in php array e stringa non sono trattati allo stesso modo. che è diverso dal js -->
<!-- per stampare:
echo,
print,
print_r,
var_dump
-->

<!-- per manipolare con la stringa/array:
explode("delimitatore della stringa (A PAROLE)", "la stringa" ),
implode("un array") -> ritorna una stringa  (è quesi come join),
str_split("una stringa  ritorna un array con le lettere/ singoli caratteri della stringa passata"),
count (lungezza dell array, NON DELLA STRINGA),
strlen ("stringa"), lungezza della stringa -->

<!-- altre funzioni
trim(stringa) - toglierà gli spazi bianchi all’inizio e alla fine di una stringa
str_replace(porzioneDaModificare, conCosa, stringa) - cambierà il valore di una porzione della stringa in un altro
strpos(stringa, cosaCercare) - cerca all’interno di una stringa un’altra stringa e torna la posizione
ucfirst(stringa) - ucwords(stringa) - rende maiuscola o il primo carattere o il primo carattere di ogni parola -->

<?php

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  $isValidName = strlen($name) > 3;
  $isValidMail = strpos($mail, '@') !== false && strpos($mail, '.') !== false; // condizione in una variabile
  $isValidAge =  is_numeric($age) === true;

  if($isValidName && $isValidMail && $isValidAge){
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }

 ?>
