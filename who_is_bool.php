<?php
header("content-type:text/html;charset=utf-8");
/*$arr=array("星期天","星期一","星期二","星期三","星期四","星期五","星期六");
$week=date("w");
echo "今天{$arr["$week"]}";*/

$str="<table  align='center' width='800'>";
for($i=1;$i<=9;$i++)
{
$str.="<tr>";
for($j=1;$j<=$i;$j++)
	{
$str.="<td >$i&times{$j}=".$i*$j."</td>";
	}
$str.="</tr>";

}
$str.="</table>";
echo $str;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">

td{border:1px solid #666;padding:5px;}
</style>

<body>

</body>
</html>