<?php

$filename="D:\Data\\factbook"; 
$filename1="D:\Data\\factbook1";  
$fp= fopen($filename, "r");
$fp= fopen($filename1, "r");
$contents= fread($fp, filesize($filename));
$contents1= fread($fp, filesize($filename1));
print_r ($contents);
$row = str_getcsv($contents, "\n");
$length = count($row);
$data=[];
for($i=0;$i<$length;$i++) {
	array_push($data,str_getcsv($row[$i], ",")[0]);
 $data = str_getcsv($row[$i], ",");
 $len=count($data);
$arr=(str_replace(";",",",$data));
$imp=implode($arr);
}
print_r($imp);
 $result=array_unique($data);
$myfile = fopen("abi4.csv", "w");
foreach ($result as $result) {
fputcsv($fp, $fields);
$joinFiles=(array('factbook.csv', 'factbook2.csv'), 'abi4.csv');
sort($joinFiles);
}
fclose($fp);


?>