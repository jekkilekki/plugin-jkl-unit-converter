<?php
/*
 * =================================================================================
 *
 * FREQUENCY conversions
 * Use HERTZ as common unit - convert ALL to hertz, then convert to specified unit
 *
 * =================================================================================
 */
global $freq_to_hertz;
$freq_to_hertz = array(
    'hertz'         => 1,    // * (pi() / 10800)
    'kilohertz'     => 1000,   // * (pi() / 648000)
    'megahertz'     => 1000000,
    'gigahertz'     => 1000000000,   // * (pi() / 180)
);

function x_to_hertz( $value, $from_unit ) {
    global $freq_to_hertz;
    if( array_key_exists( $from_unit, $freq_to_hertz ) ) {
        return $value * $freq_to_hertz[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_hertz( $value, $to_unit ) {
    global $freq_to_hertz;
    if( array_key_exists( $to_unit, $freq_to_hertz ) ) {
        return $value / $freq_to_hertz[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_frequency( $value, $from_unit, $to_unit ) {
    $h_value = x_to_hertz( $value, $from_unit );
    $new_value = x_from_hertz( $h_value, $to_unit );
    return $new_value;
}