/*
 *
 */
// object holding data for option elements
var Conversion_List_Choices = {
    
    'conversion_type[]': {
        
        basic: {
            text: [ 'area', 'length_and_distance', 'mass_and_weight', 'speed', 'temperature', 'volume' ],
        },
        default: {
            text: [ 'angles', 'area', 'data_transfer_rate', 'digital_storage', 'energy', 'frequency', 'fuel_economy', 'length_and_distance', 'mass_and_weight', 'pressure', 'speed', 'temperature', 'time', 'volume' ],
        },
        advanced: {
            text: [ 'acceleration', 'angles', 'area', 'currency', 'data_transfer_rate', 'density', 'digital_storage', 'electric_capacitance', 'electric_charge', 'electric_conductance', 'electric_current', 'energy', 'flow_rate', 'force', 'frequency', 'fuel_economy', 'inductance', 'length_and_distance', 'light_intensity', 'magnetic_flux', 'mass_and_weight', 'misc', 'power', 'pressure', 'radiation_dosage', 'radioactivity', 'speed', 'temperature', 'time', 'torque', 'unitless_numeric', 'voltage', 'volume' ],
        },
        
    }
    
}

function removeListOptions( sel, removeGrp ) {
    var len, groups, par;
    len = sel.options.length;
    for( var i=len; i; i-- ) {
        par = sel.options[ i-1 ].parentNode;
        par.removeChild( sel.options[ i-1 ] );
    }
}

function appendListOptions( sel, obj, str ) { // str="" default
    
    // Set default value for str pre ES2015
    str = typeof str !== 'undefined' ? str : "";
    
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOpts( obj ) {
        var f = document.createDocumentFragment();
        var o;
        
        for( var i=0, len=obj.text.length; i<len; i++ ) {
            o = document.createElement( 'option' );
            o.appendChild( document.createTextNode( capitalize( obj.text[i] ) ) );
            
            if( obj.value ) {
                o.value = obj.value[i];
            } else {
                o.value = obj.text[i].replace( ' ', '_' );
            }
            if( obj.text[i] == str ) {
                o.selected = true;
            }
            
            f.appendChild( o );
        }
        return f;
    }
    
    if( obj.text ) {
        opts = addOpts( obj );
        f.appendChild( opts );
    } else {
        for( var prop in obj ) {
            if( obj.hasOwnProperty( prop ) ) {
                labels.push( prop );
            }
        }
        for( var i=0, len=labels.length; i<len; i++ ) {
            group = document.createElement( 'optgroup' );
            group.label = labels[i];
            f.appendChild( group );
            opts = addOpts( obj[ label[i] ] );
            group.appendChild( opts );
        }
    }
    sel.appendChild( f );
    
}

var listChoice = document.getElementById( 'list-options' );
for( var i=0; i<listChoice.children.length; i++ ) {
    listChoice.children[i].addEventListener( 'click', changeList, false );
}

// Listener for List types
function changeList( e ) {
    var allTabs = document.getElementById( 'list-options' ).children;
    for( var i=0; i<allTabs.length; i++ ) {
        allTabs[i].className = "convert-list-options";
    }
    this.className = "convert-list-options active";
    
//    if( !document.getElementById( 'show_str_input' ).checked ) {
//        document.getElementById( 'notes' ).style.display = 'none';
//    }
    
    if( this.value == 0 ) { document.getElementById( 'remember_options' ).value = 'basic'; }
    else if( this.value == 1 ) { document.getElementById( 'remember_options' ).value = 'default'; }
    else if( this.value == 2 ) { 
        document.getElementById( 'remember_options' ).value = 'advanced';
        // document.getElementById( 'notes' ).style.display = 'block';
    }
    else { document.getElementById( 'remember_options' ).value = 'some_error'; }   
    
    var sel = document.forms[ 'conversion-form' ].elements[ 'conversion_type[]' ];
    removeListOptions( sel, true );
    
    var listName = this.innerHTML;
    listName = listName.toLowerCase();
    appendListOptions( sel, Conversion_List_Choices[ 'conversion_type[]' ][ listName ] );
    
    reloadSelectOptions(  );
    
}

function capitalize( str ) {
    return str.substr( 0, 1 ).toUpperCase() + str.substr( 1 ).replace( /_/g, ' ' );
}