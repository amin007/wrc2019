<?php
#sumber
#http://significanttechno.com/export-table-data-to-excel-using-php-and-mysql-without-plugin
#############################################################################################################
include '../../../tatarajah.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
#############################################################################################################

#------------------------------------------------------------------------------------------
	$myTable = dpt_senarai('masco');
	$query = mysqli_query($conn, 'SELECT * FROM ' . $myTable[4] );#Get data from Database from demo table
	$delimiter = ",";
	$filename = 'fail_' . date('Ymd') . '.csv';#Create file name

	#create a file pointer
	$f = fopen('php://memory', 'w');

	#set column headers
	$fields = array('kod1', 'kod2', 'kod3', 'keterangan', 'catatan');
	fputcsv($f, $fields, $delimiter);

	#output each row of the data, format line as csv and write to file pointer
	while($row = $query->fetch_assoc())
	{
		$lineData = array($row['kod1'], $row['kod2'], $row['kod3'], $row['keterangan'], $row['catatan']);
		fputcsv($f, $lineData, $delimiter);
	}

	#move back to beginning of file
	fseek($f, 0);

	#set headers to download file rather than displayed
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '";');

	#output all remaining data on a file pointer
	fpassthru($f);
#------------------------------------------------------------------------------------------
