<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
$query="SELECT citizen.citizen_id, candidate.candidate_id, fname, sname, position_name,
party_code, represent FROM candidate LEFT JOIN citizen
ON citizen.citizen_id=Candidate.citizen_id WHERE (represent
IN (SELECT ward_name FROM ward WHERE constituency_name 
IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern'))))
OR
(represent IN(SELECT constituency_name FROM constituency WHERE district_code
IN(SELECT district_code FROM district WHERE region_name='northern')))
";


// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>citizen id</b></td>
<td align="left"><b>candidate id</b></td>
<td align="left"><b>first name</b></td>
<td align="left"><b>surname</b></td>
<td align="left"><b>position</b></td>
<td align="left"><b>party</b></td>
<td align="left"><b>represent</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['citizen_id'] . '</td><td align="left">' . 
$row['candidate_id'] . '</td><td align="left">' . 
$row['fname'] . '</td><td align="left">' .
$row['sname'] . '</td><td align="left">' .
$row['position_name'] . '</td><td align="left">' .
$row['party_code'] . '</td><td align="left">' .
$row['represent'] . '</td><td align="left">' .
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
