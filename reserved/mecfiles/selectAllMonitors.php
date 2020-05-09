<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database
$query = "SELECT party_code, party_name, party_colour FROM party";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>party_code</b></td>
<td align="left"><b>party_name</b></td>
<td align="left"><b>party_colour</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['party_code'] . '</td><td align="left">' . 
$row['party_name'] . '</td><td align="left">' .
$row['party_colour'] . '</td><td align="left">' .
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
