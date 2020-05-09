<?php
require_once('../mysqli_mec_connect.php');
?>
<html>
	<head>
		<title>view</title>
	</head>
	<body>
		<table border="0">
			<thead>
				<th colspan="5">select all parties</th>
			</thead>
			<tbody>
				<?php
					
						echo "<tr>";
						echo "<td>
							  <table border='1'>";
								echo "<tr>";
								echo "<td><b>party code</b></td>";
								echo "<td><b>party name</b></td>";
								echo "<td><b>party colour</b></td>";
								echo "</tr>";
								$query = ("SELECT party_code, party_name, party_colour FROM party
");
								
									$response = @mysqli_query($dbc, $query);
								while($row = mysqli_fetch_array($response)) {
									echo "<tr>";
									echo "<td>".$row['party_code']."</td>";
									echo "<td>".$row['party_name']."</td>";
									echo "<td>".$row['party_colour']."</td>";					
									echo "</tr>";
								}
						echo "</table>		
							 </td>";
							 
								
						echo "</tr>";
					
				?>
			</tbody>
		</table>
	</body>
</html>