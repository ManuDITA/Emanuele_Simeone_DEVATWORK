<?php
// Enter your code here, enjoy!
function groupRanges($input) {
    $numbers = explode(" ", $input);
    $result = "";
    $start = $numbers[0];
    $end = $numbers[0];

    for ($i = 1; $i < count($numbers); $i++) {
    	
    	// check if current number is consecutive to the previous one
        if ($numbers[$i] == $end + 1) {
        	//if it is, extend the range
            $end = $numbers[$i];
        } else {
        	
        	//numbers are not consecutive, create the string and append it to the output $result
            if ($start == $end) {
                $result .= "$start, ";
            } else {
                $result .= "$start-$end, ";
            }
            
            //new range
            $start = $end = $numbers[$i];
        }
    }

	//check the last range that has not been checked in the for cycle
    if ($start == $end) {
        $result .= "$start";
    } else {
        $result .= "$start-$end";
    }

    return $result;
}

$input = "1 2 6 7 8";
$result = groupRanges($input);
echo $result;
