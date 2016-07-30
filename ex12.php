<?php
// File name: ex12.php
// Student: Nate Canney

$con=mysql_connect("localhost","root","") or die("error, could not connect to server: " . mysql_error());
echo "connected to server.<br>\n";

$db= mysql_select_db('games')
or die("Error, could not connect to database: " . mysql_error());
echo "Accessed the database.<br>";

$sql= "UPDATE contacts SET email=`jdoe@suzuki.edu` WHERE id=`D00991301`";

if(mysql_query($sql)) {
echo "Values inserted successfully.";
}
else {
die("Error could not insert values: " . mysql_error());
}


echo "<table border='1' cellspacing='0'>";
echo "<tr> <th>FirstName</th><th>LastName</th><th>Email</th><th>StudentID</th></tr>";
$sql= mysql_query("SELECT * FROM contacts ORDER BY LastName, FirstName");

mysql_close($con);
?>