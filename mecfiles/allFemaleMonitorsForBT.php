<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>view</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/dropdown.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/poly-template.css" rel="stylesheet">
	<!--link href="css/adaptive.css" rel="stylesheet"-->
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	
		<!-- SLIDER JAVASCRIPT -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
<style type="text/css">
a:link, a:visited {
    background-color: grey;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline;
}

a:hover, a:active {
    background-color: blue;
}
#maleMonitor{
    margin-top:-53px;
    margin-left:90px;
}
#femaleMonitor{
    margin-top:-53px;
    margin-left:250px;
}
#back{
    
    margin-left:420px;
}

</style>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">all Female monitors for blantyre</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>first name</b></td>";
								echo "<td><b>surname</b></td>";
								echo "<td><b>middle name</b></td>";
								echo "<td><b>candidate id</b></td>";
								echo "<td><b>sex</b></td>";
								echo "<td><b>constituency</b></td>";								
								echo "</tr>";
								$query = ("SELECT fname, sname,mName, candidate_id, sex, constituency
								 FROM citizen, monitor
WHERE citizen.citizen_id= monitor.citizen_id AND citizen.sex='F' AND citizen.citizen_id IN (SELECT citizen_id 
 FROM monitor WHERE  polling_centre_name IN(SELECT polling_centre_name FROM
	polling_centre WHERE ward_name IN(SELECT ward_name FROM ward WHERE 
		constituency_name IN(SELECT constituency_name FROM constituency WHERE district_code='BT'))))"
  );
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
									echo "<td>".$row['mName']."</td>";
									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['sex']."</td>";
									echo "<td>".$row['constituency']."</td>";									
									echo "</tr>";
								}
						echo "</table>		
							 </td>";
							 
								
						echo "</tr>";
                        					
				?>
			</tbody>
		</table>
        
                <div class="form-group" id="back">
                <button><a href="allMomitorsForBT.php" class="btn btn-primary btn-lg btn-danger pull-right " >back</a>
                </button></div>
	</body>
</html>