<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>monitors</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">central monitors</th>
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
ON citizen.citizen_id=monitor.citizen_id
WHERE citizen.region='southern'");
								
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
	</body>
</html>