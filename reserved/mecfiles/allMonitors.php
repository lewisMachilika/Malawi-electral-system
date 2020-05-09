<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
 $query="SELECT monitor.citizen_id, fname, sname, monitor.candidate_id,
monitor.polling_centre_name AS pollingCentre FROM monitor JOIN citizen
ON citizen.citizen_id=monitor.citizen_id
";
// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center" style="tr:nth-child(even) {
    background-color: #dddddd;
}"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>citizen id</b></td>
<td align="left"><b>first name</b></td>
<td align="left"><b>surname</b></td>
<td align="left"><b>candidate id</b></td>
<td align="left"><b>polling centre</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="center">' . 
$row['citizen_id'] . '</td><td align="left">' . 
$row['fname'] . '</td><td align="left">' . 
$row['sname'] . '</td><td align="left">' . 
$row['candidate_id'] . '</td><td align="left">' .
$row['pollingCentre'] . '</td><td align="left">' .
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
