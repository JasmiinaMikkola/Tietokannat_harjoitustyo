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
  
$result = mysqli_query($con,"SELECT * FROM Nayta_kaikki_kasvit"); 
echo "<table border='8'> 
<tr> 
<th>Heimo</th> 
<th>Suku</th> 
<th>Laji</th> 
<th>Laji (latinaksi)</th> 
<th>Hoitovaikeus</th> 
<th>Valontarve</th> 
<th>Vedentarve</th> 
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['Heimo'] . "</td>"; 
echo "<td>" . $row['Suku'] . "</td>";
echo "<td>" . $row['Laji'] . "</td>"; 
echo "<td>" . $row['Laji_latinaksi'] . "</td>";  
echo "<td>" . $row['Vaikeus'] . "</td>"; 
echo "<td>" . $row['Valontarve'] . "</td>"; 
echo "<td>" . $row['Vedentarve'] . "</td>";
echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con); 