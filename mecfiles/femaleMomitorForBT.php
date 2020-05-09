<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>female monitors</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">female monitors for blantyre</th>
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
								WHERE sex='F' AND citizen.citizen_id= monitor.citizen_id AND citizen.citizen_id IN (SELECT citizen_id 
 FROM monitor WHERE candidate_id IN(SELECT candidate_id FROM
 	candidate WHERE party_code='independent') AND polling_centre_name IN(SELECT polling_centre_name FROM
	polling_centre WHERE ward_name IN(SELECT ward_name FROM ward WHERE 
		constituency_name IN('Blantyre-City-central','Blantyre-city-east'))))"
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
	</body>
</html>