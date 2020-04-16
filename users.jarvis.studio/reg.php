<?php
$connection = mysqli_connect('localhost', 'jarvisst_wp', 'EO%?_)13w3[.', 'jarvisst_users') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
	if (empty($_POST['name'])) 
	{
		$info_reg = 'Username is empty!';
	}		  
	elseif (empty($_POST['email'])) 
	{
		$info_reg = 'Email is empty!';
	}		   
	elseif (empty($_POST['password'])) 
	{
		$info_reg = 'Password is empty!';
	}	
	elseif (empty($_POST['id'])) 
	{
		$info_reg = 'ID is empty!';
	}
	else 
	{
	    $id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
  
		$query = "INSERT INTO `users` (id, name, password, email)
		VALUES ('$id', '$name', '$password', '$email')";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
					
		$info_reg = 'Your account has been registered';
	}
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>