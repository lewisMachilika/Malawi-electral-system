<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>viewAllCandidates</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">all candidates' votes</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								
								echo "<td><b>citizen id</b></td>";
								echo "<td><b>candidate id</b></td>";
								echo "<td><b>fname</b></td>";
								echo "<td><b>sname</b></td>";
								
								echo "<td><b>position</b></td>";
								echo "<td><b>party</b></td>";
								echo "<td><b>represent</b></td>";
								echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("#listing all president votes
SELECT c.citizen_id,c.candidate_id, citizen.fname,citizen.sname, c.position_name, c.party_code,v.polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
JOIN citizen ON c.citizen_id=citizen.citizen_id
WHERE position_name = 'President' 
GROUP BY c.candidate_id, v.polling_centre_name
#list all MP votes
union
SELECT c.citizen_id, c.candidate_id, citizen.fname,citizen.sname, c.position_name, c.party_code,v.polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
JOIN citizen ON c.citizen_id=citizen.citizen_id
WHERE position_name = 'MP' 
GROUP BY c.candidate_id, v.polling_centre_name
#concilor votes
union
SELECT c.citizen_id,c.candidate_id, citizen.fname,citizen.sname, c.position_name, c.party_code, v.polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
JOIN citizen ON c.citizen_id=citizen.citizen_id
WHERE position_name = 'councilor' 
GROUP BY c.candidate_id, v.polling_centre_name

");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									
									echo "<td>".$row['citizen_id']."</td>";

									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
									
									echo "<td>".$row['position_name']."</td>";
									echo "<td>".$row['party_code']."</td>";
									echo "<td>".$row['polling_centre_name']."</td>";
									
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