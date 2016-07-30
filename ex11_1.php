<?php

session_start();

echo"This is ex11_1.php<br>";
echo "Session variable is " . $_SESSION['mysess'];

session_destroy();

?>