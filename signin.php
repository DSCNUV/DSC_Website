<?php
    
		$username = "root";
		$password = "";
		$db="all_star";
		$conn = new mysqli("localhost", $username, $password, $db);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		
		 if(isset($_POST["mail"]) && isset($_POST["fname"]) && isset($_POST["lname"]))
		 {
            $email=$_POST["mail"];
		 	//$q="SELECT COUNT(1) FROM customers WHERE Email='$email'";
			// $result=mysqli_query($conn,$q);
		 	//if(!is_numeric($result))
		 	//	{
		 	//	exit("This email is already in use. Please enter different emailid to proceed");
		 	//	}
		 	//	else
		 	//	{                                                                                                                       
		 		$first = $_POST["fname"];
		 		$last = $_POST["lname"];
		 	//	}
		}                                                                                                     
		
		

		$cpwd="";
        if(isset($_POST["pwd"]))
		{$pwd=$_POST["pwd"];}
        if(isset($_POST["confirm"]))
        {$cpwd=$_POST["confirm"];}
		else
		{echo "password cannot be empty";}
		#echo "cpwd".$cpwd;
		if($pwd!==$cpwd)
		{
			exit("Passwords donot match");
		}
		$passwd = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO  customers (FirstName,LastName,Email,Password) VALUES('$first','$last','$email','$passwd')";
		//echo $query;
        mysqli_query($conn, $query);
        
       // header("Location: localhost/Login_v1/login.html");
		?>