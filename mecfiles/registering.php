<?php
    
    require_once '../mysqli_mec_connect.php';

    if (isset($_POST['register'])) {
        
    $firstName=$_POST['firstName'];
    $maidenName=$_POST['middleName'];
    $surname=$_POST['surname'];
    $phone=$_POST['phone'];
    $picture=$_POST['picture'];
    $dob=$_POST['dob'];
    $sex=$_POST['sex'];
    $email=$_POST['email'];
    $region=$_POST['region'];
    $district=$_POST['district'];
    $TA=$_POST['TA'];
    $constituency=$_POST['constituency'];
    $ward=$_POST['ward'];
    $village=$_POST['village'];
    $passwor_d=$_POST['password'];
    
     $sql="SELECT * FROM citizen WHERE fName='$firstName' AND mName='$maidenName' AND constituency='$constituency' AND ward='$ward' AND sname='$surname'";
      $sql=str_replace("\'","",$sql);
      $result=mysqli_Query($dbc,$sql);
      $row=mysqli_num_rows($result);
      if($row==0){
         
          	$sql="INSERT INTO citizen (citizen_id, fName, mName, sname, sex, dob,Phone, region, district, TA,
          constituency ,ward, village, email, password) VALUES(null, '$firstName','$maidenName', '$surname',
          '$sex','$dob','$phone','$region','$district','$TA', '$constituency', '$ward', '$village', 
          '$email', '$passwor_d')";
			if (mysqli_query($dbc, $sql)) {
					//echo "New user created successfully";
                echo '<meta http-equiv="refresh" content="1; URL=../logIn/registeringForm.html"/>';
                 echo '<h1 id="h1"><strong>registering </strong></h1>'.$firstName;
                exit();
                  
					}
					else {
					echo 'Error: ' . $sql . '<br>' . mysqli_error($dbc);
					}
				
      }
      else{
       echo 'user already exist ';
       echo '<meta http-equiv="refresh" content="1; URL=../mecWebPage.html"/>';
       echo '<h1 id="h1"><strong>user already EXIST returning to form</strong></h1>';
                exit();
      }

    }
    {
        echo 'is not set ';
    }
    ?>