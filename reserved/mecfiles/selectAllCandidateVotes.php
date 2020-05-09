<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
$query="
SELECT v.candidate_id, fname, sname, v.polling_centre_name, 
c.position_name, 
c.party_code, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON 
c.candidate_id=v.candidate_id
JOIN citizen ON citizen.citizen_id= c.citizen_id
GROUP BY c.candidate_id, v.polling_centre_name, c.position_name, 
c.party_code
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
<td align="left"><b>polling centre name</b></td>
<td align="left"><b>position name</b></td>
<td align="left"><b>party_code</b></td>
<td align="left"><b>votes</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['candidate_id'] . '</td><td align="left">' . 
$row['fname'] . '</td><td align="left">' . 
$row['sname'] . '</td><td align="left">' . 
$row['polling_centre_name'] . '</td><td align="left">' .
$row['position_name'] . '</td><td align="left">' .
$row['party_code'] . '</td><td align="left">' .
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
