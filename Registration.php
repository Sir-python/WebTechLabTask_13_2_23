<!DOCTYPE html>
<html>
<head>
	<title>Registered</title>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === "GET")
		{
			$f=true;
			$Fname = sanitize($_GET['fname']);
			$Lname = sanitize($_GET['lname']);
			$Fathersname = sanitize($_GET['fatherName']);
			$Mothersname = sanitize($_GET['motherName']);
			$gender = sanitize($_GET['gender']);
            $dob = sanitize($_GET['DOB']);
            $bGroup = sanitize($_GET['bloodGroup']);

            $email = sanitize($_GET['email']);
            $contactInfo = sanitize($_GET['p/m']);
            $website = sanitize($_GET['web']);
            $address = sanitize($_GET['pAddress']);

            $userName = sanitize($_GET['userName']);
            $password = sanitize($_GET['pword']);
		
			if(empty($Fname))
			{
                echo "Fill in your first Name<br>";
                $f=false;    
            }
            if(empty($Lname))
            {
                echo "Fill in your last Name<br>";
                $f=false;
            }
            if(empty($Fathersname))
            {
                echo "Fill in Father's Name<br>";
                $f=false;
            }
            if(empty($Mothersname))
            {
                echo "Fill in Mother's Name<br>";
                $f=false;
            }
            if(empty($gender))
            {
                echo "Select Gender please<br>";
                $f=false;
            }
            if(empty($dob))
            {
                echo "Fill in Date of Birth<br>";
                $f=false;
            }
            if(empty($bGroup))
            {
                echo "Fill in the Blood Group<br>";
                $f=false;
            }

            if(empty($email))
            {
                echo "Fill in the email<br>";
                $f=false;
            }
            
            if(empty($contactInfo))
            {
                echo "Fill up the contact information<br>";
                $f=false;
            }
            if(empty($website))
            {
                echo "Fill up the website<br>";
                $f=false;
            }
            if(empty($address))
            {
                echo "Fill up the address<br>";
                $f=false;
            }
            if(empty($userName))
            {
                echo "Fill in User name<br>";
                $f=false;
            }
            if(empty($password))
            {
                echo "Fill in password<br>";
                $f=false;
            }
            
            if($f===true)
            {
            	echo "<h3>Personal Info</h3>";
            	echo "First Name :$Fname<br>";
            	echo "Last Name :$Lname<br>";
            	echo "Father's Name :$Fathersname<br>";
            	echo "Mother's Name :$Mothersname<br>";
            	echo "Gender :$gender<br>";
            	echo "Date of Birth :$dob<br>";
            	echo "Blood Group :$bGroup<br>";
            	echo "<h3>Contact Info</h3>";
            	echo "Email :$email<br>";
            	echo "Phone/Mobile :$contactInfo<br>";
            	echo "Website :$website<br>";
            	echo "Present Address :$address<br>";
            	echo "<h3>Account Info</h3>";
            	echo "User Name :$userName<br>";
            }
        }
        else
        {
        	echo"Error!!";
        }

        function sanitize($info)
        {
            $info = trim($info);
            $info = stripcslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }
	?>
</body>
</html>
