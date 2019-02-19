<?php
	define('DB_SERVER','localhost');    //server being localhost
    define('DB_USERNAME','root');   //username for the server root here, may change during hosting
	define('DB_PASSWORD','');           //no password has been set 
	define('DB_NAME','construction');   //database name, construction here
	$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);    //creates a connection to a mysql server, also has a port argument not included here
	if($conn==false){
		die("Error!! Couldn't connect to the database".mysqli_connect_error());     //displays the message and exits the script
	}
    //session_start();
    //$_SESSION['employeeType'] == 'builder';
	$projectName=$_POST['projectName'];
	$sql="select * from project where projectName=?";
        	$stmt=mysqli_stmt_init($conn);
        	if(!mysqli_stmt_prepare($stmt,$sql)){
        		echo "some error";
        	}
        	else{
        		mysqli_stmt_bind_param($stmt,"s",$projectName);
        		if(mysqli_stmt_execute($stmt)){
                    $result=mysqli_stmt_get_result($stmt);
        			if($row=mysqli_fetch_assoc($result)){
        				//$upload=$row['uploadedBy'];
        		}
        	}
        	//if($_SESSION['employeeType']=='builder')
            //{
        		$sql="delete from project where projectName=?";
        		$stmt=mysqli_stmt_init($conn);
        	if(!mysqli_stmt_prepare($stmt,$sql)){
        		echo "some error ".mysqli_stmt_error($stmt);
        	}
        	else{
        		mysqli_stmt_bind_param($stmt,"s",$projectName);
        		if(mysqli_stmt_execute($stmt)){
        			echo "successfully, deleted!!";
        		}
        		$result=mysqli_stmt_get_result($stmt);
        		echo $result;
        	}
        	//}
        }
			
?>