<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<?php
require_once('../mysqli_mec_connect.php');
?>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>voting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../logIn/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../logIn/css/style.css" />
		<!--link rel="stylesheet" type="text/css" href="css/animate-custom.css" /-->
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                Be rensiponsible citizens
                </a>
                <span class="right">
                    <a href="">
                        <strong>register inorder to vote</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1> choose candidate </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="savingVote.php" autocomplete="on" method="post"> 
                            <!--p>
                               <label for="president">president</label>
                               <input type="radio" id="president" style="margin-left:-20px;" name="radio1">
                               
                               <label  for="mp" style="margin-left:40px;">MP</label>
                               <input type="radio" id="mp" style="margin-left:-60px;" name="radio1">
                               
                               <label for="councilor" style="margin-left:60px;">councilor </label>
                               <input type="radio" id="councilor" style="margin-left:10px;" name="radio1">
                               </p-->


                          <?php 
                                require_once('../mysqli_mec_connect.php');
                                                        
                            if (isset($_POST['continue'])) {
                                
                            $personID=$_POST['idnumber'];
                            
                            }

                    $citzen_query="SELECT * FROM citizen WHERE citizen_id=$personID";
                    $citzen_query=str_replace("\'","",$citzen_query);
                    $citzen_results=mysqli_Query($dbc,$citzen_query);
                    $availableRows=mysqli_num_rows($citzen_results);
                    if($availableRows==0){
                        
                            echo 'you does not registered';
                            echo '<meta http-equiv="refresh" content="1; URL=../logIn/registeringForm.html"/>';
                            echo '<h1 id="h1"><strong>you have not registered redirecting to registration form</strong></h1>';
                                        exit();
                    }

                    $sq_l="SELECT * FROM vote WHERE citizen_id=$personID";
                    $sq_l=str_replace("\'","",$sq_l);
                    $resul_t=mysqli_Query($dbc,$sq_l);
                    $ro_w=mysqli_num_rows($resul_t);
                    if($ro_w==0){
                               //$constituency_name=$mysqli->query("SELECT constituency FROM citizen WHERE  citizen_id=$personID")->fetch_object()->constituency_name;
                               $constituency_query=("SELECT constituency FROM citizen WHERE  citizen_id=$personID");
                                $constituency_execute = @mysqli_query($dbc, $constituency_query);
                                $constituency_array=mysqli_fetch_assoc($constituency_execute);
                                $constituency_name=$constituency_array['constituency'];
                                  $presiden_t = ("SELECT * FROM candidate where position_name='President'"
                                                                          );
                    
                                     $M_P = ("SELECT * FROM candidate where position_name='MP' AND (represent IN
                                                ( SELECT constituency_name FROM constituency WHERE 
                                                    (constituency_name ='$constituency_name')) OR (represent =
                                                (SELECT ward_name FROM ward WHERE constituency_name ='$constituency_name')))"
                                                                            );
                                   $councilo_r = ("SELECT * FROM candidate where position_name='Councilor' AND (represent IN
                                                ( SELECT constituency_name FROM constituency WHERE 
                                                    (constituency_name ='$constituency_name')) OR (represent =
                                                (SELECT ward_name FROM ward WHERE constituency_name ='$constituency_name')))"
                                                                            );                        
                                $response1 = @mysqli_query($dbc, $presiden_t);
                                $response2 = @mysqli_query($dbc, $M_P);
                                $response3 = @mysqli_query($dbc, $councilo_r);
                                $option1='';
                                $option2='';
                                $option3='';
                                while ($row1=mysqli_fetch_assoc($response1)) {
                                    # code...
                                    $option1 .='<option value= "'.$row1['candidate_id'].'">'.$row1['candidate_id'].'</option>';
                                }
                                 while ($row2=mysqli_fetch_assoc($response2)) {
                                    # code...
                                    $option2 .='<option value= "'.$row2['candidate_id'].'">'.$row2['candidate_id'].'</option>';
                                }
                                 while ($row3=mysqli_fetch_assoc($response3)) {
                                    # code...
                                    $option3 .='<option value= "'.$row3['candidate_id'].'">'.$row3['candidate_id'].'</option>';
                                }
                    }
                    else {
                        
                            echo 'user already voted ';
                            echo '<meta http-equiv="refresh" content="1; URL=../mecWebPage.html"/>';
                            echo '<h1 id="h1"><strong>you already voted returning to home</strong></h1>';
                                        exit();
                    }
                                ?>
                               
                               <p>
                                         <label style="">PRESIDENT
                                            <select style="" name ="candidateID1">

                                                <?php echo $option1; ?>
                                        
                                            </select></label>

                                            <label style="">MP
                                            <select style="" name ="candidateID2">

                                                <?php echo $option2; ?>
                                        
                                            </select></label>
                                            <label style="">COUNCILOR
                                            <select style="" name ="candidateID3">

                                                <?php echo $option3; ?>
                                        
                                            </select></label>
                               </p>
                               <p>
                               <input type="number" value="<?php echo $personID; ?>" name="idnumber" style="display:none">
                               </p>
            <div class="form-group">
           

              <span class="pull-right"><a href="../mecWebPage.html">already voted</a></span>
              <span><a href="#">Need help?</a></span>
              
            </div>
             <p class="login button"> 
               <input type="submit" value="saving" name="saving" /> 
				</p>
    	 <input type="reset" class="btn btn-primary btn-lg btn-danger pull-right"
         style="margin-top:-75px;" data-dismiss="modal" aria-hidden="true" value="CANCEL">
      
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>