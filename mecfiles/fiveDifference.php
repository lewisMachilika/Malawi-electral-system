<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>five vote difference</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">polling centres with 5 difference votes of candidates</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>polling centre name</b></td>";
								echo "<td><b>votes</b></td>";
															
								echo "</tr>";
								$query = ("SELECT polling_centre_name, votes FROM
(SELECT polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern')))
GROUP BY c.candidate_id, v.polling_centre_name) AS lvote
WHERE (votes-5)> SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern')))
GROUP BY c.candidate_id, v.polling_centre_name) OR
(votes+5)< SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern')))
GROUP BY c.candidate_id, v.polling_centre_name)

union
SELECT polling_centre_name, votes FROM
(SELECT polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central')))
GROUP BY c.candidate_id, v.polling_centre_name) AS lvote
WHERE (votes-5)> SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central')))
GROUP BY c.candidate_id, v.polling_centre_name) OR
(votes+5)< SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='central')))
GROUP BY c.candidate_id, v.polling_centre_name)

union

SELECT polling_centre_name, votes FROM
(SELECT polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern')))
GROUP BY c.candidate_id, v.polling_centre_name) AS lvote
WHERE (votes-5)> SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern')))
GROUP BY c.candidate_id, v.polling_centre_name) OR
(votes+5)< SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' AND (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='southern')))
GROUP BY c.candidate_id, v.polling_centre_name)
"
  );
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
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