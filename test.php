<?php
$txt = "1";
echo "<br>";
echo $txt;
$txt = "2";
echo "<br>";
echo $txt;
$txt = "3";
echo "<br>";
echo $txt;
$txt = "4";
echo "<br>";
echo $txt;
$txt = "5";
echo "<br>";
echo $txt;
echo "<br>"
?>
<?php
echo "<br>=====================================";
$txt = "<br>1<br>";
echo $txt;
$txt = "2<br>";
echo $txt;
$txt = "3<br>";
echo $txt;
$txt = "4<br>";
echo $txt;
$txt = "5<br>";
echo $txt;
?>


<?php
echo "<br>=====================================";
echo "<br>1<br>2<br>3<br>4<br>5";
?>


<?php
for($i =0 ; $i <= 100; $i++ )

echo $i . "<br>";

?>

<?php
$science = 35;
$english = 29;
$history = 42;
$math = 40;
$totalMarksPerSubjects = 50;
echo "<h2>To Calculate Percentile Of Student </h2>";

echo "<h4> Science : ".$science." </h4>";
echo "<h4> English : " .$english." </h4>";
echo "<h4> History:  ".$history."  </h4>";
echo "<h4> Math:     ".$math."     </h4>";

$percentage = (($science + $english + $history + $math)/(4*$totalMarksPerSubjects)) *100;

print_r($percentage);die;
?>
