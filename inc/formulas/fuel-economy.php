<?php
/*
 * =================================================================================
 *
 * FUEL ECONOMY conversions
 * Use KM/L as common unit - convert ALL to km/l, then convert to specified unit
 *
 * =================================================================================
 */

// http://www.had2know.com/automotive/fuel-economy-calculator.html  

function x_to_kmpl( $value, $from_unit ) {
    switch( $from_unit ) {
        case 'kilometers_per_liter': return $value; break;
        case 'us_miles_per_gallon': return $value * 0.425143707; break;
        case 'imperial_miles_per_gallon': return $value * 0.35400604; break;
        case 'liters_per_100_kilometers': return 100 * $value; break;
        default: return 'Unsupported unit.';
    }
}

function x_from_kmpl( $value, $to_unit ) {
    switch( $to_unit ) {
        case 'kilometers_per_liter': return $value; break;
        case 'us_miles_per_gallon': return $value * 2.352145836; break;
        case 'imperial_miles_per_gallon': return $value * 2.824810534; break;
        case 'liters_per_100_kilometers': return 100 / $value; break;
        default: return 'Unsupported unit.';
    }
}

function convert_fuel_economy( $value, $from_unit, $to_unit ) {
    $fuel_value = x_to_kmpl( $value, $from_unit );
    $new_value = x_from_kmpl( $fuel_value, $to_unit );
    return $new_value;
}