<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=mysite", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select userid, realname, lastloggedin from users where username = ? and password = ?";
  $query = $db->prepare($sql);
  $query->execute(array($_POST['username'], $_POST['password']));
  $data = $query->fetch();
  if ($data != false) {
    echo "Hello {$data['realname']}, your userid is {$data['userid']} and "
       . "you last logged in at " . date("H:i:s", strtotime($data['lastloggedin']))
       . " on " . date("d-M-Y" , strtotime($data['lastloggedin']));
  }
} catch (PDOException $e) {
  error_log("User unable to login: " . $e->getMessage());
}
