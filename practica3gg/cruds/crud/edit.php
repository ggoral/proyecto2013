<?php
if(isset($_REQUEST['id'])){
include('config.php');
if(isset($_REQUEST['edit'])){
extract($_REQUEST);
//update the record if the form was submitted
$query=mysql_query("update users set firstname='$firstname', lastname='$lastname', username='$username, password='$password' where id='$id'") or die(mysql_error());
if($query){
//this will be displayed when the query was successful
echo "<div>Record was edited.</div>";
}
}
$id=$_REQUEST['id'];
//this query will select the user data which is to be used to fill up the form
$query=mysql_query("select * from users where id='$id'") or die(mysql_error());
$num=mysql_num_rows($query);
//just a little validation, if a record was found, the form will be shown
//it means that there's an information to be edited
if($num>0){
$row=mysql_fetch_assoc($query);
extract($row);
?>
<!--we have our html form here where new user information will be entered-->
<form action='' method='post' border='0'>
<table>
<tr>
<td>Firstname</td>
<td><input type='text' name='firstname' value='<?php echo $firstname;  ?>' /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type='text' name='lastname' value='<?php echo $lastname;  ?>' /></td>
</tr>
<tr>
<td>Username</td>
<td><input type='text' name='username'  value='<?php echo $username;  ?>' /></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='password'  value='<?php echo $password;  ?>' /></td>
<tr>
<td></td>
<td>
<!-- so that we could identify what record is to be updated -->
<input type='hidden' name='id' value='<?php echo $id ?>' />
<!-- we will set the action to edit -->
<input type='submit' value='Edit' name="edit" />
</td>
</tr>
</table>
</form>
<?php
}else{
echo "<div>User with this id is not found.</div>";
}
}
else{
echo "<div> You are not authorized to view this page";
}
echo "<a href='index.php'>Back To List</a>";
?>
