<?php

   class Session{
	 public static function init(){
	 	session_start();
	 }
	 
	 public static function set($key, $val){
	 	$_SESSION[$key] = $val;
	 }

	 public static function get($key){
	 	if (isset($_SESSION[$key])) {
	 		return $_SESSION[$key];
	 	} else {
	 		return false;
	 	}
	 }
	  public static function checkLogin(){
	 	self::init();
	 	if (self::get("login") == true) {
	 		header("Location:index.php");
	 	}
	 }
	 public static function checkUserSession(){
	 	self::init();
	 	//if (self::get("login") == false) {
	 		//header("Location:stulogin.php");
	 	//}
	 }
	 public static function destroy(){
	 	session_destroy();
	 	session_unset();
	 }
}

?>