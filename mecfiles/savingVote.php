<?php
    
    require_once '../mysqli_mec_connect.php';

    if (isset($_POST['saving'])) {
        
    $president_id=$_POST['candidateID1'];
    $mp_id=$_POST['candidateID2'];
    $councilor_id=$_POST['candidateID3'];
    $citizen_i_d=$_POST['idnumber'];
                    $citzen_query="SELECT * FROM citizen WHERE citizen_id=$citizen_i_d";
                    $citzen_query=str_replace("\'","",$citzen_query);
                    $citzen_results=mysqli_Query($dbc,$citzen_query);
                    $availableRows=mysqli_num_rows($citzen_results);
                    if($availableRows==0){
                        
                            echo 'you does not registered';
                            echo '<meta http-equiv="refresh" content="1; URL=../logIn/registeringForm.html"/>';
                            echo '<h1 id="h1"><strong>you have not registered redirecting to registration form</strong></h1>';
                                        exit();
                    }
      
                    $citzen_query1="SELECT * FROM vote WHERE citizen_id=$citizen_i_d";
                    $citzen_query1=str_replace("\'","",$citzen_query1);
                    $citzen_results1=mysqli_Query($dbc,$citzen_query1);
                    $availableRows1=mysqli_num_rows($citzen_results1);
                    if($availableRows1>0){
                        
                            echo 'you does not registered';
                            echo '<meta http-equiv="refresh" content="1; URL=../mecWebPage.html"/>';
                            echo '<h1 id="h1"><strong>you have already voted redirecting to registration form</strong></h1>';
                                        exit();
                    }






            $represent_query1=("SELECT represent FROM candidate WHERE  candidate_id='$president_id'");
                                $represent_execute1 = @mysqli_query($dbc, $represent_query1);
                                $represent_array1=mysqli_fetch_assoc($represent_execute1);
                                $represent_name1=$represent_array1['represent'];
                                

            $represent_query2=("SELECT represent FROM candidate WHERE  candidate_id='$mp_id' ");
                                $represent_execute2 = @mysqli_query($dbc, $represent_query2);
                                $represent_array2=mysqli_fetch_assoc($represent_execute2);
                                $represent_name2=$represent_array2['represent'];

            $represent_query3=("SELECT represent FROM candidate WHERE  candidate_id='$councilor_id'");
                                $represent_execute3 = @mysqli_query($dbc, $represent_query3);
                                $represent_array3=mysqli_fetch_assoc($represent_execute3);
                                $represent_name3=$represent_array3['represent'];

            $represent_query4=("SELECT polling_centre_name FROM polling_centre WHERE  ward_name='$represent_name3'");
                                $represent_execute4 = @mysqli_query($dbc, $represent_query4);
                                $represent_array4=mysqli_fetch_assoc($represent_execute4);
                                $represent_name4=$represent_array4['polling_centre_name'];



        	$sql1="INSERT INTO vote (candidate_id, citizen_id, vote_date, polling_centre_name)
               VALUES('$president_id', $citizen_i_d,now(), '$represent_name4')";
               $sql2="INSERT INTO vote (candidate_id, citizen_id, vote_date, polling_centre_name)
               VALUES('$mp_id', $citizen_i_d,now(), '$represent_name4')";
               $sql3="INSERT INTO vote (candidate_id, citizen_id, vote_date, polling_centre_name)
               VALUES('$councilor_id', $citizen_i_d,now(), '$represent_name4')";
			if (mysqli_query($dbc, $sql1)&& mysqli_query($dbc, $sql2)&& mysqli_query($dbc, $sql3)) {
					//echo "New user created successfully";
                echo '<meta http-equiv="refresh" content="1; URL=../mecWebPage.html"/>';
                 echo '<h1 id="h1"><strong>voted successfully</strong></h1>';
                exit();
                  
					}
					else {
					echo 'Error: ' . $sql1 . '<br>'.$sql2 . '<br>'.$sql3 . '<br>' . mysqli_error($dbc);
					}
				
     
   
    }
    	else {
					echo 'Error: ' . '<br>' . 'not yet set';
					}
    ?>