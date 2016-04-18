<?php
/**
 * JKL Unit Converter Controller file
 * 
 * The controller that collects data submitted via the form and calculates the results.
 * Sets default values, checks for POST data, validates it, and converts it
 * 
 * @since       0.0.1
 * 
 * @package     JKL_Unit_Converter
 * @subpackage  JKL_Unit_converter/inc
 * @author      Aaron Snowberger <jekkilekki@gmail.com>
 */

// Another excellent conversion chart http://m.convert-me.com/en/convert/length/picaata.html

/**
 * Default Measures             UPCOMING Measures
 *  - Length / distance          - Acceleration
 *  - Area                       - Currency?
 *  - Volume / capacity          - Density
 *  - Weight / mass              - Electric Capacitance
 *  - Speed                      - Electric Charge
 *  - Temperature                - Electric Conductance
 *                               - Electric Current
 * Other Measures                - Flow Rate
 *  - Acceleration               - Force
 *  - Density                    - Inductance
 *  - Energy                     - Light Intensity
 *  - Force                      - Magnetic Flux
 *  - Frequency                  - Misc
 *  - Light                      - Power
 *  - Power                      - Radiation Dosage
 *  - Pressure                   - Radioactivity
 *  - Torque                     - Torque
 *                               - Unitless Numeric
 *                               - Voltage          
 */

require_once( 'functions-5.5.php' );

/*
 *  Set defaults
 */
// Set default lists and checkboxes
$convert_this = 'length_and_distance';  // Unit type select dropdown
$list_choice = 'default';               // List button choice
$show_all_units = '';                   // Checkbox to show ALL units
/* Possible later feature */
$show_str_input = '';                   // Checkbox to show string input
$convert_string = '';                   // String to convert ( X [units] to [units] )


// Set defaults units and values
$from_value = '';                       // From X (value)
$from_unit = '';                        // From unit (kilometers, etc)
$to_unit = '';                          // To unit (kilometers, etc)
$to_value = '';                         // To X (value)
//
// Will replace underscores with spaces in unit types (kilometers_per_hour => kilometers per hour)
$from_unit_str = '';                    // From unit string
$to_unit_str = '';                      // To unit string

if( isset( $_POST[ 'submit' ] ) && wp_verify_nonce( $_POST[ 'jkl_unit_converter_form' ], 'jkl_unit_converter' ) ) {
    
    $list_choice    = sanitize_text_field( $_POST[ 'remember_options' ] );      // Lists to select from - default 'default'
    $convert_this   = sanitize_text_field( $_POST[ 'conversion_type' ][0] );    // Chosen list - default 'length_and_distance'
    $show_all_units = isset( $_POST[ 'show_all_units' ] ) ? ' checked' : '';    // Checkbox to show ALL units
    // $show_str_input = isset( $_POST[ 'show_str_input' ] ) ? ' checked' : '';    // Checkbox for string input ( X [units] to [units] )
    // $convert_string = sanitize_text_field( $_POST[ 'convert_string' ] );        // Actual string input ( X [units] to [units] )
    
    // VALUE to convert
    $from_value     = sanitize_text_field( $_POST[ 'from_value' ] );
    
    // These variables maintain spaces and capitalization for output later ( Ex: Kilometers per Hour )
    $from_unit_str  = str_replace( '_', ' ', $_POST[ 'from_unit' ][0] );
    $to_unit_str    = str_replace( '_', ' ', $_POST[ 'to_unit' ][0] );
    
    // These variables have spaces replaced with underscores and lowercase everything to be sent to the formulas ( Ex: kilometers_per_hour )
    $from_unit      = optionize( $from_unit_str );
    $to_unit        = optionize( $to_unit_str );
    
    /*
     * Send list type value to a (switch-controlled) formula 
     * to load the proper formula.php file, calculate, and return the result
     */
    $to_value = calculate( $convert_this, $from_value, $from_unit, $to_unit );
    
}

/*
 * Make it work like Google's : https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter
 *
 * Dynamically repopulate the lower list of options based on conversion type selected
 * @link: http://stackoverflow.com/questions/22201149/ajax-javascript-select-element-change-on-page-load-in-php
 * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
 */

?>