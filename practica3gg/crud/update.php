<?php
//include database configuration
include 'config.php';
//selecting records
$query=mysql_query("select id, firstname, lastname, username from users");
//count how many records found
$num=mysql_num_rows($query);
if($num>0){ //check if more than 0 record found
?>
<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Username</th>
<th>Action</th>
</tr>
<?php
//retrieve our table contents
while($row=mysql_fetch_array($query)){
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
<!--we will have the edit link here-->
<td>
<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
</td>
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
