<?php

class Connect{

	static public function connection(){

		$link = new PDO("mysql:host=localhost;dbname=crud",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}
