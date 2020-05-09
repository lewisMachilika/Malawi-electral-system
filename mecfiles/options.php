<html>
 <head>
  <meta charset="utf=8">
  <title>sample</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/dropdown.css" rel="stylesheet">
 </head>
 <body>
	<div class="header">
	 <h1>MecSystem</h1>
	</div><!------header------>
	<div class="content">

	 <fieldset>
	 <legend>Candidate-Report(Councilors/MP)</legend>
	 <form action="candidatereportpr" method="POST">
	 District
	 <select name="district">
		<?php
		require('../mysqli_mec_connect.php');
		$query="SELECT * FROM candidate";
		$dname="candidate_id";
		$result=mysql_query($query);
		if($result){
			while($row=mysql_fetch_array($result)){
				$name=$row["$dname"];
				echo "<option value=$name>$name</br></option>";		
			}
		}else{
			echo "unable to execute";
		}
		?>
	 </select>
	 <input type="submit" name="submit" value="Produce-Report">
	 </form>
	 </fieldset>
	</div><!------content------>
	<div class="primary">
	 <ul>
	  <li>Home</li>
	  <li></li>
	  <li>Manage Profile</li>
	  <li>Log out</li>
	 </ul>
	 
	</div><!------primary------>
	<div class="footer">
	 <h1>Footer</h1>
	</div><!------footer------>
 </body>
</html>