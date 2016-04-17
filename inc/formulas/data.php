<?php
/*
 * =================================================================================
 *
 * DIGITAL STORAGE conversions
 * Use BYTES as common unit - convert ALL to bytes, then convert to specified unit
 *
 * =================================================================================
 */
$data_to_bytes = array( // https://kb.iu.edu/d/ackw
    'bits'                      => 0.125,   
    'nibbles'                   => 0.5,   
    'binary_kibybytes_(kib)'    => 1024,    // kilobyte
    'binary_mebibytes_(mib)'    => 1048576, // megabyte
    'bytes'                     => 1,
    'kilobytes'                 => 1024,   
    'kb'                        => 1024,
    'megabytes'                 => 1048576,
    'mb'                        => 1048576,
    'gigabytes'                 => 1073741824,          // new
    'gb'                        => 1073741824,
    'terabytes'                 => 1099511627776,       // new
    'tb'                        => 1099511627776,
    'petabytes'                 => 1125899906842624,    // new
    'pb'                        => 1125899906842624,
    //'exabytes'                  => , // 1024 pb
    //'eb'                        => ,
    //'zettabytes'                => , // 1024 eb
    //'zb'                        => ,
    //'yottabytes'                => , // 1024 zb
    //'yb'                        => ,
);

function x_to_bytes( $value, $from_unit ) {
    global $data_to_bytes;
    if( array_key_exists( $from_unit, $data_to_bytes ) ) {
        return $value * $data_to_bytes[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_bytes( $value, $to_unit ) {
    global $data_to_bytes;
    if( array_key_exists( $to_unit, $data_to_bytes ) ) {
        return $value / $data_to_bytes[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_data( $value, $from_unit, $to_unit ) {
    $byte_value = x_to_bytes( $value, $from_unit );
    $new_value = x_from_bytes( $byte_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * DATA TRANSFER SPEED conversions
 * Use BYTES PER SECOND as common unit - convert ALL to bps, then convert to specified unit
 *
 * =================================================================================
 *
 * Requires 2 steps:
 *  1. convert times (if necessary), first and last
 *  2. convert distances (using convert_length())
 */

function convert_data_speed( $value, $from_unit, $to_unit ) {
    
    list( $from_data, $from_time_jumble ) = explode( '_per_', $from_unit );
    list( $to_data, $to_time_jumble ) = explode( '_per_', $to_unit );
    
    list( $from_time, $from_garbage ) = explode( '_(', $from_time_jumble ); // get rid of the (bps) or whatever in parentheses
    list( $to_time, $to_garbage ) = explode( '_(', $to_time_jumble );       // get rid of the (bps) or whatever in parentheses
    
    if( $from_time == 'hour' ) { $value /= 3600; }  // currently unused, but might later
    $new_value = convert_data( $value, $from_data, $to_data );
    if( $to_time == 'hour' ) { $new_value *= 3600; }    // currently unused, but might later
    
    return $new_value;
}