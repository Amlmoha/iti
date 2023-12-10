<?php
echo"welcome to php";
echo"<br>";
print"welcome to php";
echo"<br>";
$x=5;
$y="Welcome";
$z=True;
echo$x;
echo"<br>";
echo$y;
echo"<br>";
echo $z;
echo"<br>";
//Number 3/
 echo "x is : " . gettype($x);
 echo "<br>";
 echo "y is : " . gettype($y);
 echo "<br>";
 echo "z is : " . gettype($z);
//Number 4/
 $i = 0;
 for( $i = 0; $i <= 15; $i++ ){
     echo $i;
     echo "<br>";
 }
 while($i <= 15 ){
     echo $i;
     echo "<br>";
     $i ++ ;
 }
/*Number 5 */
 const school= "ITI";
 echo school;
 echo "<br>";
 define("CAR","BMW");
 echo CAR;
//Number 7/
 $m = 5;
$n = 9;
 $result = $m + $n;
 if( $result > 50){
     echo "Accepted";
 }else{
     echo "Not Accepted";
 }
//Number 8/

echo "<table border='1'>
<tr>
     <td>Salary Of Ahmed</td>
     <td>15000$</td>
 </tr>
 <tr>
     <td>Salary Of Salah</td>
     <td>15200$</td>
 </tr>
 <tr>
     <td>Salary Of Hosney</td>
     <td>14000$</td>
 </tr>
     </table>";
//Number 9/
 $x = 651;
 function anyToString($x){
        echo $x;
 }echo anyToString($x);
?>