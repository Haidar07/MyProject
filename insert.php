<html>
<head>
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

		$query="INSERT INTO contact_info (contact_name, contact_profession, contact_Tel_number, contact_mobile_number)
			VALUES
			('$_POST[contact_name]','$_POST[contact_profession]','$_POST[contact_Tel_number]','$_POST[contact_mobile_number]')";

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Added Successfuly';
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
<div><a href="display.php">Show all contacts</a></div>
</body>

</html>