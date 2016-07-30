

<?php
//File name: ex15.php
//Student: Nate Canney
function inverse($x)
{
 if (!$x) {
  throw new Exception('Division by Zero.');
}
else return 1/$x;
}

try {
 for ($i=-4; $i<=4; $i++)  {
  echo inverse($i) . "\n<br>";
  }
}
catch (Exception $e) {
 echo  $e->getMessage(), "\n<br>" ;
}


 for ($i=1; $i<=4; $i++) {
 echo inverse($i) . "\n<br>";
}


echo 'Hello World';

?>