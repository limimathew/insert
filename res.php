<html>
<body background="">
<center>
<h1>ONLINE TEST RESULT</h1>
<?php
if(isset($_POST["btnsubmit"]))
{
$con=mysql_connect("localhost","root","");
mysql_select_db("onlntst",$con);
$sql="select * from res";
$res=mysql_query($sql,$con);
$cor=0;
$wrg=0;
$i=1;
$tot=0;
while($row=mysql_fetch_array($res))
{
$number[$i]=$row['ans'];
$i=$i+1;
}
if(isset($_POST['r1']))
{
if($_POST['r1']==$number[1])
{
$cor=$cor+1;
}
else
{
$wrg=$wrg+1;
}
}
if(isset($_POST['r2']))
{
if($_POST['r2']==$number[2])
{
$cor=$cor+1;
}
else
{
$wrg=$wrg+1;
}
}
if(isset($_POST['r3']))
{
if($_POST['r3']==$number[3])
{
$cor=$cor+1;
}
else
{
$wrg=$wrg+1;
}
}
if(isset($_POST['r4']))
{
if($_POST['r4']==$number[4])
{
$cor=$cor+1;
}
else
{
$wrg=$wrg+1;
}
}
if(isset($_POST['r5']))
{
if($_POST['r5']==$number[5])
{
$cor=$cor+1;
}
else
{
$wrg=$wrg+1;
}
}
echo "<center>";
echo "<table border=1>";
echo "<tr>";
echo "<td>NO OF CORRECT ANSWER</td><td>$cor</td></tr>" ;
echo "<td>NO OF WRONG ANSWER</td><td>$wrg</td></tr>" ;
$wrg=$wrg*(1/3);
$cor=$cor-$wrg;
$tot=$cor;
echo "<td>TOTAL SCORE</td><td>$tot</td></tr>" ;
echo "</table>";
echo "</center>";
}
?>
</body>
</html>