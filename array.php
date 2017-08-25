<?php
$a  = 15;
$b = 34;
$c  = 20;
$d = 43;
$e = 50;

$mixOfNumbers = [$a, $b, $c, $d, $e];


$i = 0;
// loops
while($i < 10)
{

  echo 'Value of  i '. $i.'<br>';
  if(isset($mixOfNumbers[$i]))
  {
    $newNumber = $mixOfNumbers[$i];

    $sum = 10 + $newNumber;

    echo $sum . '<br>';


  }
  else


    break;

  $i++;

}
echo "<br>";

$i   = 0;
$ram = 23;
$shyam = 26;
$gita = 30;
$sarita = 40;

$totalRequests = [$ram, $shyam, $gita, $sarita];

echo "<pre>";
print_r($totalRequests);

$hindi = 23;
$english = 26;
$history = 30;
$math = 40;

$totalMarksPerSubject = 50;

$marks = [$hindi, $english, $history, $math ];

$sum = 0;
for ($i = 0; $i < 4; $i++) {
    if(isset($marks[$i]))
    {
      $sum = $sum + $marks[$i];
      print_r($sum .PHP_EOL);
    }
    else
      break;
}
echo "<br>";


$science = 43;
$sociology = 45;
$geography = 40;
$jmc       = 47;

 $totalMarksPerSubject = 50;

 $marks = [$science, $sociology, $geography, $jmc];

 $sum = 0;
 for ($i=0; $i < 4; $i++)
 {
   if(isset($marks[$i]))
   {
     $sum = $sum + $marks[$i];
     print_r($sum.PHP_EOL);
   }
    else
     break;
 }
 echo "<br>";

 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 echo "Peter is " . $age['Peter'] . " years old.";
 echo "<br>";

$txt1 = "ram and shyam";
$txt2 = " they are good friends.";
$txt1 .= $txt2;
echo $txt1;

?>
