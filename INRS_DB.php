
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

/*
 * This extension to PDO reads an ini file (name hard-coded) "db_settings.ini".
 * The constuctor expects a section name (i.e. full DSN details etc).
 * 
 */


class INRS_PDO extends PDO
{
    //public function __construct($file = 'db_settings.ini')
    public function __construct($section)
    {
	
	$file="db_settings.ini";
        if (!$settings = parse_ini_file($file, TRUE)) {
	    throw new InvalidArgumentException('Unable to open ' . $file . '.');
	}
	//print_r($settings);
	if(!$settings[$section]) {
	    throw new InvalidArgumentException('No such ini section: ' . $settings[$section]);
	}

	$dn = $settings[$section]['driver']  .
        ':host=' . $settings[$section]['host'] .
        ((!empty($settings[$section]['port'])) ? (';port=' . $settings[$section]['port']) : '') .
        ';dbname=' . $settings[$section]['database'];
	
// debug
//var_dump($dn);
        parent::__construct($dn, $settings[$section]['username'], $settings[$section]['password'],array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}

?>


