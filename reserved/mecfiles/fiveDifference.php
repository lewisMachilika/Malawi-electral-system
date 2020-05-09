<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
$query="SELECT polling_centre_name, votes FROM
(SELECT polling_centre_name, COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' 
GROUP BY c.candidate_id, v.polling_centre_name) AS lvote
WHERE (votes-5)> SOME(SELECT COUNT(v.candidate_id) as votes 
FROM candidate c JOIN vote v ON c.candidate_id=v.candidate_id 
WHERE position_name = 'President' 
GROUP BY c.candidate_id, v.polling_centre_name)
";


// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>polling centre</b></td>
<td align="left"><b>votes</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['polling_centre_name'] . '</td><td align="left">' . 
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
