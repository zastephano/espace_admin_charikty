<?php 


try {
		define('MY_HOST','localhost');
        define('MY_USER','cafigec_charikty');
        define('MY_PWD','pp=.Wt6BQ?ur');
        define('MY_DBNAME','cafigec_charikty');
        global $db;
        $db = new PDO('mysql:host='.MY_HOST.';dbname='.MY_DBNAME,MY_USER,MY_PWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
		
 ?>