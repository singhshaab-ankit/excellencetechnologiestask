<?php
$num=6;
$arr1=array();
$arr=array(1,2,3,-4,5,-11,22,3,-4,-2,56,-9,8,7,7,0,7);
for($i=0;$i<=count($arr);$i++)
{
   for($j=$i+1;$j<count($arr);$j++)
	{
	  
		if($arr[$i]+$arr[$j]==$num)
		{
		array_push($arr1,$arr[$i], $arr[$j]);
		}
  }
}
echo "The pairs are as follows";

for($n=0;$n<count($arr1);$n++)
{
	if($n%2==0)
	{
		echo "\n";
		echo $arr1[$n] . " ";
	}
	else
	{
		echo $arr1[$n] . " ";
	}
}
	

?>