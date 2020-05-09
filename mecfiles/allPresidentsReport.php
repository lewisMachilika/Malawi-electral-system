<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>view</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">president winner</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>citizen id id</b></td>";
                                echo "<td><b>candidate id</b></td>";
								echo "<td><b>first name</b></td>";
								echo "<td><b>surname</b></td>";
							
                                echo "<td><b>party</b></td>";
								echo "<td><b>represent</b></td>";
                                                                
                                echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("SELECT citizen_id, candidate_id, fname, sname,
party_code, represent, MAX(votes) AS maximum FROM(
SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, position_name,
party_code, represent, (SELECT COUNT(candidate_id) AS vID
		FROM vote WHERE vote.candidate_id=candidate.candidate_id AND 
		position_name='President' ) AS votes FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id
WHERE position_name='President') AS myTable
GROUP BY citizen_id, candidate_id, fname, sname, position_name,
party_code, represent
HAVING maximum=(SELECT  MAX(votes) AS maximum FROM(
SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, position_name,
party_code, represent, (SELECT COUNT(candidate_id) AS vID
		FROM vote WHERE vote.candidate_id=candidate.candidate_id AND 
		position_name='President' ) AS votes FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id
WHERE position_name='President') AS myTable)

");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['citizen_id']."</td>";
                                    echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
									
                                    echo "<td>".$row['party_code']."</td>";
									echo "<td>".$row['represent']."</td>";
                                    echo "<td>".$row['maximum']."</td>";							
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