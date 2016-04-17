<?php
/*
 * =================================================================================
 *
 * ANGLE conversions
 * Use RADIANS as common unit - convert ALL to radians, then convert to specified unit
 *
 * =================================================================================
 */
global $angle_to_radian;
$angle_to_radian = array(
    'arc_minutes'       => 0.0002908882,    // * (pi() / 10800)
    'arc_seconds'       => 0.00000484813,   // * (pi() / 648000)
    'radians'           => 1,
    'degrees'           => 0.01745329251,   // * (pi() / 180)
    'gradians'          => 0.01570796326,   // * (pi() / 200)
    'angular_mils'      => 0.000159154943,  // new * (0.05 / pi())
    'revolutions'       => 6.28318530718,   // * (2 * pi())
    'turns'             => 6.28318530718,   // * (2 * pi())
);

function x_to_radians( $value, $from_unit ) {
    global $angle_to_radian;
    if( array_key_exists( $from_unit, $angle_to_radian ) ) {
        return $value * $angle_to_radian[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_radians( $value, $to_unit ) {
    global $angle_to_radian;
    if( array_key_exists( $to_unit, $angle_to_radian ) ) {
        return $value / $angle_to_radian[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_angle( $value, $from_unit, $to_unit ) {
    $rad_value = x_to_radians( $value, $from_unit );
    $new_value = x_from_radians( $rad_value, $to_unit );
    return $new_value;
}