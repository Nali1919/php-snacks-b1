<?php
// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [
          
    [
    'squadraCasa' => 'Milano',
    'squadraOpsite' => 'Bologna',
    'puntiCasa' => '55',
    'puntiOspite' => '60'

    ],
    [
   'squadraCasa' => 'Cantù',
    'squadraOpsite' => 'Sassari',
    'puntiCasa' => '75',
    'puntiOspite' => '82'
    ],
       
    ];

    for($i=0; $i<count($partite); $i++){
   

?>

<div>
  <span>
    <?= $partite[$i]['squadraCasa'] ?> -
    <?= $partite[$i]['squadraOpsite'] ?>  | 
      <?= $partite[$i]['puntiCasa'] ?> -
    <?= $partite[$i]['puntiOspite'] ?>  
</span>

</div>

<?php
    }

?>



  
