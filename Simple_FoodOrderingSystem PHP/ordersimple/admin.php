<?php
session_start();
	if(isset($_POST["enter"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == 'admin' && $password == 'admin'){
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;
				echo '<script language="Javascript">
                location.replace("sales.php")
                </script>';
	
		}else{
				echo '<script language="Javascript">
                alert("Sorry,Login Fail....!")
                location.replace("admin.php")
                </script>';
        }
	}

?>
<html>
<?php include('header1.php'); ?>
<div id="admin" style="position:relative;
		width:350px;
		height:200px;
		margin:auto;
		margin-top:5%;">
<form style="position:relative;
		width:500px;
		height:300px;
		margin:auto;
		margin-top:5%;" method="post" class="well" action="admin.php">
			<center>
				<legend style="color: blue;">Adminstrator</legend><br>
				<table>
					<tr><td>
					Name : </td><td><input type="text" name="username" placeholder="Username" required></td></tr>
					<tr><td>Password : </td><td><input type="password" name="password" placeholder="Password" required></td></tr>
					<tr><td></td><td>	<input type="submit" name="enter" value="Enter" class="btn btn-primary" style="width:100px;"></td></tr>

				</table>
			</center>
</form>

</div>
</body>
</html>