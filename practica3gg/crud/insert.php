<html>
  <head>
    <title>Create - PHP CRUD</title>
  </head>
<body>
<?php
if(isset($_POST['save'])){
//include database configuration
include 'config.php';
extract($_REQUEST);
//sql insert statement
$query=mysql_query("insert into users SET firstname='$firstname', lastname='$lastname', username='$username', password='$password'") or die(mysql_error());
//insert query to the database
if($query){
//if successful query
echo "New record was saved.";
}
}
?>
<!--we have our html form here where user information will be entered-->
<form action='#' method='post' border='0'>
<table>
<tr>
<td>Firstname</td>
<td><input type='text' name='firstname' /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type='text' name='lastname' /></td>
</tr>
<tr>
<td>Username</td>
<td><input type='text' name='username' /></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='password' /></td>
<tr>
<td></td>
<td>
<input type='submit' value='Save' name="save" />
</td>
</tr>
</table>
</form>
</body>
</html>
