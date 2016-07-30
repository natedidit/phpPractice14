<?php
// File name: ex13.php
// Student: Nate Canney


class Human
{
 var $legs = "2 legs"; 

 function show()
  {
   
   echo $this->legs . "<br>";
   echo "Human can walk";
    
  }
 $walk->show();
}
class Kids extends Human
{
 var $hands= "2 hands";
 
 function display()
  {
   echo $this->hands . "<br>";
   echo "A kid can jump.";
  }
 function print_r()
  {
   
 
  }
}

$walk= new Human();
echo $walk->show();
echo "<br>";
$jump= new Kids();
echo $jump->display();
echo "<br>";
$Kuma= new Kids();
echo $Kuma->print_r();
?>