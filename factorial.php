
<?php
if(isset($_POST['num']))
{
//$num=$_POST['num'];
function factorial($num)
{
if($num<0)
{
echo"factorial is not defined for negative numbers.";
}
elseif($num==0)
{
return 1;
}
else
{
$fact=1;
for($i=1;$i<=$num;$i++)
{
$fact*=$i;
}
return $fact;
}
}
}
?>



























































































































































































































































































































































































































































































































































