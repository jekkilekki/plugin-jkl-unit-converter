<?php
/**
 * 
 */
require_once( 'controller.php' );
?>
        
        <form id="conversion-form" action="" method="POST">
            
            <?php
            // Add a nonce (number once) to be sure submissions come from THIS form
            wp_nonce_field( 'jkl_unit_converter', 'jkl_unit_converter_form' );
            ?>
            
            <h4><?php _e( 'Unit Converter', 'jkl-unit-converter' ); ?></h4>
            
            <ol id="list-options">
                <li name="basic" value="0" class="convert-list-options <?= $list_choice == 'basic' ? ' active' : ''; ?>"><?php _e( 'Basic', 'jkl-unit-converter' ); ?></li>
                <li name="default" value="1" class="convert-list-options <?= $list_choice == 'default' ? ' active' : ''; ?>"><?php _e( 'Default', 'jkl-unit-converter' ); ?></li>
                <!--<li name="advanced" value="2" class="convert-list-options <?= $list_choice == 'advanced' ? ' active' : ''; ?>"><?php // _e( 'Advanced', 'jkl-unit-converter' ); ?></li>-->
            </ol>
            <input type="hidden" id="remember_options" value="<?= esc_attr( $list_choice ); ?>" name="remember_options">
            
            <div id="show-input-option" class="convert-list-options no-border">
                <input type="checkbox" name="show_str_input" id="show_str_input" <?= esc_attr( $show_str_input ); ?>>
                <label for="show_str_input"><?php _e( 'Show input field', 'jkl-unit-converter' ); ?></label>
            </div>
            
            <div id="conversion-type">
                <input type="text" id="convert_string" name="convert_string" value="<?= esc_attr( $convert_string ); ?>" placeholder="<?php _e( 'Format: X [units] to [units]', 'jkl-unit-converter' ); ?>">
                <select name="conversion_type[]">
                    
                    <?php // Select options controlled by 'js/list-choice.js' ?>
                    
                </select>
                <input type="hidden" id="selected_list" value="<?= esc_attr( $convert_this ); ?>">
            </div><!-- END #conversion-type -->
            
            <div id="conversion-units">
                <div class="entry from-div">
                    From:
                    <input id="from_value" type="text" name="from_value" value="<?= esc_attr( $from_value ); ?>">
                    <select name="from_unit[]">

                        <?php // Select options controlled by 'js/functions.js' ?>

                    </select>
                    <input type="hidden" id="from-units" value="<?= esc_attr( $from_unit_str ); ?>">
                </div>
                <span id="equal-sign"><?php _e( '=', 'jkl-unit-converter' ); ?></span>
                <div class="entry to-div">
                    To:
                    <input id="to_value" type="text" name="to_value" value="<?= esc_attr( float_to_string( $to_value ) ); ?>" readonly>
                    <select name="to_unit[]">

                        <?php // Select options controlled by 'js/functions.js' ?>

                    </select>
                    <input type="hidden" id="to-units" value="<?= esc_attr( $to_unit_str ); ?>">
                </div>
            </div><!-- END #conversion-units -->
            
            <div class="controls">
                <div class="convert-list-options no-border">
                    <input id="show_all_units" name="show_all_units" type="checkbox" <?= esc_attr( $show_all_units ); ?>>
                    <label for="show_all_units"><?php _e( 'Show ALL units', 'jkl-unit-converter' ); ?></label>
                </div>

                <div class="convert-list-options no-border right">
                    <input type="submit" name="submit" value="<?php _e( 'Convert', 'jkl-unit-converter' ); ?>">
                </div>
            </div>
            
        </form><!-- END #conversion-form -->
        