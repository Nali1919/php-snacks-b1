<!-- Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome,
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$students = [

    [
        'name'=> 'Daniele',
        'surname' => 'Paros',
        'votes' => [7,5,8,5] 
    ],

    [
        'name'=> 'Angelo',
        'surname' => 'Ferri',
        'votes' => [7,8,8,6]  

    ],

    [
        'name'=> 'Maria',
        'surname' => 'Pirro',
        'votes' => [7,3,8,6]  

    ],

    [
        'name'=> 'Anna',
        'surname' => 'Pistalo',
        'votes' => [3,3,9,6]  

    ],
  
];
for($i= 0 ; $i < count($students); $i++) {
?>
    <h3>Name: <?= $students[$i]['name']?></h3>

    <h3>Surname: <?= $students[$i]['surname']?></h3>
<?php
    $allVotes = 0;
    // Voti Studenti
    for($j = 0;$j < count($students[$i]['votes']); $j++ ){
        $allVotes += $students[$i]['votes'][$j]; 

    }
    $media = $allVotes / 4 ; // Media Voti
?>
<h2>Media: <?=  $media?></h2> 

<?php

}


?>





