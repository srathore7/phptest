<!DOCTYPE html>
<html>
<body>

<?php
$i = 1;
$mohan = 54;
$sohan = 44;

while($i <= 12)
{

  if($mohan == $sohan)
    echo "sohan and mohan they both are same age"."<br>";

  if($mohan < $sohan)
    echo "sohan is elder than mohan"."<br>";

  if($mohan > $sohan)
  {
    echo "mohan is now elder than sohan"."<br>";
    break;
  }


  $mohan++;
  $i++;
}
echo "<br>";

$i = 1;
$gita = 44;
$babita = 34;

while($i <= 5)
{
if($gita == $babita)
echo "gita and babita they both are same age"."<br>";

if($gita < $babita)
echo "babita is elder than gita"."<br>";

if($gita > $babita)
{

  echo "gita is  elder than babita"."<br>";
  break;
}

    $gita++;
    $i++;
}
echo "<br>";

$i = 0;
$bunty = 50;
$bubly = 42;

for ($x = 0; $x <= 10; $x++)
{
  if($bunty == $bubly)
  echo "bunty and bubly they both are same age"."<br>";

  if($bunty < $bubly)
  echo "bubly is elder than bunty"."<br>";

  if($bunty > $bubly)
  {
  echo "bunty is  elder than bubly "."<br>";
  break;
}
      $bubly++;
      $i++;
}
echo "<br>";


$x = 1;

do {
    echo " $x. code to be executed<br>";
    break;
    $x++;
} while ($x <= 5);


?>



</body>
</html>
