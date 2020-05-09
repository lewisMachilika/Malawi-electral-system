<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>winnersList</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">list of councilor winners</th>
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
								echo "<td><b>postion name</b></td>";
								echo "<td><b>party</b></td>";
								echo "<td><b>represent</b></td>";

								echo "<td><b>votes</b></td>";
								echo "</tr>";
								$query = ("SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS derived))

union

SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Lilongwe-central')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='councilor')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Lilongwe-central')))
GROUP BY candidate_id) AS derived))

union

SELECT candidate.citizen_id, candidate.candidate_id, fname, sname, candidate.position_name,party_code,
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
	<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</html>