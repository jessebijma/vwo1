<?php
$norm = $_GET['norm'];
$fouten = $_GET['12'];
$naam = $_GET['11'];
$naam = strtolower($naam);
$naam = ucfirst($naam);
$x = $fouten/$norm;
$number = 10-round($x,1);


  if($naam == '') {
    echo "je hebt je naam niet ingevuld";
  } else if ($fouten == '') {
    echo "je hebt geen fouten ingevuld";
  } else {
    if (is_numeric ($fouten)) {
      if (strlen ($fouten) <= 2) {
        echo "<p> Naam: ". $naam. "</p>";
        echo "<p> Fouten: ". $fouten. "</p>";
        echo  "<p> Norm: ". $norm. "</p>";
        echo "<p> Je cijfer is:". $number. "</p>";
        }
        else {
         echo "het ingevulde aantal fouten is incorrect";
        }
    }
  }
 ?>
 <br>
   <a href="index.php"> go back
