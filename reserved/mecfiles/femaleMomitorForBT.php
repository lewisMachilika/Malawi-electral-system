<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database
$query = "SELECT fname, sname,mName, sex, constituency FROM citizen WHERE sex='F' AND citizen_id IN (SELECT citizen_id 
 FROM monitor WHERE candidate_id IN(SELECT candidate_id FROM
 	candidate WHERE party_code='independent') AND polling_centre_name =(SELECT polling_centre_name FROM
	polling_centre WHERE ward_name =(SELECT ward_name FROM ward WHERE 
		constituency_name='Blantyre-City-central')))";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>fname</b></td>
<td align="left"><b>mName</b></td>
<td align="left"><b>sname</b></td>
<td align="left"><b>sex</b></td>
<td align="left"><b>constituency</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['fname'] . '</td><td align="left">' . 
$row['mName'] . '</td><td align="left">' .
$row['sname'] . '</td><td align="left">' .
$row['sex'] . '</td><td align="left">' .
$row['constituency'] . '</td><td align="left">' .
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
