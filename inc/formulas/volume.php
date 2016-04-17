<?php
/*
 * =================================================================================
 *
 * VOLUME conversions
 * Use LITERS as common unit - convert ALL to liters, then convert to specified unit
 *
 * =================================================================================
 */
global $volume_to_liter;
$volume_to_liter = array(
    'cubic_inches'          => 0.0163871,
    'cubic_feet'            => 28.3168,
    'cubic_millimeters'     => 0.000001,
    'cubic_centimeters'     => 0.001,
    'cubic_meters'          => 1000,
    'cubic_kilometers'      => 1000000000000,
    'imperial_gallons'      => 4.54609,
    'imperial_quarts'       => 1.13652,
    'imperial_pints'        => 0.568261,
    'imperial_cups'         => 0.284131,
    'imperial_ounces'       => 0.0284131,
    'imperial_tablespoons'  => 0.0177582,
    'imperial_teaspoons'    => 0.00591939,
    'us_gallons'            => 3.78541,
    'us_quarts'             => 0.946353,
    'us_pints'              => 0.473176,
    'us_cups'               => 0.24,
    'us_ounces'             => 0.0295735,
    'us_tablespoons'        => 0.0147868,
    'us_teaspoons'          => 0.00492892,
    'liters'                => 1,
    'milliliters'           => 0.001,
    
    // Additional units
    // https://en.wikipedia.org/wiki/English_wine_cask_units
    // https://en.wikipedia.org/wiki/English_brewery_cask_units#Firkin
    'acre-feet'             => 1233000,
    'barrels_of_oil'        => 158.987,
    'beer_barrels'          => 117.348, // 1803 standard
    'beer_firkins'          => 41.59,   // 1803 standard
    'beer_hogsheads'        => 249.5,   // 1803 standard
    'beer_kilderkins'       => 83.18,   // 1803 standard
    'board_feet'            => 2.35974,
    'bushels'               => 35.2391,
    'cords'                 => 3624.56,
    //'English_tierces'       => ,
    //'fluid_barrels'         => ,
    'us_fluid_drams'        => 0.003697,    // update
    'us_fluid_ounces'       => 0.0295735,   // update
    'full_kegs'             => 117.348,
    'us_gills'              => 0.118294,    // update
    'gross_register_tonnes' => 2831.68,
    //'half_barrels'          => ,
    //'hogsheads'             => ,
    //'imperial_beer_barrels' => ,
    'imperial_bushels'      => 36.3687,
    'imperial_dessertspoons'=> 0.011839,
    'imperial_fluid_drams'  => 0.003552,
    'imperial_gills'        => 0.142065,
    'imperial_minims'       => 0.000059,
    'imperial_pecks'        => 9.09218,
    'us_minims'             => 0.000062,    // update
    'us_pecks'              => 8.80977,     // update
    //'puncheons'             => ,
    //'quarter_barrels'       => ,
    'register_tonnes'       => 2831.68,
    'shots'                 => 0.04436,
    'jiggers'               => 0.04436,     // update
    //'sixth_barrels'         => ,
    'sticks_of_butter'      => 0.118294,
    //'tierces'               => ,
    //'wine_firkins'          => ,
    //'wine_rundlets'         => ,
);

function x_to_liters( $value, $from_unit ) {
    global $volume_to_liter;
    if( array_key_exists( $from_unit, $volume_to_liter ) ) {
        return $value * $volume_to_liter[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_liters( $value, $to_unit ) {
    global $volume_to_liter;
    if( array_key_exists( $to_unit, $volume_to_liter ) ) {
        return $value / $volume_to_liter[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_volume( $value, $from_unit, $to_unit ) {
    $liter_value = x_to_liters( $value, $from_unit );
    $new_value = x_from_liters( $liter_value, $to_unit );
    return $new_value;
}