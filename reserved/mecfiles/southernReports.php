<?php
// Get a connection for the database
require_once('../mysqli_mec_connect.php');

// Create a query for the database#listing all winners
$query="SELECT region, COUNT(*) AS votes FROM vote v JOIN citizen ci ON v.citizen_id=ci.citizen_id
 WHERE (ci.citizen_id IN(SELECT citizen_id FROM citizen WHERE 
 	constituency IN(SELECT constituency_name FROM constituency
 	 WHERE district_code IN(SELECT district_code FROM 
 	 		district WHERE region_name=(SELECT region_name FROM region
 	 		 WHERE region_name='southern'))))) AND region='southern' AND
 (v.polling_centre_name IN (SELECT polling_centre_name 
 	FROM polling_centre WHERE ward_name IN(SELECT ward_name
 	 FROM ward WHERE constituency_name IN(SELECT constituency_name FROM
 	 	constituency WHERE district_code IN(SELECT district_code FROM 
 	 		district WHERE region_name=(SELECT region_name FROM region
 	 		 WHERE region_name='southern'))))))
  GROUP BY region
  ";


// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="center"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>region</b></td>
<td align="left"><b>votesForNothernFromNothern</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['region'] . '</td><td align="left">' . 
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
