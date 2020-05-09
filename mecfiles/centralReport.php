<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>VIEW</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">people from central voted for central members</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>region</b></td>";
								echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("SELECT region, COUNT(DISTINCT v.citizen_id) AS votes FROM vote v JOIN citizen ci ON v.citizen_id=ci.citizen_id
 WHERE (ci.citizen_id IN(SELECT citizen_id FROM citizen WHERE 
 	constituency IN(SELECT constituency_name FROM constituency
 	 WHERE district_code IN(SELECT district_code FROM 
 	 		district WHERE region_name=(SELECT region_name FROM region
 	 		 WHERE region_name='central'))))) AND region='central' AND
 (v.polling_centre_name IN (SELECT polling_centre_name 
 	FROM polling_centre WHERE ward_name IN(SELECT ward_name
 	 FROM ward WHERE constituency_name IN(SELECT constituency_name FROM
 	 	constituency WHERE district_code IN(SELECT district_code FROM 
 	 		district WHERE region_name=(SELECT region_name FROM region
 	 		 WHERE region_name='central'))))))
  GROUP BY region");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['region']."</td>";
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