<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database
$query="SELECT fname AS name, sname AS surname, party_code AS party, 
position_name AS position, represent FROM citizen c, candidate k WHERE 
c.citizen_id = k.citizen_id AND position_name IN('MP','councilor')
 AND (represent =
( SELECT constituency_name FROM constituency WHERE 
	constituency_name='Blantyre-City-central') OR represent =
(SELECT ward_name FROM ward WHERE constituency_name='Blantyre-City-central'))

ORDER BY represent, party_code";

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
<td align="left"><b>postion</b></td>
<td align="left"><b>represent(constituency/ward)</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['name'] . '</td><td align="left">' .
$row['surname'] . '</td><td align="left">' .
$row['party'] . '</td><td align="left">' .
$row['position'] . '</td><td align="left">' .
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
