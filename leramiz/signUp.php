<!DOCTYPE html>
<html>
<head>
	<title>Signup!</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
		body {
		  margin: 0;
		  padding: 0;
		  background-color: #17a2b8;
		  height: 100vh;
		}
		#login .container #login-row #login-column #login-box {
		  margin-top: 120px;
		  max-width: 600px;
		  height: 900px;
		  border: 1px solid #9C9C9C;
		  background-color: #EAEAEA;
		}
		#login .container #login-row #login-column #login-box #login-form {
		  padding: 20px;
		}
		#login .container #login-row #login-column #login-box #login-form #register-link {
		  margin-top: -85px;
		}
	</style>
</head>
<body>
<!-- <form method="POST" enctype="multipart/form-data">
	Name : <input type="text" name="employeeName" id="employeeName" placeholder="Enyer your name" required><br>
	Email Id : <input type="email" name="email" id="email" required placeholder="Enter your email" value=""><br>
	Enter your phone No: <input type="number" name="phoneNo" id="phoneNo" required><br>

	Password : <input type="password" name="password" placeholder="Enter your password" id="password" required><br>
	Confirm Password : <input type="password" name="confirmPassword" id="confirmPassword" required placeholder="Repeat your password"><br>

	Employee Type :<br>
	<input type="radio" name="employeeType" value="architect" id="employeeType">Architect<br>
	<input type="radio" name="employeeType" value="accountant" id="employeeType">Accountant<br><br>

	Upload your image :<input type="file" name="employeeImage" id="employeeImage" required><br>
	
	Unique Employee number : <input type="text" name="uniqueNumber" placeholder="Enter your unique number here" id="uniqueNumber" required><br>
	<input type="submit" name="signUp" value="Signup!" id="signUp">
