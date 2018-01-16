<?php
//Make a MySQL Connection
mysql_connect("localhost","root","Emp0r0s") or die(mysql_error());
mysql_select_db("Emporos") or die(mysql_error());

$result = mysql_query("SELECT * FROM wp_users WHERE user_role_id = 0")
or die(mysql_error());

//$row = mysql_fetch_array( $result );

//echo "Name: ".$row['user_nicename'];
//echo "Role: ".$row['user_role_id'];

while($row = mysql_fetch_array($result)){
//echo $row['name'].  $row['age'];
echo "<br/>";
echo "Name: ".$row['user_nicename'];
echo "Role: ".$row['user_role_id'];

}
?>
