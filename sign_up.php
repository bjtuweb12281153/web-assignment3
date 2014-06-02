<?php 
		$con = mysql_connect("localhost","root","");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		if (mysql_query("CREATE DATABASE my_db",$con))
		  {
		  }
		else
		  {
		   mysql_error();
		  }

		mysql_select_db("my_db", $con);
		$sql = "CREATE TABLE user 
		(
		name varchar(15),
		password varchar(16)
		)";
		mysql_query($sql,$con);

		mysql_select_db("my_db", $con);

			if ($_POST["s_password"] == 0 ||$_POST["s_name"] == 0 ) 
			{
				echo "<script>alert('注请输入完整信息');history.go(-1);</script>";
			}
			else{
					$sql="INSERT INTO user (name, password)
					VALUES('$_POST[s_name]','$_POST[s_password]')";
					if (!mysql_query($sql,$con))
			  		{
			  		die('Error: ' . mysql_error());
			  		}
					echo "<script>alert('注册成功！');history.go(-1);</script>";
					mysql_close($con);
				}
		?>