<?php
//File name: ex04.php
//student: Nate Canney

if ($_POST)
{

 $x=$_POST["grade"];

 if ($x>100):
  
   echo "?? Are you nuts?";
  
  elseif($x >= 90):
  
   echo" A: Very Good job";
  
  elseif($x>=80):
  
   echo "B: You did well";
  
  elseif($x>=70):
  
   echo"C: you did ok";
  
  elseif ($x>=60):
  
   echo "D: You just passed";
  
  else:
  
   echo "F: you failed";
        
endif;

}
 

else{

?>

<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter your grade:
<input type = "text" name= "grade" size= 4>
<input type= "submit" value= "check">
</form>
<?php
}
?>
