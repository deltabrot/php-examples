<?php

/**
 * Calculates the distance between two points.
 *
 * @param float $x1 The x coordinate of the first point.
 * @param float $y1 The y coordinate of the first point.
 * @param float $x2 The x coordinate of the second point.
 * @param float $y2 The y coordinate of the second point.
 *
 * @return float The distance between the two points.
 */
function calculateDistance(float $x1, float $y1, float $x2, float $y2) {
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

/**
 * Calculates the point exactly half way between two points.
 *
 * @param float $x1 The x coordinate of the first point.
 * @param float $y1 The y coordinate of the first point.
 * @param float $x2 The x coordinate of the second point.
 * @param float $y2 The y coordinate of the second point.
 *
 * @return float[] The point between the two passed points.
 */
function calculateMidpoint(float $x1, float $y1, float $x2, float $y2) {
    return [($x2 + $x1) / 2, ($y2 + $y1) / 2];
}

// Calculate a distance and midpoint, and store the returned result in a
// variable.
$distance = calculateDistance(3, 3, -2, -1);
$midpoint = calculateMidpoint(3, 3, -2, -1);

// Print the calculated distance and midpoint.
echo "distance: $distance\nmidpoint: [$midpoint[0], $midpoint[1]]";
