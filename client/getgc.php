<?php
//This is required to get the international text strings dictionary
require_once 'internationalize.php';

require_once 'db_config.php';


// get data and store in a json array
$query = "SELECT * FROM generalcategorycv";
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
$variables[] = array(
        //'dtterm' => "Select...",
		'dtterm' => $SelectEllipsis,
        'dtdef' => "-1" );

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
		$variables[] = array(
        'dtterm' => $row['Term'],
        'dtdef' => $row['Definition']);

}


echo json_encode($variables);
?>