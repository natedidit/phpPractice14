<?php
if(!$_POST)
{
?>

<form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
<p>Enter a valid phone number: <input type="text" name="phone" size="30"> (i.e 714-555-4545)<br>
<br>
<input type="submit" value="Check">
</form>

<?php
} 
else
{
if (preg_match("/^[[:digit:]]{3}-[[:digit:]]{3}-[[:digit:]]{4}$/i",$_POST["phone"]))
{
echo "valid phone number<br>";
} 
else
{
echo "Invalid phone number<br>";
}
}
?>