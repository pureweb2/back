<?php
	mysql_connect('localhost','root','');
	mysql_select_db('majestic');
	$data = array_combine($_POST['HeadData'], $_POST['RowData']);
	$count = 0;
	$fields = '';
	foreach($data as $col => $val)
	{
		if ($count++ != 0) $fields .= ', ';
		$col = mysql_real_escape_string($col);
		$val = "'". mysql_real_escape_string($val) ."'";
		$fields .= "`$col` = $val";
	}

	$table = $_POST['Command'];
	$query = "INSERT INTO $table SET $fields;";
	if(mysql_query($query))
	{
		echo "true";
	}
	else
	{
		echo "false";
	}

	return true;
?>
