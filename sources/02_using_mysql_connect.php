<?php
mysql_connect("localhost", "root", "");
mysql_use_db("mysite");
$sql = "select userid, realname, lastloggedin from users "
     . "where username = '" . mysql_real_escape_string($_POST['username'])
     . "' and password = '" . mysql_real_escape_string($_POST['password']) . "'";
$query = mysql_query($sql);
$data = false;
if (mysql_num_rows($query) == 1) {
  $data = mysql_fetch_array($query);
  echo "Hello {$data['realname']}, your userid is {$data['userid']} and "
     . "you last logged in at " . date("H:i:s", strtotime($data['lastloggedin']))
     . " on " . date("d-M-Y" , strtotime($data['lastloggedin']));
}
