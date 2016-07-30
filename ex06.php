<?php

$genre= array("b" =>"family", "d" =>"drama","c"=> "action", "r"=>"romance", "z"=>"comedy", "r"=>"horror");

echo" print unsorted list: ";

print_r($genre);
echo"<br>";

asort($genre);

echo" print sorted list: " ;

print_r($genre);
?>
