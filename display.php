<html>
<head>
   <link rel="stylesheet" type="text/css" href="/styles.css"/>
</head> 
<body>
<h1>All Contacts</h1>

<?php
	// set your infomation.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'Telephone_Database';

	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );
		$sql = "SELECT * FROM `contact_info`";
		
		if ( @mysql_query ( $sql) )
		{
			$query = mysql_query ( $sql );

			$row = mysql_fetch_assoc ( $query ); ?>
			<table>
			
				<tr>
					<td><h4>Id No</h4></td>
					<td><h4>Contact Name</h4></td>
					<td><h4>Contact Profession</h4></td>
					<td><h4>Contact Tel Number</h4></td>
					<td><h4>Contact Mobile Number</h4></td>
					<td><h4> Update </h4></td>
					<td><h4> Delete </h4></td>
				</tr>
			
					<?php
					$i=0;
					while ( $row = mysql_fetch_assoc ( $query ) ) {
					?>
	
					<tr>
						<td><?php echo $row["ID"]; ?></td>
						<td><?php echo $row["contact_name"]; ?></td>
						<td><?php echo $row["contact_profession"]; ?></td>
						<td><?php echo $row["contact_Tel_number"]; ?></td>
						<td><?php echo $row["contact_mobile_number"]; ?></td>
						<td><a href="update-form.php?id=<?php echo $row["ID"]; ?>">Update</a></td>
						<td><a href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
					</tr>
					<?php
					$i++;
					}
					?>

					
			</table>
<?php
		}
		else {
				die ( mysql_error() );
		}	
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}			
?>

<br>
<div><a href="formInsert.html">Insert New contact</a></div>
</body>
<img src="footer.png" alt="footer logo" style="width:100%;height:100px;position:absolute;bottom:0">
</html>