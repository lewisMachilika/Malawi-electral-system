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
                <h1> enter your citizen id </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="voting.php" autocomplete="on" method="post"> 
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

                         ?> 
                                  <div class="form-group">
                                <label style="width:50%;" for="idnumber">enter your citizen id</label> 
                                    <input type="number" id="idnumber" style="margin-left:-45px; width: 100px; hieght: 2px;" 
                                     name="idnumber" placeholder="#">
                                    </div>
                               
            <div class="form-group"><p class="login button"> 
                                    <input type="submit" value="continue" name="continue" /> 
								</p>
    	         <input type="reset" style="margin-top:-60px;" class="btn btn-primary btn-lg btn-danger pull-right" data-dismiss="modal"
                  aria-hidden="true" value="CANCEL">
      
              <span class="pull-right"><a href="../mecWebPage.html">already voted</a></span>
              <span><a href="#">Need help?</a></span>
              </div>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>