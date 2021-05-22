<?php

function calculateDistance($x1, $y1, $x2, $y2, $showOutput) {
    $xSquared = pow($x2 - $x1, 2);
    $ySquared = pow($y2 - $y1, 2);

    if ($showOutput == true) {
        echo "x^2 = ".$xSquared." y^2 = ".$ySquared."\n";
    }

    $result = sqrt($xSquared + $ySquared);

    if ($showOutput == true) {
        echo "distance between [".$x1.", ".$y1."] and [".$x2.", ".$y2."] = ".$result."\n";
    }

    if ($result > 10) {
        if ($showOutput == true) {
            echo "That's really far!\n";
        }
        return $result;
    } else {
        return $result;
    }
}

$x = calculateDistance(3, 3, -2, -1, true);

echo "$x\n";

$y = calculateDistance(13, -2, -20, -1, false);

echo $y;
