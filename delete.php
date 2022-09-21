<html>
<head>
<title>Delete Contact</title>
<link rel="stylesheet" type="text/css" href="/styles.css"/>
</head>
<body>

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

		$query="DELETE FROM contact_info WHERE ID='$_GET[id]'";

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Deleted Successfuly';
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
<br>
<div><a href="display.php">Return to all contacts</a></div>
</body>
</html>