</form> -->
<button style="float: right;"><a href="index.php" style="text-decoration:none;">Go to main Website</a></button>
<div id="login">
        <h3 class="text-center text-white pt-5">Welcome ANT Employee</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post" enctype="multipart/form-data">
                            <h3 class="text-center text-info">Signup</h3>
                            <div class="form-group">
                                <label for="employeeName" class="text-info">Name:</label><br>
                                <input type="text" class="form-control" name="employeeName" id="employeeName" placeholder="Enyer your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email ID:</label><br>
                                <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your email" value="">
                            </div>
                            <div class="form-group">
                                <label for="phoneNo" class="text-info">Phone No:</label><br>
                                <input type="number" name="phoneNo" id="phoneNo" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required placeholder="Repeat your password">
                            </div>
                            <div class="form-group">
                                <label for="employeeType" class="text-info">Designation:</label><br>
                                <input type="radio" name="employeeType" value="architect" id="employeeType">Architect
								<input type="radio" name="employeeType" value="accountant" id="employeeType">Accountant
                            </div>
                            <div class="form-group">
                                <label for="uniqueNumber" class="text-info">Email ID:</label><br>
                                <input type="text" name="uniqueNumber" class="form-control" placeholder="Enter your unique number here" id="uniqueNumber" required><br>
                            </div>
                            <div class="form-group">
                                <label for="uniqueNumber" class="text-info">Upload your image:</label><br>
                                <input type="file" name="employeeImage" id="employeeImage" required class="form-control"><br>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signUp" value="Signup!" id="signUp" class="form-control">
                            </div>
                            <div id="register-link" class="text-right">
                                <br><br><br><br><a href="login.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	//if($_SERVER['REQUEST_METHOD'] == 'POST')
	//{
		if(isset($_POST['signUp']) && isset($_FILES['employeeImage']))
		{
			session_start();
			include 'connection.php';
			$emailIsSet = false;
			$phoneNoIsSet = false;
			$uniqueNumberIsSet = false;
			$employeeTypeIsSet = false;
			$passwordIsSet = false;
			$employeeNameIsSet = false;
			$databaseInsertSuccess = false;
			$employeeImageIsSet = false;
			$employeeSalaryIsSet = false;
			$employeeAgeIsSet = false;
			$employeeGenderIsSet = false;
			$employeeExperienceIsSet = false;
			$targetFile = '';
			$uploadOk = 1;

			$fileName = $_FILES['employeeImage']['name'];
			//echo $fileName."<br>";
			$fileTmp = $_FILES['employeeImage']['tmp_name'];
			//echo $fileTmp."<br>";
			$fileSize = $_FILES['employeeImage']['size'];
			//echo $fileSize."<br>";
			$fileExt=strtolower(end(explode('.',$_FILES['employeeImage']['name'])));
			$targetDirectory = "employeeDetails/";
			$targetFile = $targetDirectory . basename($_FILES["employeeImage"]["name"]);
			//echo $targetFile."<br>";
			$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
			{
				echo "<script type='text/javascript'> alert('Only images allowed!'); </script>";
				$uploadOk = 0;
			}
			if (file_exists($targetFile)) 
			{
				$uploadOk = 0;
			    echo "<script type='text/javascript'> alert('File exist!'); </script>";
			    unlink($targetFile);
			}
			if($uploadOk==1 && move_uploaded_file($fileTmp, $targetFile))
			{
				$employeeImageIsSet = true;
				echo "<script type='text/javascript'> alert('Image has been uploaded!'); </script>";
				//echo 'file '.$targetFile.' has been uploaded<br>';
			}
			else
			{
				echo "<script type='text/javascript'> alert('Image couldn't be uploaded!'); </script>";
				$employeeImageIsSet = false;
			}
			function processData($data) 
			{
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			$employeeType="";
			if(!empty($_POST['email']))
			{
				$emailIsSet = true;
				$emailId = processData($_POST['email']);
				//echo $emailId.'<br>';
			}
			if(!empty($_POST['phoneNo']) && strlen($_POST['phoneNo']) == 10 )
			{
				$phoneNoIsSet = true;
				$phoneNo = processData($_POST['phoneNo']);
				//echo $phoneNo.'<br>';
			}
			if(!empty($_POST['uniqueNumber']))
			{
				$uniqueNumberIsSet = true;
				$uniqueNumber = processData($_POST['uniqueNumber']);
				if(!empty($_POST['employeeType']) && processData($_POST['employeeType']) == 'architect')
				{
					$employeeType = processData($_POST['employeeType']);
					$employeeTypeIsSet = true;
				}
				else if(!empty($_POST['employeeType']) && processData($_POST['employeeType']) == 'accountant')
				{
					$employeeType = processData($_POST['employeeType']);
					$employeeTypeIsSet = true;
				}
				else
				{
					$uniqueNumberIsSet = false;
					$employeeTypeIsSet = false;
					//echo 'unique num error '.$uniqueNumber.' '.$employeeType.'<br>';
				}
			}
			if(!empty($_POST['password']) && !empty($_POST['confirmPassword']) && $_POST['password'] == $_POST['confirmPassword'])
			{
				$password = $_POST['password'];
				$confirmPassword = $_POST['confirmPassword'];
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
				$passwordIsSet = true;
				//echo $password.'  '.$hashedPassword.'<br>';
			}
			if(!empty($_POST['employeeName']))
			{
				$employeeName = processData($_POST['employeeName']);
				$employeeNameIsSet = true;
			}
			$fileName = $_POST['uniqueNumber'];
			$fileName = $fileName.'.txt';

			$salaryPattern = "/Salary :/";
			$agePattern = "/Age :/";
			$experiencePattern = "/Experience :/";
			$genderPattern = "/Gender :/";

			$lines = file($fileName);
			$salaryProcessedFile = preg_grep($salaryPattern, $lines);
			//echo "<br>Salary after processing is :<br>";
			foreach ($salaryProcessedFile as $name)
			{
				$whatIWant = substr($name, strpos($name, ":") + 1);
				$salary = intval($whatIWant);
				//echo $salary;
			}
			if(!empty($salary))
				$employeeSalaryIsSet = true;

			//echo "<br>Age after processing is :<br>";
			$ageProcessedFile = preg_grep($agePattern, $lines);
			foreach ($ageProcessedFile as $name)
			{
				$whatIWant = substr($name, strpos($name, ":") + 1);    
				$age = intval($whatIWant);
				//echo $age;
			}
			if(!empty($age))
				$employeeAgeIsSet = true;

			//echo "<br>Experience after processing is :<br>";
			$experienceProcessedFile = preg_grep($experiencePattern, $lines);
			foreach ($experienceProcessedFile as $name)
			{
				$whatIWant = substr($name, strpos($name, ":") + 1);
				$experience = intval($whatIWant);
				//echo $experience;
			}
			if(!empty($experience))
				$employeeExperienceIsSet = true;

			$genderProcessedFile = preg_grep($genderPattern, $lines);
			foreach ($genderProcessedFile as $name)
			{
				$whatIWant = substr($name, strpos($name, ":") + 1);
				$gender = $whatIWant;
				//echo $experience;
			}
			if(!empty($gender))
				$employeeGenderIsSet = true;

			// $conn = mysqli_connect("localhost", "root", "", "ant");
			// $sql = "INSERT INTO dataFromFile(salary, age, experience) VALUES ('$salary', '$age', '$experience')";
			// $result = mysqli_query($conn, $sql);
			// if($result)
			// 	echo "<br>Inserted successfully!</br>";
			// else
			// 	echo "<br>Not Inserted</br>";

			if($emailIsSet && $phoneNoIsSet && $passwordIsSet && $employeeTypeIsSet && $uniqueNumberIsSet && $employeeImageIsSet && $employeeNameIsSet)
			{
				$sql = "INSERT INTO user(employeeName, emailId, phoneNo, password, employeeType, uniqueNumber, employeeImage, employeeSalary, employeeAge, employeeExperience, employeeGender) VALUES ('$employeeName','$emailId', '$phoneNo', '$hashedPassword', '$employeeType', '$uniqueNumber', '$targetFile', '$salary', '$age', '$experience', '$gender')";
				$result = mysqli_query($conn, $sql);
				if($result)
				{
					$databaseInsertSuccess = true;
					echo "<script type='text/javascript'> alert('Signup successful!'); </script>";
					header('location:login.php');
					//echo "inserted successfully<br>";
				}
				else
				{
					echo "<script type='text/javascript'> window.alert('Inserting into DB failed!'); </script>";
					//echo "insert failure but everything is set<br>";
				}
			}
			else
			{
				/*echo "everything isnt set<br>";
				echo "emailIsSet =".$emailIsSet."<br>";
				echo "phoneNoIsSet =".$phoneNoIsSet."<br>";
				echo "passwordIsSet =".$passwordIsSet."<br>";
				echo "employeeTypeIsSet =".$employeeTypeIsSet."<br>";
				echo "uniqueNumberIsSet =".$uniqueNumberIsSet."<br>";
				echo "employeeImageIsSet =".$employeeImageIsSet."<br>";*/
				echo "<script type='text/javascript'> window.alert('Check the fields and try again!'); </script>";
			}

		}
	//} 
?>
</body>
</html>