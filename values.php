<?php

$con = mysql_connect("localhost","root","Pr!3t.pR@@t");

if (!$con) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db("chart", $con);

$result = mysql_query("SELECT * FROM `values`") or die ("Error");

while($row = mysql_fetch_array($result)) {
echo $row['month'] . "/" . $row['days']. "/" ;
}

mysql_close($con);
?>