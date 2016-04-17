document.getElementById( 'show_str_input' ).onchange = function( e ) {
    if( document.getElementById( 'show_str_input' ).checked ) {
        document.getElementById( 'convert_string' ).style.display = 'block';
        document.getElementById( 'notes' ).style.display = 'block';
    } else {
        document.getElementById( 'convert_string' ).style.display = 'none';
        document.getElementById( 'notes' ).style.display = 'none';
    }
}

var fromSelected = document.getElementById( 'from-units' ).value;
var toSelected = document.getElementById( 'to-units' ).value;
var listSelected = document.getElementById( 'selected_list' ).value;

// function assigned to onchange event of unit select boxes
document.forms[ 'conversion-form' ].elements[ 'from_unit[]' ].onchange = function( e ) {
    if( fromSelected != this.selectedIndex ) {
        fromSelected = this.selectedIndex;
        resetInputs();
    }
}
document.forms[ 'conversion-form' ].elements[ 'to_unit[]' ].onchange = function( e ) {
    if( toSelected != this.selectedIndex ) {
        toSelected = this.selectedIndex;
        resetInputs();
    }
}

// function to listen for checkbox events (show ALL options)
document.getElementById( 'show_all_units' ).onchange = function( e ) {
    reloadSelectOptions();
}

// anonymous function assigned to onchange event of controlling select box
document.forms[ 'conversion-form' ].elements[ 'conversion_type[]' ].onchange = function( e ) {
    reloadSelectOptions();
};

// populate associated select box as page loads
window.onload = function() { // immediate function to avoid globals
    
    // For the initial Unit Converter Types List
    var form = document.forms[ 'conversion-form' ];
    var sel = form.elements[ 'conversion_type[]' ];
    
    var listName = document.getElementById( 'remember_options' ).value;
    
    if( document.getElementById( 'show_str_input' ).checked ) {
        document.getElementById( 'convert_string' ).style.display = 'block';
    }
    
    // Load the Basic Conversion Types List
    appendListOptions( sel, Conversion_List_Choices[ 'conversion_type[]' ][ listName ], listSelected );
    
    reloadSelectOptions();
    
};

function reloadSelectOptions() {
    
    var obj = document.forms[ 'conversion-form' ].elements[ 'conversion_type[]' ];
    
    // name of associated select box
    var fromName = 'from_unit[]';
    var toName = 'to_unit[]';
    
    // reference to associated select box
    var fromList = obj.form.elements[ fromName ];
    var toList = obj.form.elements[ toName ];
    
    // remove current option elements
    removeAllOptions( fromList, true );
    removeAllOptions( toList, true );
    
    // call function to add optgroup/option elements
    // pass reference to assc select box and data for new options
    
    appendDataToSelect( fromList, Conversion_Unit_Lists[ fromName ][ obj.value ], fromSelected );
    appendDataToSelect( toList, Conversion_Unit_Lists[ toName ][ obj.value ], toSelected );
}

function resetInputs( all ) { // all=false default
    
    // Set default for all pre ES2015
    a = typeof a !== 'undefined' ? a : false;
    
    if( all ) {
        document.getElementById( 'convert_string' ).value = '';
        document.getElementById( 'from_value' ).value = '';
        document.getElementById( 'to_value' ).value = '';
    } else {
        document.getElementById( 'to_value' ).value = '';
    }
}