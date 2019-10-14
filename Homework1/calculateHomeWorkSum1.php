<?php

//namespace \; ???

class Root
{

	function calculateHomeWorkSum(...$numbers) {
    $sum = 0;
    	foreach ($numbers as $n) {
        	$sum += $n;
    	}
    	return $sum;
	}
}

?>