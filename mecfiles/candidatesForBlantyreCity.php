<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>list of all monitors</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">MPs, councilors and presidents for blantyre city</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>first name</b></td>";
								echo "<td><b>surname name</b></td>";
								echo "<td><b>party</b></td>";
								echo "<td><b>position</b></td>";
								echo "<td><b>represent</b></td>";
								echo "<td><b>votes</b></td>";
															
								echo "</tr>";
								$query = ("SELECT fname AS name, sname AS surname, party_code AS party, 
	position_name AS position, represent, (SELECT COUNT(candidate_id)
		FROM vote WHERE vote.candidate_id=K.candidate_id ) AS votes
	 FROM 
	citizen c, candidate k WHERE c.citizen_id = k.citizen_id AND ((represent IN
	( SELECT constituency_name FROM constituency WHERE 
		constituency_name IN('Blantyre-City-central','Blantyre-City-east')) OR represent IN
	(SELECT ward_name FROM ward WHERE constituency_name IN('Blantyre-City-central','Blantyre-City-east'))) OR represent=('Malawi'))
	ORDER BY represent, party_code

");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['surname']."</td>";	
									echo "<td>".$row['party']."</td>";
									
									echo "<td>".$row['position']."</td>";
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
	</body>
</html>