<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b6f4d0b0b38665";$this->pass="7b0f4a83";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_01e22a48e65ab89";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
