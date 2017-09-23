<?php	
	if(isset($_POST["login"])){

		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");

		$sql="SELECT * FROM uuser WHERE uname='". $_POST["txtuname"] ."' and password='". $_POST["txtpword"] ."'";
			$result=$con->query($sql); 
			$rows=$result->rowCount(); 
			if($rows>=1){
				header("location: profile.php");
			}else{
				echo "Invalid username and password combination";
			}

	}

?>