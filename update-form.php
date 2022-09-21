<html>
<head>
<title>Update Contact</title>
<link rel="stylesheet" type="text/css" href="/styles.css"/>
</head>
<h1>Update Contact</h1>
<body>

<?php
   $host='localhost';
   $user='root';
   $password= '';
   $dbname = "Telephone_Database";
   $conn = @mysqli_connect ( $host, $user, $pass ) ;
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }

mysqli_select_db ( $conn, $dbname);
$query = mysqli_query($conn, "SELECT * FROM `contact_info` WHERE `ID`=".$_GET['id']."");
$row = mysqli_fetch_assoc($query);
?>

<form name="frmUser" method="POST" action="update.php?id=<?php echo $row["ID"] ?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Contact Name...............:
<input type="text" name="contact_name" class="txtField" value="<?php echo $row['contact_name']; ?>">
<br>
Contact Profession.........:
<input type="text" name="contact_profession" class="txtField" value="<?php echo $row['contact_profession']; ?>">
<br>
Contact Tel Num............:
<input type="text" name="contact_Tel_number" class="txtField" value="<?php echo $row['contact_Tel_number']; ?>">
<br>
Contact Mobile Number...:
<input type="text" name="contact_mobile_number" class="txtField" value="<?php echo $row['contact_mobile_number']; ?>">
<br>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
<br>
<br>
<div><a href="display.php">Return to all contacts</a></div>
</body>
<img src="footer.png" alt="footer logo" style="width:100%;height:100px;position:absolute;bottom:0">
</html>


