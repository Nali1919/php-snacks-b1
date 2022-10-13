<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php 

    $paragrafo = '"Vedo il mondo mutarsi lentamente in un deserto. odo sempre più forte l’avvicinarsi del rombo che ucciderà anche noi, partecipo al
     dolore di milioni di uomini. eppure, quando guardo il cielo, penso che tutto volgerà nuovamente al bene. che anche questa spietata durezza cesserà,
     che ritorneranno l’ordine. la pace. e la serenità".';

     $nuovoParagrafo= str_replace('.', '<p>', $paragrafo);

?>

<h2>Paragrafo</h2>
<?=$paragrafo ?> 

<h2>Nuovo Paragrafo</h2>
<?=$nuovoParagrafo ?> 



