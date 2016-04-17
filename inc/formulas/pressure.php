<?php
/*
 * =================================================================================
 *
 * PRESSURE conversions
 * Use PASCALS as common unit - convert ALL to pascals, then convert to specified unit
 *
 * =================================================================================
 */
$pressure_to_pascal = array(
    'atmospheres'               => 101325,
    //'barries'                   => ,
    'bars'                      => 100000,
    'inches_of_mercury'         => 3386.39,
    'inches_of_water'           => 248.84,
    'millibars'                 => 100,
    'millimeters_of_mercury'    => 133.322,
    'pascals'                   => 1,
    'hectopascals'              => 100,
    'kilopascals'               => 1000,
    //'poises'                    => ,
    'pounds_per_square_inch'    => 6894.76,
    'torrs'                     => 133.322,
);

function x_to_pascals( $value, $from_unit ) {
    global $pressure_to_pascal;
    if( array_key_exists( $from_unit, $pressure_to_pascal ) ) {
        return $value * $pressure_to_pascal[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_pascals( $value, $to_unit ) {
    global $pressure_to_pascal;
    if( array_key_exists( $to_unit, $pressure_to_pascal ) ) {
        return $value / $pressure_to_pascal[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_pressure( $value, $from_unit, $to_unit ) {
    $pascal_value = x_to_pascals( $value, $from_unit );
    $new_value = x_from_pascals( $pascal_value, $to_unit );
    return $new_value;
}