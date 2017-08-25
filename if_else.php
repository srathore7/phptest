<!DOCTYPE html>
<html>
<body>

<?php
$sahil = 22;
$virender = 23;


if($sahil == $virender)
{
echo "Sahil and virender have same age";
}
else if($sahil > $virender)
{
echo "Sahil is Elder than virender";
}
else
{
  echo "virender is Elder than sahil";
}
echo "<br>";

$mohan = 34;
$sohan = 33;

if($mohan == $sohan)
{
echo "sohan and mohan they both are same age";
}
else if($mohan < $sohan)
{
  echo "sohan is elder than mohan";
}
else
{
  echo "mohan is elder than sohan";
}
echo "<br>";

$bablu = 42;
$babita = 53;

if($bablu == $babita)
{
  echo "bablu is elder than babita";
}
else if($bablu !== $babita)
{
  echo "babita is elder than bablu";
}
echo "<br>";


$a = 21;
$b = 31;

switch ($a)
{
  case 13;
  {
    echo "Your favorite color is rewefrgdd!";
    break;
  }
  case 14;
  {
    echo "Your favorite color is rsdfred!";
    break;
  }
  case 15;
  {
    echo "Your favorite color is rwefdsfd!";
    break;
  }
  case 16;
  {
    echo "Your favorite color is redfgfgd!";
    break;
  }
  case 31;
  {
    echo "Your favorite color is red!";
    break;
  }

}
echo "<br>";

$x = 54;

switch ($x)
{
  case 54;
  {
    echo "Your favorite color is blue!";
    break;
  }
}
echo "<br>";

$x = 12;

switch ($x)
{
   case 17;
  {
    echo "Your favorite color is green!";
    break;

  }
}


    // default:
    //     echo "Your favorite color is neither red, blue, nor green!";
    //

?>

</body>
</html>
