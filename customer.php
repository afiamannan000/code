<?php
class SignUp {
  private $UserID;
  private $fname;
  private $lname;
    private $email;
	private $psw;

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }
}
?>
