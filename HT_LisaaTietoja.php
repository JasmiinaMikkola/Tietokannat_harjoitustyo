<?php 
  
 $host='localhost'; 
 $dbname='t9mija02'; 
 $username='t9mija02'; 
 $password=''; 
  
 $con=mysqli_connect($host,$username,$password,$dbname); 
  
 if (mysqli_connect_errno()) 
 { 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
 } 
  
 $nimi=mysqli_real_escape_string($con, filter_input(INPUT_POST,'nimi',FILTER_SANITIZE_STRING)); 
 $lnimi=mysqli_real_escape_string($con, filter_input(INPUT_POST,'lnimi',FILTER_SANITIZE_STRING)); 
 $suku=mysqli_real_escape_string($con, filter_input(INPUT_POST,'suku',FILTER_SANITIZE_STRING));
 $hoito=mysqli_real_escape_string($con, filter_input(INPUT_POST,'hoito',FILTER_SANITIZE_STRING));
 
 $sql="CALL Lisaa_kasvi('$nimi','$lnimi','$suku','$hoito')"; 

 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 
 echo "1 kasvi lisätty"; 
 mysqli_close($con); 
  
