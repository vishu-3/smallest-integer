<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
#############################
/*
Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
*/
#############################
function solution($A){
    $B = [];
    $c;
    sort($A);
    foreach ($A as $key => $value){
    	$B[$key] = $value;
    }
    for($i=0;$i<=count($B)-1;$i++){
		if($B[$i]<0){
			$c = 1;
			// continue;
		}else{
			if(in_array($B[$i]+1 , $B))
			{
				continue;
			}else{
				$c = $B[$i]+1;
				break;
			}
		}	
    }
    return $c;
    // exit;
    
}

print solution([1,3,6,4,1,2]);