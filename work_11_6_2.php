<?php
header("content-type:text/html;charset=utf-8");
//-------------------图形A------------------------
echo "图形A<br>";
$la = 4;
for($i=1;$i<=$la;$i++)
{
	for($j=1;$j<=$la;$j++)
	{
		echo "* ";
	}
	echo "<br>";
}
	//------------------图形B------------------------------
	echo "图形B<br>";
	$lc = 4;
	for($a=1;$a<=$lc;$a++)
	{
		for($b=1;$b<=$a;$b++)
		{
		}
		echo "<br>";
	}
	//-----------------------图形C-------------------------
		echo "图形C<br>";
		$lc = 4;
		for($c=1;$c<=$lc;$c++)
		{
			for($d=1;$d<=($c*2-1);$d++)  //括号其实没必要，为了直观
			{
				echo "* ";
			}
			echo "<br>";
		}
		//-------------------------图形D-------------------------------
		echo "图形D<br>";
		$ld = 6;  //总行数
		for($h=1;$h<=$ld;$h++)
		{
			//for($k=1;$k<=($ld-$h);$k++)
			//{
			//	echo "-&nbsp;";
			//}
			for($x=1;$x<=($h*2-1);$x++)
			{
				echo "*&nbsp;";
			}
			echo "<br>";
		}
?>