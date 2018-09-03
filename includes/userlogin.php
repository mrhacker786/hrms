<?php
include "../storescripts/connection.php";
/**
* 
*/
class Login extends Crud
{
	
	public function user_login($query)
	{
		$output = '';
		$result = $this->execute_query($query);
		if (mysqli_num_rows($result) == 0 ) {
			echo "no data";
		}
		else{
			while($row = mysqli_fetch_object($result)){
				session_start();
				$_SESSION["id"] = $row->id;
				$_SESSION["username"] = $row->username;
				$_SESSION["password"] = $row->password;
				echo 'login successfully';
			}
		}
	}
}
 ?>