<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=mysite", "root", "");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select userid, realname, lastloggedin, username, password "
       . "from users where username = ? and password = ?";
  $query = $db->prepare($sql);
  $query->execute(array($_POST['username'], $_POST['password']));
  $data = $query->fetchObject('user');
  if ($data != false) {
    echo $data;
  }
} catch (PDOException $e) {
  error_log("User unable to login: " . $e->getMessage());
}

class user
{
  // Columns from the database
  protected $userid = null;
  protected $realname = null;
  protected $lastloggedin = null;
  protected $username = null;
  protected $password = null;
  // Processed Data
  protected $transformed_lastloggedin = null

  public function __construct()
  {
    if ($this->lastloggedin != null) {
      $this->transformed_lastloggedin = date("H:i:s", strtotime($this->lastloggedin))
                             . " on " . date("d-M-Y" , strtotime($this->lastloggedin);
    }
  }

  public function toString()
  {
    echo "Hello {$this->realname}, your userid is {$this->userid} and "
       . "you last logged in at {$this->transformed_lastloggedin}";
  }
}
