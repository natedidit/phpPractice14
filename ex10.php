<?php
// File name: ex10.php
// Student : Nate Canney

$filename= "algebra.dat";

if (file_exists("algebra.dat"))
{
$str= str_replace(".dat", ".bak", $filename);
rename($filename, $str);
}

$file= fopen("c:\\xampp\htdocs\myphp\Programming Exercise 10\algebra.dat", 'w');

$text= "John, Smith, 87.6,B .\r\n";
$text .= "Linda, Jackson, 91.3, A.\r\n";
$text .= "Helen, Garcia, 83.2, B .\r\n";
$text .= "Tammy, Hong, 77.91, C.\r\n";
$text .= "Annie, Wong, 85.21, B.\r\n";

$str = fwrite($file, $text);

fclose($file);

$str =  fopen("algebra.dat", "rb");

echo fread($str, 125);


?>


