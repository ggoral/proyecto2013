<?php
//include database configuration
include 'config.php';
//selecting records
$sql="select firstname, lastname, username from users";
//query the database
$rs=mysql_query($sql) or die($sql.">>".mysql_error());
//count how many records found
$num=mysql_num_rows($rs);
if($num>0){ //check if more than 0 record found
?>
<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Username</th>
</tr>
<?php
//retrieve our table contents
while($row=mysql_fetch_array($rs)){
//extract row
//this will make $row['firstname'] to
//just $firstname only
extract($row);
//creating new table row per record
?>
<tr>
<td><?php echo $firstname; ?></td>
<td><?php echo $lastname; ?></td>
<td><?php echo $username; ?></td>
</tr>
<?php
}
?>
</table>
<?php
}else{ //if no records found
echo "No records found.";
}
?>
