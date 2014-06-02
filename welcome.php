<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM user");
$flag = false;

while($row = mysql_fetch_array($result))
  {
  	if ($_POST['name']==$row['name'] &&  $_POST['password']==$row['password'] )
  		$flag = true;
  }


  if ($flag==true)
  {
  	echo "欢迎光临".$_POST['name']."~" ;
  }
  else
  {
  	echo "<script>alert('用户或密码不正确');history.go(-1);</script>";
  }

mysql_close($con);
?>