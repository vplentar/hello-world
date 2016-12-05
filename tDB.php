<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<h1>Starting DB TEst</h1>
	<?php
	echo "ia m here</br>";
	require_once "DB_postgres.php";
	$dbh= new DB_postgres("vplentre", "5433","red098wine" , "t.stage2.inrs.com", "ssr2");
		//$t = $dbh->connect();
	// put your code here
	
	?>
	<h1>End tDB test1</h1>
    </body>
</html>
