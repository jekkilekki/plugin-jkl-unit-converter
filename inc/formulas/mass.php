<?php
/*
 * =================================================================================
 *
 * MASS conversions
 * Use KILOGRAMS as common unit - convert ALL to kilograms, then convert to specified unit
 *
 * =================================================================================
 */
global $mass_to_kilogram;
$mass_to_kilogram = array(
    'ounces'                    => 0.0283495,
    'pounds'                    => 0.453592,
    'stones'                    => 6.35029,
    'long_tons'                 => 1016.05,
    'short_tons'                => 907.185,
    'milligrams'                => 0.000001,
    'grams'                     => 0.001,
    'kilograms'                 => 1,
    'metric_tonnes'             => 1000,
    'carats'                    => 0.0002,
    
    // Additional units
    'amu'                       => 0.000000000000000000000000001660539040, 
    'atomic_mass_units'         => 0.000000000000000000000000001660539040, 
    // 'blintzes'               => ,
    //'butter_firkins'          => ,
    'drams'                     => 0.00177185,
    'earth_masses'              => 5973600000000000000000000,
    'english_stone'             => 6.35029,
    //'farshimmelt_blintzes'  => ,
    'funt'                      => 0.409517,
    //'furshlugginer_blintzes'    => ,
    'grains'                    => 0.000064799,
    'imperial_tons'             => 1016.05,
    'jupiter_masses'            => 1899000000000000000000000000,
    'lunar_masses'              => 73477000000000000000000,
    'micrograms'                => 0.000000001,
    'pennyweights'              => 0.00155517,
    'pood'                      => 16.3807,
    'slugs'                     => 14.5939,
    //'soap_firkins'              => ,
    'solar_masses'              => 1989000000000000000000000000000,
    'troy_drams'                => 0.00388793,
    'troy_ounces'               => 0.0311035,
);

function x_to_kilograms( $value, $from_unit ) {
    global $mass_to_kilogram;
    if( array_key_exists( $from_unit, $mass_to_kilogram ) ) {
        return $value * $mass_to_kilogram[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_kilograms( $value, $to_unit ) {
    global $mass_to_kilogram;
    if( array_key_exists( $to_unit, $mass_to_kilogram ) ) {
        return $value / $mass_to_kilogram[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_mass( $value, $from_unit, $to_unit ) {
    $kg_value = x_to_kilograms( $value, $from_unit );
    $new_value = x_from_kilograms( $kg_value, $to_unit );
    return $new_value;
}