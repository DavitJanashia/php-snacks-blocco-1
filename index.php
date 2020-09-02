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


<!-- GOAL:
Snack 1 -->
<!-- Creiamo un array  -->
<!-- contenente le partite di basket
di un'ipotetica tappa del calendario. -->
 <!-- Ogni array avrà una squadra di casa e una squadra ospite,
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
   Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
  $arrayMatches = [
    'match_1' => [
      'squadraDiCasa' => 'squadra1',
      'squadraOspite' => 'squadra2',
      'S_squadraC' => 10,
      'S_squadraO' => 20
    ],
    'match_2' => [
      'squadraDiCasa' => 'squadra3',
      'squadraOspite' => 'squadra4',
      'S_squadraC' => 10,
      'S_squadraO' => 40
    ],
    'match_3' => [
      'squadraDiCasa' => 'squadra5',
      'squadraOspite' => 'squadra6',
      'S_squadraC' => 10,
      'S_squadraO' => 60
    ],
    'match_4' => [
      'squadraDiCasa' => 'squadra7',
      'squadraOspite' => 'squadra8',
      'S_squadraC' => 10,
      'S_squadraO' => 80
    ],
    'match_5' => [
      'squadraDiCasa' => 'squadra9',
      'squadraOspite' => 'squadra10',
      'S_squadraC' => 10,
      'S_squadraO' => 100
    ]
  ];



  foreach ($arrayMatches as $key) {
    echo $key['squadraDiCasa'] . ' - ' . $key['squadraOspite'] . ' || ' . $key['S_squadraC'] . ' - ' . $key['S_squadraO'] ;
    echo '<br>';
  }



  // print_r($arrayMatches);


 ?>


<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
NOTE: come detto gli snacks possono essere svolti in un singolo file, o in file separati, a piacere -->
