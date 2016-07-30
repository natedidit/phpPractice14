<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter  a positive integer: <input type= 'text' name='line'>

<input type= "submit" value="check">

</form>

<?php
if ($_POST)
{
$line= $_POST["line"];
for($i=0; $i <$line; $i++)
{


echo "<hr size=1 width=100% color='black'>";
 if($line /2)
{
echo "<hr size=1 width=50% color='red'>";
}


}
}
// File Name ex05.php
//Student : Nate Canney

?>
</body>
</html>

