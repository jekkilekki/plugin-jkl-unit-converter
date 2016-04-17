<?php
/*
 * =================================================================================
 *
 * TEMPERATURE conversions
 * Use CELSIUS as common unit - convert ALL to Celsius, then convert to specified unit
 *
 * =================================================================================
 */
function x_to_celsius( $value, $from_unit ) {
    switch( $from_unit ) {
        case 'celsius': return $value; break;
        case 'fahrenheit': return ( $value - 32 ) / 1.8; break;
        case 'kelvin': return $value - 273.15;
        default: return 'Unsupported unit.';          
    }
}

function x_from_celsius( $value, $to_unit ) {
    switch( $to_unit ) {
        case 'celsius': return $value; break;
        case 'fahrenheit': return ( $value * 1.8 ) + 32; break;
        case 'kelvin': return $value + 273.15;
        default: return 'Unsupported unit.';          
    }
}

function convert_temperature( $value, $from_unit, $to_unit ) {
    $temp_value = x_to_celsius( $value, $from_unit );
    $new_value = x_from_celsius( $temp_value, $to_unit );
    return $new_value;
}