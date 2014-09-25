<?php 

	require 'GetCsv.php';
	require 'PrintRecord.php';

	$fileName = 'test.csv';
	$parameter = 'r';
	$csv = new GetCsv();
	$records = $csv->getCsv($fileName, $parameter);
	
	new PrintRecord($records);


 ?>