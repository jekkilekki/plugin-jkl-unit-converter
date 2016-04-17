<?php
/*
 * =================================================================================
 *
 * #1 : LENGTH conversions
 * Use METERS as common unit - convert ALL to meters, then convert to specified unit
 *
 * =================================================================================
 */
global $length_to_meter;
$length_to_meter = array(
    'inches'                => 0.0254,
    'feet'                  => 0.3048,
    'yards'                 => 0.9144,
    'miles'                 => 1609.344,
    'nanometers'            => 0.000000001,
    'micrometers'           => 0.000001,
    'millimeters'           => 0.001,
    'centimeters'           => 0.01,
    'meters'                => 1,
    'kilometers'            => 1000,
    'astronomical_units'    => 149600000000,
    'light-years'           => 9461000000000000,
    'light-days'            => 25900000000000,
    'light-hours'           => 1079000000000,
    'light-minutes'         => 17990000000,
    'light-seconds'         => 299800000,
    'parsecs'               => 30860000000000000,
    'fathoms'               => 1.8288,
    'international_cables'  => 185.2,
    'imperial_cables'       => 185.318,
    'us_cables'             => 219.456,
    'nautical_miles'        => 1852,
    'leagues'               => 5556,
    'links'                 => 0.201168,
    'rods'                  => 5.0292,
    'chains'                => 20.1168,
    'furlongs'              => 201.168,
    
    // Unusual Units
    // http://io9.gizmodo.com/5827925/ten-unbelievably-strange-units-of-measurement
    // https://en.wikipedia.org/wiki/List_of_humorous_units_of_measurement#Length
    // http://www.kylesconverter.com/length/
    'angstroms'             => 0.0000000001,
    'ata_picas'             => 0.004217,
    //'ATA_points'            => ,
    'attoparsec'            => 0.03086,
    'beard-seconds'         => 0.000000005, 
    'ciceros'               => 0.00451167,
    'cubits'                => 0.4572,
    //'Didot_points'          => ,
    'english_ells'          => 1.143,
    'flemish_ells'          => 0.686,
    'french_ells'           => 1.372,
    'polish_ells'           => 0.787, // new
    'danish_ells'           => 0.635, // new
    'swedish_alns'          => 0.59,  // new
    'german_ells'           => 0.579, // new
    'scottish_ells'         => 0.94,
    //'Half_Ironman_Triathlon_bikes'  => ,
    //'Half_Ironman_Triathlon_runs'   => ,
    //'Half_Ironman_Triathlon_swims'  => ,
    //'Half_Ironman_Triathlons'       => ,
    'hands'                 => 0.1016,
    //'IN_picas'              => ,
    //'IN_points'             => ,
    //'indoor_track_lengths'  => , 
    //'Ironman_Triathlon_bikes'       => ,
    //'Ironman_Triathlon_runs'        => ,
    //'Ironman_Triathlon_swims'       => ,
    //'Ironman_Triathlons'            => ,
    'itinerary_stadions'    => 157,
    'ptolemaic_stadions'    => 185,
    'attic_stadions'        => 185,
    'babylonian_stadions'   => 196,
    'persian_stadions'      => 196,
    'phoenician_stadions'   => 209,
    'egyptian_stadions'     => 209,
    'marathons'             => 42195,
    'microns'               => 0.000001, 
    //'nails'                 => , 
    //'Olympic_pools'         => ,
    'olympic_stadions'      => 176,
    //'Olympic_Triathlon_bikes'       => ,
    //'Olympic_Triathlon_runs'        => ,
    //'Olympic_Triathlon_swims'       => ,
    //'Olympic_Triathlons'            => ,
    //'outdoor_track_lengths' => ,
    //'PostScript_picas'      => ,
    //'PostScript_points'     => ,
    //'Rack_units'            => ,
    //'Short_Course_pools'    => ,
    'smoots'                => 1.7018,
    'spans'                 => 0.2286,
    //'Sprint_Triathlon_bikes'        => ,
    //'Sprint_Triathlon_runs'         => ,
    //'Sprint_Triathlon_swims'        => ,
    //'Sprint_Triathlons'             => ,
    //'TeX_picas'             => ,
    //'TeX_points'            => ,
    'thou'                 => 0.0000254,
    //'Truchet_picas'         => ,
    //'Truchet_points'        => ,
    'mickeys'               => 0.000127,
    'altuves'               => 1.65,
    'sheppies'              => 1400,
    'wiffles'               => 0.089,
    
    // Area - take the sqrt as it will be squared in the function
    'acres'                 => 63.6149072341,   // sqrt(4046.8564224) 
    'ares'                  => 10, // sqrt(100)
    'barns'                 => 0.00000000000001, // sqrt(0.0000000000000000000000000001)
    'cricket_pitches'       => 7.83364538386, // sqrt(61.366)
    'dunams'                => 31.6227766017, // sqrt(1000)
    'football_fields'       => 73.1519999727, // sqrt(5351.2151)
    'football_pitches'      => 84.4985206971, // sqrt(7140)
    'hectares'              => 100,             // sqrt(10000)
    'pings'                 => 1.81818315909, // sqrt(3.30579)
    'planck_areas'          => 0.00000000000000000000000000016161683, // sqrt(0.0000000000000000000000000000000000000000000000000000000000000000002612)
    'pyoung_(ko)'           => 1.81818590909,   // sqrt(3.3058)
    'sections'              => 1609.34769394, // sqrt(2590000)
    'survey_townships'      => 9656.08616366, // sqrt(93240000)
);

