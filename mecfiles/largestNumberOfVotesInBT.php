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
				<th colspan="5">largest number of votes in Blantyre</th>
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
								echo "<td><b>position name</b></td>";
								echo "<td><b>represent</b></td>";
								echo "<td><b>votes</b></td>";
															
								echo "</tr>";
								$query = ("SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-central')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-central')))
GROUP BY candidate_id) AS derived))

union

SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-central')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-central')))
GROUP BY candidate_id) AS derived))

union
#councilor list from blantyre city east
SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-rural')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-rural')))
GROUP BY candidate_id) AS derived))
union
SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-rural')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-rural')))
GROUP BY candidate_id) AS derived))

union
#councilor list from blantyre city east
SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-east')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-east')))
GROUP BY candidate_id) AS derived))
union
#mp candidate for blantyre city east
SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-east')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Blantyre-City-east')))
GROUP BY candidate_id) AS derived))

#president list
union
#selec maximum votes from the south
SELECT citizen_id, candidate_id, fname, sname, position_name,
party_code, represent, MAX(votes) AS maximum FROM(
SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, position_name,
party_code, represent, (SELECT COUNT(candidate_id) AS vID
		FROM vote WHERE vote.candidate_id=candidate.candidate_id AND 
		position_name='President' AND (vote.polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
			WHERE ward_name IN (SELECT ward_name FROM ward WHERE constituency_name IN (SELECT constituency_name
				FROM constituency WHERE district_code IN(SELECT district_code FROM district WHERE 
					region_name='southern')))))) AS votes FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id
WHERE position_name='President') AS myTable
GROUP BY citizen_id, candidate_id, fname, sname, position_name,
party_code, represent
HAVING maximum=(SELECT  MAX(votes) AS maximum FROM(
SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, position_name,
party_code, represent, (SELECT COUNT(candidate_id) AS vID
		FROM vote WHERE vote.candidate_id=candidate.candidate_id AND 
		position_name='President' AND (vote.polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
			WHERE ward_name IN (SELECT ward_name FROM ward WHERE constituency_name IN (SELECT constituency_name
				FROM constituency WHERE district_code IN(SELECT district_code FROM district WHERE 
					region_name='southern')))))
) AS votes FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id
WHERE position_name='President') AS myTable)
"
  );
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['candidate_id']."</td>";
									echo "<td>".$row['fname']."</td>";	
									echo "<td>".$row['sname']."</td>";
									
									echo "<td>".$row['position_name']."</td>";
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