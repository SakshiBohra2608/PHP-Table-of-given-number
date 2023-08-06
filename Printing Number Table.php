<!DOCTYPE html>
<html>
<head>
  
  <title>
    Print Table
</title>
</head>
<body style="background-color: powderblue; font-size: 20px;">


<form Method="post"> <br><br>
    
    Enter a number:<input type="text" name="value"/> 
    <br><br>x
    
    <input type="submit" name="btn" value="print number table" />

</form>

<?php
     if(isset($_POST['btn']))
     {
  
    $n=$_POST['value'];

    $mul=0;

  for($i=1;$i<=10;$i++)
  {
   $mul=$n*$i;
   echo $n;
   echo"*";
   echo $i;
   echo "=";
   echo $mul;
   echo "<br>";

 }
}
?>

</body>
</html>