function x_to_meters( $value, $from_unit ) {
    global $length_to_meter;
    if( array_key_exists( $from_unit, $length_to_meter ) ) {
        return $value * $length_to_meter[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_meters( $value, $to_unit ) {
    global $length_to_meter;
    if( array_key_exists( $to_unit, $length_to_meter ) ) {
        return $value / $length_to_meter[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_length( $value, $from_unit, $to_unit ) {
    $meter_value = x_to_meters( $value, $from_unit );
    $new_value = x_from_meters( $meter_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * AREA conversions
 * Use METERS as common unit - convert ALL to meters, then convert to specified unit
 *
 * =================================================================================
 */
function x_to_sq_meters( $value, $from_unit ) {
    global $length_to_meter;
    $from_unit = str_replace( 'square_', '', $from_unit );
    if( array_key_exists( $from_unit, $length_to_meter ) ) {
        return $value * pow( $length_to_meter[ $from_unit ], 2 );
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_sq_meters( $value, $to_unit ) {
    global $length_to_meter;
    $to_unit = str_replace( 'square_', '', $to_unit );
    if( array_key_exists( $to_unit, $length_to_meter ) ) {
        return $value / pow( $length_to_meter[ $to_unit ], 2 );
    } else {
        return 'Unsupported unit.';
    }
}

function convert_area( $value, $from_unit, $to_unit ) {
    $sq_meter_value = x_to_sq_meters( $value, $from_unit );
    $new_value = x_from_sq_meters( $sq_meter_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * SPEED conversions
 * Use METERS PER SECOND as common unit - convert ALL to m/s, then convert to specified unit
 *
 * =================================================================================
 *
 * Requires 2 steps:
 *  1. convert times (if necessary), first and last
 *  2. convert distances (using convert_length())
 */

function convert_speed( $value, $from_unit, $to_unit ) {
    if( $from_unit == 'knots' ) { $from_unit = 'nautical_miles_per_hour'; }
    if( $to_unit == 'knots' ) { $to_unit = 'nautical_miles_per_hour'; } 
    
    list( $from_dist, $from_time ) = explode( '_per_', $from_unit );
    list( $to_dist, $to_time ) = explode( '_per_', $to_unit );
    
    if( $from_time == 'hour' ) { $value /= 3600; }
    $new_value = convert_length( $value, $from_dist, $to_dist );
    if( $to_time == 'hour' ) { $new_value *= 3600; }
    
    return $new_value;
}