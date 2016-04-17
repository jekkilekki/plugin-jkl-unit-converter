<?php
/*
 * =================================================================================
 *
 * TIME conversions
 * Use SECONDS as common unit - convert ALL to seconds, then convert to specified unit
 *
 * =================================================================================
 */
$time_to_seconds = array(
    'nanoseconds'           => 0.000000001,
    'microseconds'          => 0.000001,
    'milliseconds'          => 0.001,
    'seconds'               => 1,
    'minutes'               => 60,
    'hours'                 => 3600,
    'days'                  => 86400,
    'weeks'                 => 604800,
    'months'                => 2628000,
    //'this_month'            => $this_month,     // maybe use this?
    //'this_year'             => $this_year,
    'years'                 => 31536000,   // true = 31556925.1296 
    'calendar_years'        => 31536000,
    'decades'               => 315360000, // true = 315569251.296
    'centuries'             => 3153600000, // true = 3155692512.96
    'millennium'            => 31536000000,   // true = 31556925129.6
    'fortnights'            => 1209600,
    'halakim'               => 3.3333333333333,
    'helek'                 => 3.3333333333333, 
    'leap_years'            => 31622400,
    'lunar_cycles'          => 2551442.976,
    'lustrum'               => 157784544,
    'sidereal_days'         => 86164.0916,      // 23 hours, 56 minutes, 4.096 secs
    'sidereal_years'        => 31556925.1296,   // 365.242189 days
);

function x_to_seconds( $value, $from_unit ) {
    global $time_to_seconds;
    if( array_key_exists( $from_unit, $time_to_seconds ) ) {
        return $value * $time_to_seconds[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_seconds( $value, $to_unit ) {
    global $time_to_seconds;
    if( array_key_exists( $to_unit, $time_to_seconds ) ) {
        return $value / $time_to_seconds[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_time( $value, $from_unit, $to_unit ) {
    $sec_value = x_to_seconds( $value, $from_unit );
    $new_value = x_from_seconds( $sec_value, $to_unit );
    return $new_value;
}