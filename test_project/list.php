<?php

    $i = 0;
    // loops
    echo "Users Listing <br>";
    while($i < 10)
    {
      if(isset($users[$i]))
      {
        echo $users[$i] . '<br>';
      }
      else
        break;

      $i++;
    }
    echo "<br>";

    $i = 0;
    echo "User Listing <br>";
    for ($i=0; $i < 10; $i++)
    {
      if(isset($users[$i]))
      {
        echo $users[$i] . '<br>';
      }
      else
        break;


    }
  


 ?>
