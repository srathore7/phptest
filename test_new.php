<?php
$ram = 50;
$sham = 50;

if($ram == $sham)
echo 'hlw';
else if($ram >= $sham)
echo 'hye';
else
echo 'helo m here';
echo "<br>";


$i    = 0;
$gita = 60;
$babita = 60;

while ($i <= 12)
{

if($gita == $babita)
{
echo 'they both are same age<br>';
}
else if ($gita > $babita)
{
  echo 'babita is elder than gita';
}
else
{
  echo 'now gita is elder than babita';

}

$i++;
}
echo "<br>";


$a = 2;
if(isset($a))
{
  echo "A is set";
}
else {
  echo "A is not set";
}
echo "<br>";


$txt = "creating php variabls";
$x = 12;
$y = 15;


echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";



$txt1 = "hlw";
$txt2 = "are best friends";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "ram and sham " . $txt2 ."<br>";
echo $x + $y;


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

$txt1 = "html";
$txt2 = "php";

echo $txt1;
echo "<br>";
echo $txt2;
echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

?>
