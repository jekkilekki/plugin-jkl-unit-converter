<?php
/*
 * =================================================================================
 *
 * ENERGY conversions
 * Use JOULES as common unit - convert ALL to joules, then convert to specified unit
 *
 * =================================================================================
 */
global $energy_to_joule;
$energy_to_joule = array(
    'joules'                    => 1,
    'kilojoules'                => 1000,
    'calories'                  => 4.184,
    'kilocalories'              => 4184,
    'watt_hours'                => 3600,
    'kilowatt_hours'            => 3600000,
    'megawatt_hours'            => 3600000000,
    'british_thermal_units'     => 1055.06,
    'us_therms'                 => 105500000,
    'foot-pounds'               => 1.35582,
    
    // Additional units
    //'barrels_of_oil_equivalent' => ,
    'electron_volts'            => 0.00000000000000000016,
    'ergs'                      => 0.0000001,
    'grams_of_tnt'              => 4184,
    'kilograms_of_tnt'          => 4184000,
    'tons_of_tnt'               => 4184000000,
    'megatons_of_tnt'           => 4184000000000000,
);

function x_to_joules( $value, $from_unit ) {
    global $energy_to_joule;
    if( array_key_exists( $from_unit, $energy_to_joule ) ) {
        return $value * $energy_to_joule[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_joules( $value, $to_unit ) {
    global $energy_to_joule;
    if( array_key_exists( $to_unit, $energy_to_joule ) ) {
        return $value / $energy_to_joule[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_energy( $value, $from_unit, $to_unit ) {
    $j_value = x_to_joules( $value, $from_unit );
    $new_value = x_from_joules( $j_value, $to_unit );
    return $new_value;
}