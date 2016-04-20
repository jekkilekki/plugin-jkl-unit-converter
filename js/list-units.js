/*
 * @link: https://en.wikipedia.org/wiki/Conversion_of_units#Torque_or_moment_of_force (BEST)
 * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
 */
// object literal holding data for option elements
var Conversion_Unit_Lists = {
    
    'from_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
        acceleration: {
            text: [ 'meters per square second', 'millimeters per square second', 'centimeters per square second', 'inches per square second', 'feet per square second', 'yards per square second', 'miles per square second', 'kilometers per square second', 'Gravity', 'galileos' ],
        },
        angles: {
            text: [ 'arc minutes', 'arc seconds', 'degrees', 'radians', 'revolutions', 'turns' ],
        },
        area: {
            text: [ 'acres', 'ares', 'barns', 'cricket pitches', 'dunams', 'football fields', 'football pitches', 'hectares', 'pings', 'Planck areas', 'pyoung (KO)', 'sections', 'square centimeters', 'square feet', 'square inches', 'square kilometers', 'square meters', 'square millimeters', 'square yards', 'survey townships' ],
            default: [ 'square kilometers', 'square meters', 'square miles', 'square yards', 'square feet', 'square inches', 'hectares', 'acres', 'pyoung (KO)' ],
        },
        currency: {
            text: [ 'Algerian dinars', 'Argentine pesos', 'Australian cents', 'Australian dollars', 'Bahrain dinars', 'Bolivian bolivianos', 'Botswana pula', 'Brazil reais', 'British pounds', 'Brunei dollars', 'Bulgarian levs', 'Canadian cents', 'Canadian dollars', 'Cayman Islands dollars', 'Chilean pesos', 'Chinese yuan', 'Colombian pesos', 'Costa Rican colones', 'Croatian kuna', 'Czech koruna', 'Danish kroner', 'Dominican pesos', 'Egyptian pounds', 'Estonian kroons', 'Eurocents', 'Euros', 'Fiji dollars', 'Honduran lempiras', 'Hong Kong dollars', 'Hungarian forints', 'Indian rupees', 'Indonesian rupiahs', 'Israeli shekels', 'Jamaican dollars', 'Japanese yen', 'Jordanian dinars', 'Kazakh tenge', 'Kenyan shillings', 'Kuwaiti dinars', 'Latvian lats', 'Lebanese pounds', 'Lithuanian litas', 'Macedonian denari', 'Malaysian ringgits', 'Mauritian rupees', 'Mexican pesos', 'Moldovan leu', 'Moroccan dirhams', 'Namibian dollars', 'Nepalese rupees', 'Netherlands Antilles guilders', 'New Zealand dollars', 'Nicaraguan cordobas', 'Nigerian naira', 'Norwegian kroner', 'Omani rials', 'Pakistan rupees', 'Papua New Guinean kina', 'Paraguayan guaranies', 'Peruvian nuevos soles', 'Philippine pesos', 'Polish zloty', 'Qatar riyals', 'Romanian lei', 'Russian rubles', 'Salvadoran colones', 'Saudi riyals', 'Seychelles rupees', 'Sierra Leonean leones', 'Singapore dollars', 'Slovak koruna', 'South African rands', 'South Korean won', 'Sri Lankan rupees', 'Swedish kronor', 'Swiss francs', 'Taiwan dollars', 'Tanzanian shillings', 'Thai baht', 'Trinidad dollars', 'Tunisian dinar', 'Turkish liras', 'Ugandan shillings', 'Ukrainian grivnas', 'United Arab Emirates dirhams', 'Uruguayan pesos', 'U.S. cents', 'U.S. dollars', 'Uzbekistani sum', 'Venezuelan bolivares fuertes', 'Venezuelan bolivars', 'Vietnamese dong', 'Yemeni rials', 'Zambia kwacha' ],
        },
        data_transfer_rate: {
            text: [ 'bits per second (bps)', 'nibbles per second (nps)', 'bytes per second (Bps)', 'kilobytes per second (KB/s)', 'megabytes per second (MB/s)', 'gigabytes per second (GB/s)', 'terabytes per second (TB/s)', 'petabytes per second (PB/s)', 'bytes per hour (Bph)', 'kilobytes per hour (KB/h)', 'megabytes per hour (MB/h)', 'gigabytes per hour (GB/h)', 'terabytes per hour (TB/h)', 'petabytes per hour (PB/h)', ],
            default: [ 'bits per second (bps)', 'bytes per second (Bps)', 'kilobytes per second (KB/s)', 'megabytes per second (MB/s)', 'gigabytes per second (GB/s)', ],
        },
        density: {
            text: [ 'kilograms per cubic meter', 'kilograms per liter', 'grams per milliliter', 'metric tonnes per cubic meter', ],  
        },
        digital_storage: {
            text: [ 'bits', 'nibbles', 'bytes', 'kilobytes', 'megabytes', 'gigabytes', 'terabytes', 'petabytes', 'binary kibibytes (KiB)', 'binary mebibytes (MiB)' ],
            default: [ 'bits', 'bytes', 'kilobytes', 'megabytes', 'gigabytes', 'terabytes', 'petabytes', ],
        },
        electric_capacitance: {
            text: [ 'farads' ],
        },
        electric_charge: {
            text: [ 'ampere hours', 'coulombs', 'Faradays' ],
        },
        electric_conductance: {
            text: [ 'mhos', 'siemens' ],
        },
        electric_current: {
            text: [ 'amperes', 'biots' ],
        },
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'tons of TNT', 'US therms', 'watt hours' ],
            default: [ 'joules', 'kilojoules', 'calories', 'kilocalories', 'watt hours', 'kilowatt hours', 'megawatt hours', 'British thermal units', 'US therms', 'foot-pounds' ],
        },
        flow_rate: {
            text: [ 'cubic feet per minute', 'cubic feet per second', 'liters per minute', 'liters per second' ],
        },
        force: {
            text: [ 'dynes', 'kilograms-force', 'newtons', 'pounds-force' ],
        },
        frequency: {
            text: [ 'hertz', 'kilohertz', 'megahertz', 'gigahertz', ],
        },
        fuel_economy: {
            text: [ 'kilometers per liter', 'liters per 100 kilometers', 'US miles per gallon', 'Imperial miles per gallon' ],
        },
        inductance: {
            text: [ 'henries' ],
        },
        length_and_distance: {
            text: [ 'Altuves', 'angstroms', 'Astronomical Units', 'ATA picas', /*'ATA points',*/ 'beard-seconds', 'chains', 'centimeters', 'Ciceros', 'cubits', 'Danish ells', /*'Didot points',*/ 'English ells', 'fathoms', 'feet' , 'Flemish ells', 'football fields', 'football pitches', 'French ells', 'furlongs', 'German ells', /*'Half Ironman Triathlon bikes', 'Half Ironman Triathlon runs', 'Half Ironman Triathlon swims', 'Half Ironman Triathlons',*/ 'hands', 'Imperial cables', /*'IN picas', 'IN Points',*/ 'inches', /*'indoor track lengths',*/ 'international cables', /*'Ironman Triathlon bikes', 'Ironman Triathlon runs', 'Ironman Triathlon swims', 'Ironman Triathlons',*/ 'itinerary stadions', 'kilometers', 'cricket pitches', 'light-days', 'light-hours', 'light-minutes', 'light-seconds', 'light-years', 'marathons', 'meters', 'Mickeys', 'microns', 'miles', /*'nails',*/ 'nautical leagues', 'nautical miles', /*'Olympic Pools', 'Olympic stadions', 'Olympic Triathlon bikes', 'Olympic Triathlon runs', 'Olympic Triathlon swims', 'Olympic Triathlons', 'outdoor track lengths',*/ 'Parsecs', 'Planck Lengths', 'Polish ells', /*'PostScript picas', 'PostScript points', 'Rack units',*/ 'rods', 'Scottish ells', 'sheppies', /*'Short Course Pools',*/ 'smoots', 'spans', /*'Sprint Triathlon bikes', 'Sprint Triathlon runs', 'Sprint Triathlon swims', 'Sprint Triathlons',*/ 'Swedish alns', /*'TeX picas', 'TeX points',*/ 'thou', /*'Truchet picas', 'Truchet points',*/ 'US cables', 'wiffles', 'yards' ],
            default: [ 'kilometers', 'meters', 'centimeters', 'millimeters', 'micrometers', 'nanometers', 'miles', 'yards', 'feet', 'inches', 'nautical miles' ],
        },
        light_intensity: {
            text: [ 'candelas', 'footcandles', 'lamberts', 'lumens', 'lux' ],
        },
        magnetic_flux: {
            text: [ 'gauss', 'maxwells', 'teslas', 'webers' ],
        },
        mass_and_weight: {
            text: [ 'AMU', 'atomic mass units', /*'Blintzes', 'butter firkins',*/ 'carats', 'drams', 'earth masses', 'English stone', /*'Farshimmelt Blintzes',*/ 'funt', /*'Furshlugginer Blintzes',*/ 'grains', 'grams', 'Imperial tons', 'Jupiter masses', 'kilograms', 'lunar masses', 'metric tonnes', 'micrograms', 'ounces', 'pennyweights', 'pood', 'pounds', 'short tons', 'slugs', /*'soap firkins',*/ 'solar masses', 'stones', 'Troy drams', 'Troy ounces' ],
            default: [ 'metric tonnes', 'kilograms', 'grams', 'milligrams', 'micrograms', 'imperial tons', 'US tons', 'stone', 'pounds', 'ounces' ],
        },
        misc: {
            text: [ 'dioptres', 'emus', 'katal', 'moles' ],
        },
        power: {
            text: [ 'British horsepower', 'donkeypower', 'kilowatts', 'metric horsepower', 'watts' ],
        },
        pressure: {
            text: [ 'atmospheres', /*'barries',*/ 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'Pascals', /*'poises',*/ 'pounds per square inch', 'torrs' ],
            default: [ 'atmospheres', 'bars', 'Pascals', 'pounds per square inch', 'torrs' ],
        },
        radiation_dosage: {
            text: [ 'grays', 'sieverts', 'rads', 'rems' ],
        },
        radioactivity: {
            text: [ 'becquerels', 'curies', 'rutherfords' ],
        },
        speed: {
            text: [ 'miles per hour', 'feet per second', 'meters per second', 'kilometers per hour', 'knots' ],
        },
        temperature: {
            text: [ 'Celsius', 'Fahrenheit', 'Kelvin', 'Rankine' ],
            default: [ 'Celsius', 'Fahrenheit', 'Kelvin' ],
        },
        time: {
            text: [ 'nanoseconds', 'microseconds', 'milliseconds', 'seconds', 'minutes', 'hours', 'days', 'weeks', 'months', 'years', 'decades', 'centuries', 'fortnights', 'halakim', 'helek', 'leap years', 'lunar cycles', 'lustrum', 'millennium', 'sidereal days', 'sidereal years', ],
            default: [ 'nanoseconds', 'microseconds', 'milliseconds', 'seconds', 'minutes', 'hours', 'days', 'weeks', 'months', 'years', 'decades', 'centuries' ],
        },
        torque: {
            text: [ 'foot-pound force', 'foot-poundal', 'inch-pound force', 'meter kilogram-force', 'Newton meter' ],  
        },
        unitless_numeric: {
            text: [ 'baker\'s dozens', 'dozens', 'googols', 'great gross', 'gross', 'percent', 'scores' ],
        },
        voltage: {
            text: [ 'volts' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', /*'English tierces', 'fluid barrels',*/ 'fluid drams', 'fluid ounces', 'full kegs', 'gills', 'Gross Register Tonnes', /*'half barrels', 'hogsheads', 'Imperial beer barrels',*/ 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'minims', 'pecks', 'pints', /*'puncheons', 'quarter barrels',*/ 'quarts', 'register tonnes', 'shots', /*'sixth barrels',*/ 'sticks of butter', 'tablespoons', 'teaspoons', /*'tierces',*/ 'US cups', 'US gallons', /*'wine firkins', 'wine rundlets'*/ ],
            default: [ 'liters', 'milliliters', 'US gallons', 'US quarts', 'US pints', 'US cups', 'US ounces', 'US tablespoons', 'US teaspoons', 'imperial gallons', 'imperial quarts', 'imperial pints', 'imperial cups', 'imperial ounces', 'imperial tablespoons', 'imperial teaspoons', 'cubic inches', 'cubic feet', 'cubic centimeters', 'cubic meters', ],
        },
        
    },
    
    'to_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
        acceleration: {
            text: [ 'meters per square second', 'millimeters per square second', 'centimeters per square second', 'inches per square second', 'feet per square second', 'yards per square second', 'miles per square second', 'kilometers per square second', 'Gravity', 'galileos' ],
        },
        angles: {
            text: [ 'arc minutes', 'arc seconds', 'degrees', 'radians', 'revolutions', 'turns' ],
        },
        area: {
            text: [ 'acres', 'ares', 'barns', 'cricket pitches', 'dunams', 'football fields', 'football pitches', 'hectares', 'pings', 'Planck areas', 'pyoung (KO)', 'sections', 'square centimeters', 'square feet', 'square inches', 'square kilometers', 'square meters', 'square millimeters', 'square yards', 'survey townships' ],
            default: [ 'square kilometers', 'square meters', 'square miles', 'square yards', 'square feet', 'square inches', 'hectares', 'acres', 'pyoung (KO)' ],
        },
        currency: {
            text: [ 'Algerian dinars', 'Argentine pesos', 'Australian cents', 'Australian dollars', 'Bahrain dinars', 'Bolivian bolivianos', 'Botswana pula', 'Brazil reais', 'British pounds', 'Brunei dollars', 'Bulgarian levs', 'Canadian cents', 'Canadian dollars', 'Cayman Islands dollars', 'Chilean pesos', 'Chinese yuan', 'Colombian pesos', 'Costa Rican colones', 'Croatian kuna', 'Czech koruna', 'Danish kroner', 'Dominican pesos', 'Egyptian pounds', 'Estonian kroons', 'Eurocents', 'Euros', 'Fiji dollars', 'Honduran lempiras', 'Hong Kong dollars', 'Hungarian forints', 'Indian rupees', 'Indonesian rupiahs', 'Israeli shekels', 'Jamaican dollars', 'Japanese yen', 'Jordanian dinars', 'Kazakh tenge', 'Kenyan shillings', 'Kuwaiti dinars', 'Latvian lats', 'Lebanese pounds', 'Lithuanian litas', 'Macedonian denari', 'Malaysian ringgits', 'Mauritian rupees', 'Mexican pesos', 'Moldovan leu', 'Moroccan dirhams', 'Namibian dollars', 'Nepalese rupees', 'Netherlands Antilles guilders', 'New Zealand dollars', 'Nicaraguan cordobas', 'Nigerian naira', 'Norwegian kroner', 'Omani rials', 'Pakistan rupees', 'Papua New Guinean kina', 'Paraguayan guaranies', 'Peruvian nuevos soles', 'Philippine pesos', 'Polish zloty', 'Qatar riyals', 'Romanian lei', 'Russian rubles', 'Salvadoran colones', 'Saudi riyals', 'Seychelles rupees', 'Sierra Leonean leones', 'Singapore dollars', 'Slovak koruna', 'South African rands', 'South Korean won', 'Sri Lankan rupees', 'Swedish kronor', 'Swiss francs', 'Taiwan dollars', 'Tanzanian shillings', 'Thai baht', 'Trinidad dollars', 'Tunisian dinar', 'Turkish liras', 'Ugandan shillings', 'Ukrainian grivnas', 'United Arab Emirates dirhams', 'Uruguayan pesos', 'U.S. cents', 'U.S. dollars', 'Uzbekistani sum', 'Venezuelan bolivares fuertes', 'Venezuelan bolivars', 'Vietnamese dong', 'Yemeni rials', 'Zambia kwacha' ],
        },
        data_transfer_rate: {
            text: [ 'bits per second (bps)', 'nibbles per second (nps)', 'bytes per second (Bps)', 'kilobytes per second (KB/s)', 'megabytes per second (MB/s)', 'gigabytes per second (GB/s)', 'terabytes per second (TB/s)', 'petabytes per second (PB/s)', 'bytes per hour (Bph)', 'kilobytes per hour (KB/h)', 'megabytes per hour (MB/h)', 'gigabytes per hour (GB/h)', 'terabytes per hour (TB/h)', 'petabytes per hour (PB/h)', ],
            default: [ 'bits per second (bps)', 'bytes per second (Bps)', 'kilobytes per second (KB/s)', 'megabytes per second (MB/s)', 'gigabytes per second (GB/s)', ],
        },
        density: { // https://en.wikipedia.org/wiki/Density
            text: [ 'kilograms per cubic meter', 'kilograms per liter', 'grams per milliliter', 'metric tonnes per cubic meter', ],  
        },
        digital_storage: {
            text: [ 'bits', 'nibbles', 'bytes', 'kilobytes', 'megabytes', 'gigabytes', 'terabytes', 'petabytes', 'binary kibibytes (KiB)', 'binary mebibytes (MiB)' ],
            default: [ 'bits', 'bytes', 'kilobytes', 'megabytes', 'gigabytes', 'terabytes', 'petabytes', ],
        },
        electric_capacitance: {
            text: [ 'farads' ],
        },
        electric_charge: {
            text: [ 'ampere hours', 'coulombs', 'Faradays' ],
        },
        electric_conductance: {
            text: [ 'mhos', 'siemens' ],
        },
        electric_current: {
            text: [ 'amperes', 'biots' ],
        },
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'tons of TNT', 'US therms', 'watt hours' ],
            default: [ 'joules', 'kilojoules', 'calories', 'kilocalories', 'watt hours', 'kilowatt hours', 'megawatt hours', 'British thermal units', 'US therms', 'foot-pounds' ],
        },
        flow_rate: {
            text: [ 'cubic feet per minute', 'cubic feet per second', 'liters per minute', 'liters per second' ],
        },
        force: {
            text: [ 'dynes', 'kilograms-force', 'newtons', 'pounds-force' ],
        },
        frequency: {
            text: [ 'hertz', 'kilohertz', 'megahertz', 'gigahertz', ],
        },
        fuel_economy: {
            text: [ 'kilometers per liter', 'liters per 100 kilometers', 'US miles per gallon', 'Imperial miles per gallon' ],
        },
        inductance: {
            text: [ 'henries' ],
        },
        length_and_distance: {
            text: [ 'Altuves', 'angstroms', 'Astronomical Units', 'ATA picas', /*'ATA points',*/ 'beard-seconds', 'chains', 'centimeters', 'Ciceros', 'cubits', 'Danish ells', /*'Didot points',*/ 'English ells', 'fathoms', 'feet' , 'Flemish ells', 'football fields', 'football pitches', 'French ells', 'furlongs', 'German ells', /*'Half Ironman Triathlon bikes', 'Half Ironman Triathlon runs', 'Half Ironman Triathlon swims', 'Half Ironman Triathlons',*/ 'hands', 'Imperial cables', /*'IN picas', 'IN Points',*/ 'inches', /*'indoor track lengths',*/ 'international cables', /*'Ironman Triathlon bikes', 'Ironman Triathlon runs', 'Ironman Triathlon swims', 'Ironman Triathlons',*/ 'itinerary stadions', 'kilometers', 'cricket pitches', 'light-days', 'light-hours', 'light-minutes', 'light-seconds', 'light-years', 'marathons', 'meters', 'Mickeys', 'microns', 'miles', /*'nails',*/ 'nautical leagues', 'nautical miles', /*'Olympic Pools', 'Olympic stadions', 'Olympic Triathlon bikes', 'Olympic Triathlon runs', 'Olympic Triathlon swims', 'Olympic Triathlons', 'outdoor track lengths',*/ 'Parsecs', 'Planck Lengths', 'Polish ells', /*'PostScript picas', 'PostScript points', 'Rack units',*/ 'rods', 'Scottish ells', 'sheppies', /*'Short Course Pools',*/ 'smoots', 'spans', /*'Sprint Triathlon bikes', 'Sprint Triathlon runs', 'Sprint Triathlon swims', 'Sprint Triathlons',*/ 'Swedish alns', /*'TeX picas', 'TeX points',*/ 'thou', /*'Truchet picas', 'Truchet points',*/ 'US cables', 'wiffles', 'yards' ],
            default: [ 'kilometers', 'meters', 'centimeters', 'millimeters', 'micrometers', 'nanometers', 'miles', 'yards', 'feet', 'inches', 'nautical miles' ],
        },
        light_intensity: {
            text: [ 'candelas', 'footcandles', 'lamberts', 'lumens', 'lux' ],
        },
        magnetic_flux: {
            text: [ 'gauss', 'maxwells', 'teslas', 'webers' ],
        },
        mass_and_weight: {
            text: [ 'AMU', 'atomic mass units', /*'Blintzes', 'butter firkins',*/ 'carats', 'drams', 'earth masses', 'English stone', /*'Farshimmelt Blintzes',*/ 'funt', /*'Furshlugginer Blintzes',*/ 'grains', 'grams', 'Imperial tons', 'Jupiter masses', 'kilograms', 'lunar masses', 'metric tonnes', 'micrograms', 'ounces', 'pennyweights', 'pood', 'pounds', 'short tons', 'slugs', /*'soap firkins',*/ 'solar masses', 'stones', 'Troy drams', 'Troy ounces' ],
            default: [ 'metric tonnes', 'kilograms', 'grams', 'milligrams', 'micrograms', 'Imperial tons', 'US tons', 'stone', 'pounds', 'ounces' ],
        },
        misc: {
            text: [ 'dioptres', 'emus', 'katal', 'moles' ],
        },
        power: {
            text: [ 'British horsepower', 'donkeypower', 'kilowatts', 'metric horsepower', 'watts' ],
        },
        pressure: {
            text: [ 'atmospheres', /*'barries',*/ 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'Pascals', /*'poises',*/ 'pounds per square inch', 'torrs' ],
            default: [ 'atmospheres', 'bars', 'Pascals', 'pounds per square inch', 'torrs' ],
        },
        radiation_dosage: {
            text: [ 'grays', 'sieverts', 'rads', 'rems' ],
        },
        radioactivity: {
            text: [ 'becquerels', 'curies', 'rutherfords' ],
        },
        speed: {
            text: [ 'miles per hour', 'feet per second', 'meters per second', 'kilometers per hour', 'knots' ],
        },
        temperature: {
            text: [ 'Celsius', 'Fahrenheit', 'Kelvin', 'Rankine' ],
            default: [ 'Celsius', 'Fahrenheit', 'Kelvin' ],
        },
        time: {
            text: [ 'nanoseconds', 'microseconds', 'milliseconds', 'seconds', 'minutes', 'hours', 'days', 'weeks', 'months', 'years', 'decades', 'centuries', 'fortnights', 'halakim', 'helek', 'leap years', 'lunar cycles', 'lustrum', 'millennium', 'sidereal days', 'sidereal years', ],
            default: [ 'nanoseconds', 'microseconds', 'milliseconds', 'seconds', 'minutes', 'hours', 'days', 'weeks', 'months', 'years', 'decades', 'centuries' ],
        },
        torque: {
            text: [ 'foot-pound force', 'foot-poundal', 'inch-pound force', 'meter kilogram-force', 'Newton meter' ],  
        },
        unitless_numeric: {
            text: [ 'baker\'s dozens', 'dozens', 'googols', 'great gross', 'gross', 'percent', 'scores' ],
        },
        voltage: {
            text: [ 'volts' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', /*'English tierces', 'fluid barrels',*/ 'fluid drams', 'fluid ounces', 'full kegs', 'gills', 'Gross Register Tonnes', /*'half barrels', 'hogsheads', 'Imperial beer barrels',*/ 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'minims', 'pecks', 'pints', /*'puncheons', 'quarter barrels',*/ 'quarts', 'register tonnes', 'shots', /*'sixth barrels',*/ 'sticks of butter', 'tablespoons', 'teaspoons', /*'tierces',*/ 'US cups', 'US gallons', /*'wine firkins', 'wine rundlets'*/ ],
            default: [ 'liters', 'milliliters', 'US gallons', 'US quarts', 'US pints', 'US cups', 'US ounces', 'US tablespoons', 'US teaspoons', 'imperial gallons', 'imperial quarts', 'imperial pints', 'imperial cups', 'imperial ounces', 'imperial tablespoons', 'imperial teaspoons', 'cubic inches', 'cubic feet', 'cubic centimeters', 'cubic meters', ],
        },
        
    },
    
}

// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions( sel, removeGrp ) {
    var len, groups, par;
//    if( removeGrp ) {
//        groups = sel.getElementsByTagName( 'optgroup' );
//        len = groups.length;
//        for( var i=len; i; i-- ) {
//            sel.removeChild( groups[ i-1 ] );
//        }
//    }
    len = sel.options.length;
    for( var i=len; i; i-- ) {
        par = sel.options[ i-1 ].parentNode;
        par.removeChild( sel.options[ i-1 ] );
    }
}

function appendDataToSelect( sel, obj, str ) { // str="" default
    // alert( index );
    
    // Default value for str (pre-ES2015)
    str = typeof str !== 'undefined' ? str : "";
    
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions( obj ) {
        var f = document.createDocumentFragment();
        var o;
        
        if( !document.getElementById( 'show_all_units' ).checked && obj.default ) {
            for( var i=0, len=obj.default.length; i<len; i++ ) {
                o = document.createElement( 'option' );
                o.appendChild( document.createTextNode( obj.default[i] ) );

                if( obj.value ) {
                    o.value = obj.value[i];
                } else {
                    o.value = obj.default[i].replace( ' ', '_' );
                }
                if( obj.default[i] == str ) {
                    o.selected = true;
                }

                f.appendChild( o );
            }
        } else {
            for( var i=0, len=obj.text.length; i<len; i++ ) {
                o = document.createElement( 'option' );
                o.appendChild( document.createTextNode( obj.text[i] ) );

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
        }
        return f;
    }
    
    if( obj.text ) {
        opts = addOptions( obj );
        f.appendChild( opts );
    } else {
        for( var prop in obj ) {
            if( obj.hasOwnProperty( prop ) ) {
                labels.push( prop );
            }
        }
        for( var i=0, len=labels.length; i<len; i++ ) {
            group = document.createElement( 'optgroup' );
            group.label = labels[ i ];
            f.appendChild( group );
            opts = addOptions( obj[ labels[ i ] ] );
            group.appendChild( opts );
        }
    }
    sel.appendChild( f );
    
}

