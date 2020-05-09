<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>list of all monitors</title>
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
    margin-top:-53px;
    margin-left:420px;
}

</style>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">list of all female monitors</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>citzen_id</b></td>";
								echo "<td><b>f name</b></td>";
								echo "<td><b>sname</b></td>";
								echo "<td><b>candidate_id</b></td>";
								echo "<td><b>polling centre</b></td>";
								echo "</tr>";
								$query = ("SELECT monitor.citizen_id, fname, sname, monitor.candidate_id,
									monitor.polling_centre_name AS pollingCentre FROM monitor JOIN citizen
									ON citizen.citizen_id=monitor.citizen_id where sex='F'");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['citizen_id']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['pollingCentre']."</td>";
									echo "</tr>";
								}
						echo "</table>		
							 </td>";
							 
								
						echo "</tr>";
					
				?>
			</tbody>
		</table>
		
                <div class="form-group" id="all">
                <button><a href="allMonitors.php" class="btn btn-primary btn-lg btn-danger pull-right " >all</a></button>
                </div>
                <div class="form-group" id="maleMonitor">
                <button><a href="allMaleMonitors.php" class="btn btn-primary btn-lg btn-danger pull-right " >male monitors</a>
                </button></div>
                <div class="form-group" id="femaleMonitor">
                <button>
    	        <a href="allFemaleMonitors.php" class="btn btn-primary btn-lg btn-danger pull-right " >female monitors</a>
                </button></div>
                <div class="form-group" id="back">
                <button><a href="../mecWebPage.html" class="btn btn-primary btn-lg btn-danger pull-right " >back</a>
                </button></div>
	</body>
</html>