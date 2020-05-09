<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
$query="SELECT candidate.candidate_id, fname, sname, candidate.position_name,
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

SELECT candidate.candidate_id, fname, sname, candidate.position_name,
represent, Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='MP')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS derived))

union
SELECT candidate.candidate_id, fname, sname, candidate.position_name,
'Mzuzu City',
		 Blantyre AS votes FROM (SELECT candidate_id, COUNT(*) AS
  Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='President')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS getID JOIN candidate ON 
getID.candidate_id=candidate.candidate_id JOIN citizen ON
citizen.citizen_id=candidate.citizen_id
WHERE Blantyre =(
SELECT  MAX(Blantyre) AS southernMP FROM((
SELECT candidate_id AS myId, COUNT(*) AS Blantyre FROM vote WHERE polling_centre_name IN(SELECT polling_centre_name FROM polling_centre
WHERE (candidate_id IN(SELECT candidate_id FROM Candidate WHERE
position_name='President')) AND
(ward_name IN(SELECT ward_name FROM ward WHERE constituency_name
='Mzuzu City')))
GROUP BY candidate_id) AS derived))
";


// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>candidate id</b></td>
<td align="left"><b>first name</b></td>
<td align="left"><b>surname</b></td>
<td align="left"><b>position</b></td>
<td align="left"><b>represent</b></td>
<td align="left"><b>total votes</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['candidate_id'] . '</td><td align="left">' . 
$row['fname'] . '</td><td align="left">' .
$row['sname'] . '</td><td align="left">' .
$row['position_name'] . '</td><td align="left">' .
$row['represent'] . '</td><td align="left">' .
$row['votes'] . '</td><td align="left">' .
 '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
