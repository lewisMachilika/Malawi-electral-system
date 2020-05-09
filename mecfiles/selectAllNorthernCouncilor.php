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
				<th colspan="5">Northern councilors results</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>candidate id</b></td>";
								echo "<td><b>first name</b></td>";
								echo "<td><b>surname</b></td>";
								echo "<td><b>party</b></td>";
								echo "<td><b>polling centre name</b></td>";
								echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("SELECT c.candidate_id, citizen.fname,citizen.sname,c.party_code, v.polling_centre_name,
COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
JOIN citizen ON c.citizen_id=citizen.citizen_id
WHERE position_name = 'councilor' AND v.polling_centre_name IN(SELECT
polling_centre_name FROM polling_centre WHERE ward_name IN(SELECT ward_name
FROM ward WHERE constituency_name IN(SELECT constituency_name FROM 
	constituency WHERE district_code IN(SELECT district_code FROM district 
	WHERE region_name='northern'))))
GROUP BY c.candidate_id, v.polling_centre_name

");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['sname']."</td>";
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