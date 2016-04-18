<?php 
/*
 * Functions file - handles ALL conversion functions
 * 
 * In alphabetical order, the functions found in this file are:
 *  1. acceleration         convert_acceleration()      * non
 *  2. angles               convert_angles()            DEFAULT
 *  3. area                 convert_area()              DEFAULT
 *  4. currency             convert_currency()          * 
 *  5. data transfer rate   convert_data_transfer()     DEFAULT
 *  6. density              convert_density()           * non
 *  7. digital storage size convert_digital_storage()   DEFAULT
 *  8. electric capacitance convert_electric_cap()      *
 *  9. electric charge      convert_electric_charge()   *
 * 10. electric conductance convert_electric_cond()     *
 * 11. electric current     convert_electric_curr()     *
 * 12. energy               convert_energy()            DEFAULT
 * 13. flow rate            convert_flow()              *
 * 14. force                convert_force()             *
 * 15. frequency            convert_frequency()         DEFAULT
 * 16. fuel economy         convert_fuel()              DEFAULT
 * 17. inductance           convert_inductance()        *
 * 18. length and distance  convert_length()            DEFAULT
 * 19. light intensity      convert_light()             *
 * 20. magnetic flux        convert_magnetic()          *
 * 21. mass and weight      convert_mass()              DEFAULT
 * 22. misc                 convert_misc()              *
 * 23. power                convert_power()             *
 * 24. pressure             convert_pressure()          DEFAULT
 * 25. radiation dosage     convert_radiation()         *
 * 26. radioactivity        convert_radioactivity()     *
 * 27. speed                convert_speed()             DEFAULT
 * 28. temperature          convert_temperature()       DEFAULT
 * 29. time                 convert_time()              DEFAULT
 * 30. torque               convert_torque()            * non
 * 31. unitless numeric     convert_unitless()          *
 * 32. voltage              convert_voltage()           *
 * 33. volume               convert_volume()            DEFAULT
 */

/*
 * PHP Notes
 *  - in 5.3, can't assign arrays to constants
 *  - in 5.6, CAN assign arrays to constants USE const
 *  - in 7.0, can use define rather than const
 */

/*
 * =================================================================================
 *
 * GENERAL functions 
 *
 * =================================================================================
 */
function optionize( $string ) {
    return str_replace( ' ', '_', strtolower( $string ) );
}

/*
 * Formatting scientific notation
 * number_format( $float, $precision, $point, $sep );
 * sprintf( '%F', 1/1000000 ); => sprintf( '%.6F', 1/1000000 );
 * 
 * Formats a float into a string, avoids default scientific notation, rounds to $precision and trims trailing zeroes.
 */
function float_to_string( $float, $precision=10 ) {
    if( $float == '' ) return $float;
    // Typecast to insure value is a float
    $float = (float) $float;
    $string = number_format( $float, $precision, '.', '' );
    $string = rtrim( $string, '0' );
    $string = rtrim( $string, '.' );
    return $string;
}

function calculate( $list_name, $from_value, $from_unit, $to_unit ) {
    
    switch( $list_name ) {
        
        // Upcoming case 'acceleration': return convert_acceleration( $from_value, $from_unit, $to_unit );
        
        case 'angles':              
            include_once( 'formulas/angles.php' ); 
            return convert_angle( $from_value, $from_unit, $to_unit );
            
        case 'area':                
            include_once( 'formulas/length-area-speed.php' ); 
            return convert_area( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'currency': return convert_currency( $from_value, $from_unit, $to_unit );
            
        case 'data_transfer_rate':  
            include_once( 'formulas/data.php' ); 
            return convert_data_speed( $from_value, $from_unit, $to_unit );
        // Upcoming case 'density': return convert_density( $from_value, $from_unit, $to_unit );
            
        case 'digital_storage':     
            include_once( 'formulas/data.php' ); 
            return convert_data( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'electric_capacitance': return convert_electric_cap( $from_value, $from_unit, $to_unit );
        // Upcoming case 'electric_charge': return convert_electric_charge( $from_value, $from_unit, $to_unit );
        // Upcoming case 'electric_conductance': return convert_electric_cond( $from_value, $from_unit, $to_unit );
        // Upcoming case 'electric_current': return convert_electric_curr( $from_value, $from_unit, $to_unit );
            
        case 'energy':              
            include_once( 'formulas/energy.php' ); 
            return convert_energy( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'flow_rate': return convert_flow( $from_value, $from_unit, $to_unit );
        // Upcoming case 'force': return convert_force( $from_value, $from_unit, $to_unit );
            
        case 'frequency':           
            include_once( 'formulas/frequency.php' ); 
            return convert_frequency( $from_value, $from_unit, $to_unit );
            
        case 'fuel_economy':        
            include_once( 'formulas/fuel-economy.php' ); 
            return convert_fuel_economy( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'inductance': return convert_inductance( $from_value, $from_unit, $to_unit );
            
        case 'length_and_distance': 
            include_once( 'formulas/length-area-speed.php' ); 
            return convert_length( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'light_intensity': return convert_light( $from_value, $from_unit, $to_unit );
        // Upcoming case 'magnetic_flux': return convert_magnetic( $from_value, $from_unit, $to_unit );
            
        case 'mass_and_weight':     
            include_once( 'formulas/mass.php' ); 
            return convert_mass( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'misc': return convert_misc( $from_value, $from_unit, $to_unit );
        // Upcoming case 'power': return convert_power( $from_value, $from_unit, $to_unit );
            
        case 'pressure':            
            include_once( 'formulas/pressure.php' ); 
            return convert_pressure( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'radiation_dosage': return convert_radiation( $from_value, $from_unit, $to_unit );
        // Upcoming case 'radioactivity': return convert_radioactivity( $from_value, $from_unit, $to_unit );
            
        case 'speed':               
            include_once( 'formulas/length-area-speed.php' ); 
            return convert_speed( $from_value, $from_unit, $to_unit );
            
        case 'temperature':         
            include_once( 'formulas/temperature.php' ); 
            return convert_temperature( $from_value, $from_unit, $to_unit );
            
        case 'time':                
            include_once( 'formulas/time.php' ); 
            return convert_time( $from_value, $from_unit, $to_unit );
            
        // Upcoming case 'torque': return convert_torque( $from_value, $from_unit, $to_unit );
        // Upcoming case 'unitless_numeric': return convert_unitless( $from_value, $from_unit, $to_unit );
        // Upcoming case 'voltage': return convert_voltage( $from_value, $from_unit, $to_unit );
            
        case 'volume':              
            include_once( 'formulas/volume.php' ); 
            return convert_volume( $from_value, $from_unit, $to_unit );
            
        default:
            return 'Unsupported conversion type.';
            
    }
    
}