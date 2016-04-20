![banner-772x250-text](https://cloud.githubusercontent.com/assets/6644259/14692630/73e93c7a-0793-11e6-8c24-16853779d739.png)

#JKL Unit Converter

* [Plugin Page](https://github.com/jekkilekki/plugin-jkl-unit-converter)
* [Author Page](http://www.aaronsnowberger.com/)

A simple Unit Converter widget that allows you to between various units. 
(Inspired by Google's Unit Converter.)

##Description

I'm an American expat in South Korea so I find I'm constantly wanting to convert 
between various units of measurement for different things. My family talks to me 
over Skype in Fahrenheit; recipes online call for 8 ounces of something; and I always 
wondered what various Korean house sizes and floor plans (pyoung) actually were in
square meters or square feet. 

Well now, I've created just the plugin to take care of all of those kinds of 
conversions. It currently includes functions for 14 different conversion formulas 
(like length, weight, temperature, speed, etc), but there are plans for about 20 
more! (For a full list of conversion formulas and units, see the plugin NOTES 
section below.) 

This plugin was inspired by Google's Unit Converter and includes the majority of 
the units [listed on their website](https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter) 
(including some extra silly ones I've found and a handful of Korea specific units 
of measurement).

Requires WordPress 3.5 and PHP 5.4 or later.

###Special Features

* Provides varying levels of complexity for conversion lists (Basic - 6 types, 
Default - 14 types)
* Provides a default list of the most common units for each list, but also a checkbox 
to enable ALL unit types (including some obscure ones from ancient history and fiction)
* Lists values are dynamically controlled with JavaScript so that as soon as you 
change list types, the units of measurement are immediately switched (without page 
refresh)

###Notes

* Multiple widgets are allowed at once (on the same Post/Page)
* Multiple shortcodes (on the same Post/Page) are disabled - multiple shortcodes
will display only ONE form
* On Posts/Pages with a shortcode, the widget will be disabled

###Planned Upcoming Features

* AJAX form submission to prevent page reload
* An Advanced List of conversion formulas - 32 types
* More conversion units supported
* Possibly allow users to select whether or not to display multiple forms in shortcodes
and/or widgets 

###Translations

* English (EN) - default
* Korean (KO) - upcoming

If you want to help translate the plugin into your language, please have a look 
at the `.pot` file which contains all definitions and may be used with a [gettext] 
editor.

If you have created your own language pack, or have an update of an existing one, 
you can send your [gettext .po or .mo file] to me so that I can bundle it in the
plugin.

###Contact Me

If you have questions about, problems with, or suggestions for improving this 
plugin, please let me know at the [WordPress.org support forums](http://wordpress.org/support/plugin/jkl-unit-converter)

Want updates about my other WordPress plugins, themes, or tutorials? Follow me 
[@jekkilekki](http://twitter.com/jekkilekki)

##Installation

###Automatic installation

1. Log into your WordPress admin
2. Go to `Plugins -> Add New`
3. Search for `JKL Unit Converter`
4. Click `Install Now`
5. Activate the Plugin

###Manual installation

1. Download the Plugin
2. Extract the contents of the .ZIP file
3. Upload the contents of the `jkl-unit-converter` directory to your `/wp-content/plugins` 
folder of your WordPress installation
4. Activate the Plugin from the `Plugins` page

###Documentation

Full documentation of the Plugin and its uses can (currently) be found at its 
[GitHub page](https://github.com/jekkilekki/plugin-jkl-unit-converter) 

##Screenshots

1. Unit Converter loaded in a Page via the shortcode

![screenshot-1](https://cloud.githubusercontent.com/assets/6644259/14622197/25a49ee2-0603-11e6-8f73-1d65bde8bb71.png)

2. Unit Converter Widget

![screenshot-2](https://cloud.githubusercontent.com/assets/6644259/14622199/2812e4c2-0603-11e6-9310-510dec80ce37.png)

##Acknowledgements

This plugin uses:

* A similar list of units as those [on the Google website](https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter) 

###License

This program is free software; you can redistribute it and/or modify it under the terms 
of the GNU General Public License as published by the Free Software Foundation; either 
version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this 
program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth 
Floor, Boston, MA 02110-1301 USA

##Changelog

###1.0

* Initial release
