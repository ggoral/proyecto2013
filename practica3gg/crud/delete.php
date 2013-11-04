<html>
<head>
<title>Delete Record</title>
</head>
<body>
<?php
//include database configuration
include 'config.php';
//check if an action was set, we use GET this time since we get the action data from the url
isset($_GET['action']) ? $action=$_GET['action'] : $action="";
if($action=='delete'){ //if the user clicked ok, run our delete query
$id=$_REQUEST['id'];
$query = mysql_query("DELETE FROM users WHERE id='$id'") or die(mysql_error());
if($query){
//this will be displayed when the query was successful
echo "<div>Record was deleted.</div>";
}
}
//selecting records
$query2=mysql_query("select * from users") or die(mysql_error());
//count how many records found
$num=mysql_num_rows($query2);
if($num>0){ //check if more than 0 record found
echo "<table border='1'>";//start table
//creating our table heading
echo "<tr>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
echo "<th>Username</th>";
echo "<th>Action</th>"; //we're gonna add this column for delete action
echo "</tr>";
//retrieve our table contents
while($row=mysql_fetch_array($query2)){
//extract row
//this will make $row['firstname'] to
//just $firstname only
extract($row);
//creating new table row per record
echo "<tr>";
echo "<td>{$firstname}</td>";
echo "<td>{$lastname}</td>";
echo "<td>{$username}</td>";
//we will have the delete link here, you can also put your edit link here, but for this tutorial we will ust include the delete link
echo "<td>";
echo "<a hre='#' onclick='delete_user( {$id} );'>Delete</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";//end table
}else{ //if no records found
echo "No records found.";
}
?>
<script type='text/javascript'>
function delete_user( id ){
//this script helps us to
var answer = confirm('Are you sure?');
if ( answer ){ //if user clicked ok
//redirect to url with action as delete and id to the record to be deleted
window.location = 'index.php?action=delete&id=' + id;
}
}
</script>
</body>
</html>
