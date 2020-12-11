<?php
$sum=0;
$arr=array(1,2,3,4,5,11,22,3,3,4,4,2,2,3,2,2,3,4,4,4,6,4,2,11,44,56,9,8,7,7,0,7);
foreach($arr as $value)
{
$sum += $value;
}
echo "$sum";
?>