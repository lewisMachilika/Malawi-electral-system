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
#male{
    margin-top:-53px;
    margin-left:90px;
}
#female{
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
				<th colspan="5">all female candidates</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>citizen id</b></td>";
								echo "<td><b>candidate id</b></td>";
								echo "<td><b>first name</b></td>";
								echo "<td><b>surname</b></td>";
								echo "<td><b>gender</b></td>";
                                echo "<td><b>position</b></td>";
								echo "<td><b>party</b></td>";
								echo "<td><b>represent</b></td>";
								echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, sex, position_name,
party_code, represent, (SELECT COUNT(candidate_id)
		FROM vote WHERE vote.candidate_id=candidate.candidate_id ) AS votes FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id WHERE sex='F'
");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['citizen_id']."</td>";
									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
                                    echo "<td>".$row['sex']."</td>";
									echo "<td>".$row['position_name']."</td>";
									echo "<td>".$row['party_code']."</td>";
									echo "<td>".$row['represent']."</td>";
									echo "<td>".$row['votes']."</td>";					
									echo "</tr>";
								}
						echo "</table>		
							 </td>";
							 
								
						echo "</tr>";
					
				?>
			</tbody>
		</table>
		 <div class="form-group" id="all">
                <button><a href="viewAllCandidate.php" class="btn btn-primary btn-lg btn-danger pull-right " >all</a></button>
                </div>
                <div class="form-group" id="male">
                <button><a href="viewAllMaleCandidate.php" class="btn btn-primary btn-lg btn-danger pull-right " >male candidates</a>
                </button></div>
                <div class="form-group" id="female">
                <button>
    	        <a href="viewAllFemaleCandidate.php" class="btn btn-primary btn-lg btn-danger pull-right " >female candidate</a>
                </button></div>
                <div class="form-group" id="back">
                <button><a href="../mecWebPage.html" class="btn btn-primary btn-lg btn-danger pull-right " >back</a>
                </button></div>
	</body>
</html>