<?php
echo("Welcome to php" ."<br>");

$x=5; 
$y="Welcome";
$z=true;
 echo gettype($x);
 echo"<br>";
 echo gettype($y);
 echo"<br>";
 echo gettype($z);
 echo"<br>";
for($i=1;$i<=15;$i++){
  echo $i;
}
echo"<br>";
$x = 0;

while($x < 15) {
 $x++;
 echo "$x";
}
echo"<br>";
const nam="iti";
echo nam;
echo"<br>";
echo gettype(nam);
echo"<br>";
function sum($num1,$num2){
    $result=$num1+$num2;
    if($result>50)
    echo"accepted";
    else
    echo" not accepted";

}
sum(60,10);
echo"<br>";
sum(10,10);
echo"<br>";


echo "<br>";
$A=1000;
$B=1200;
$C=1400;
?>
<table border=1>
<tr>

<td>salary of  mr A is</td>
<td> <?php  echo $A ?></td>
</tr>
<tr>
<td>salary of mr B is</td>
<td><?php  echo $B ?></td>
</tr>
<tr>
<td>salary of mr C is</td>
<td><?php  echo $C ?></td>
</tr>
</table>

<?php
echo "<br>";
Function swap()
{
$num =80;
$strnum = (string) $num;
echo gettype($strnum);
}

swap();

echo"<hr>";


function calc1(){
  return 1+5;
}
echo calc1();

echo"<hr>";

function calc2(){
  echo 1+5;
}
echo calc2();
echo"<hr>";
echo gettype(calc1());
echo"<hr>";
echo gettype(calc2());
echo"<hr>";
echo (integer)calc2()+5;

echo calc1()+5;















