<?php 
ini_set('memory_limit', '256M');
	$time_start = microtime(true); 
	for($i=1; $i<=500000; $i++){
	  $data[$i]['name'] ='Aman_'.$i;
	  $data[$i]['email'] ='aman_'.$i.'@gmail.com';
	}

	//print_r($data);

	$time_end = microtime(true);
	$execution_time = ($time_end - $time_start)/60;
	echo "<br>";
	echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';
?>