=== JKL Unit Converter ===
Contributors:           jekkilekki
Plugin Name:            JKL Unit Converter
Plugin URI:             https://github.com/jekkilekki/plugin-jkl-unit-converter
Author:                 Aaron Snowberger
Author URI:             http://www.aaronsnowberger.com/
Donate link:            https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=567MWDR76KHLU
Tags:                   content, custom, shortcode, widget, units, measurements, temperature, length, distance, volume, weight, mass, area, speed, calculator, converter
Requires at least:      3.5
Tested up to:           4.5
Stable tag:             1.0.0
Version:                1.0.0
License:                GPLv2 or later
License URI:            http://www.gnu.org/licenses/gpl-2.0.html

A simple Unit Converter widget that allows you to between various units. 
(Inspired by Google's Unit Converter.)

== Description ==

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

= Usage = 
Use the shortcode `[jkluc]` or `[jkl-unit-converter]` in your Page or Post. This will 
insert the converter at the TOP of the content. Also, only ONE instance of the shortcode 
will run per page. (See "Upcoming Features" section for possible updates to allow more options.)

= Special Features = 
* Provides varying levels of complexity for conversion lists (Basic - 6 types, 
Default - 14 types)
* Provides a default list of the most common units for each list, but also a checkbox 
to enable ALL unit types (including some obscure ones from ancient history and fiction)
* Lists values are dynamically controlled with JavaScript so that as soon as you 
change list types, the units of measurement are immediately switched (without page 
refresh)

= Notes =
* Multiple widgets are allowed at once (on the same Post/Page)
* Multiple shortcodes (on the same Post/Page) are disabled - multiple shortcodes
will display only ONE form
* On Posts/Pages with a shortcode, the widget will be disabled

= Upcoming Features = 
* AJAX form submission to prevent page reload
* An Advanced List of conversion formulas - 32 types
* More conversion units supported
* User selection options:
  * Ability to place the shortcode at desired point IN the content
  * Ability to enable multiple converters per page
  * Ability to set the default units or conversion functions
  * Ability to disable other conversion functions or buttons (only allow the desired ones)

= Translations = 
* English (EN) - default
* Korean (KO) - upcoming

If you want to help translate the plugin into your language, please have a look 
at the `.pot` file which contains all definitions and may be used with a [gettext] 
editor.

If you have created your own language pack, or have an update of an existing one, 
you can send your [gettext .po or .mo file] to me so that I can bundle it in the
plugin.

= Contact Me = 
If you have questions about, problems with, or suggestions for improving this 
plugin, please let me know at the [WordPress.org support forums](http://wordpress.org/support/plugin/jkl-unit-converter)

Want updates about my other WordPress plugins, themes, or tutorials? Follow me 
[@jekkilekki](http://twitter.com/jekkilekki)

== Installation ==

= Automatic installation =
1. Log into your WordPress admin
2. Go to `Plugins -> Add New`
3. Search for `JKL Unit Converter`
4. Click `Install Now`
5. Activate the Plugin

= Manual installation =
1. Download the Plugin
2. Extract the contents of the .ZIP file
3. Upload the contents of the `jkl-unit-converter` directory to your `/wp-content/plugins` 
folder of your WordPress installation
4. Activate the Plugin from the `Plugins` page

= Documentation = 
Full documentation of the Plugin and its uses can (currently) be found at its 
[GitHub page](https://github.com/jekkilekki/plugin-jkl-unit-converter) 

== Frequently Asked Questions ==

= Tips =
As a general rule, it is always best to keep your WordPress installation and all 
Themes and Plugins fully updated in order to avoid problems with this or any other 
Themees or Plugins. I regularly update my site and test my Plugins and Themes with
the latest version of WordPress.

= How can I change the style of the plugin to match my website? =
Each element within the `conversion_form` contains its own unique CSS identifier, 
allowing you to hook into those in your own Custom CSS stylesheet.

To easily find out which classes control which elements, simply open your site in 
a modern browser (Google Chrome, Firefox, Opera, or Internet Explorer 9 or later) 
and right-click on the element you wish to style. Then find `Inspect` in the pop-up 
contextual menu.

= Why don't the lists show units immediately upon page load? =
The unit lists are dynamically controlled by JavaScript (which loads at the end 
of the page load). So, if your site has large images or other things that cause 
the page to load more slowly than usual, this will also cause the script to load 
later and delay the appearance of unit options in the select dropdowns.

= Why doesn't the Sidebar Widget also show up on a Page using the shortcode? =
Simple: it's best to not allow TWO separate instances of the Unit Converter 
to run on the same page. It's overkill. You only need one per page. The same is 
true for multiple shortcodes on one page. Only ONE instance of the Unit Converter
should be used on any one Page.

= Why does my Page reload every time I click the Convert button? =
There is currently no AJAX functionality implemented by this plugin to maintain
the state of the Page and dynamically calculate and show the answer without a 
reload. This is a planned feature for an upcoming release.

= Why do I have to scroll down the Page to see my results after conversion? =
Currently, the plugin doesn't remember your page position when you submit the 
conversion form, so because the form completely reloads the page, it thinks this 
is the first time you're loading, so it will load to the top of the page. 

Remembering page position is a planned upcoming feature, but it will be 
unnecessary if/when I implement dynamic calculations with AJAX.

= Why do some of the Unit Converter fields appear out of place? =
For the most part, it depends on how your Theme styles those elements. I did my 
best to style the form very simply and plainly, but some elements may appear out
of place in your installation due to your Theme's default styles. In order to fix
this, add some Custom CSS (preferrably using Jetpack's Custom CSS feature, or 
another that doesn't require modifying the Theme or Plugin files). 

See the first question above for more info on how to do create Custom CSS for the plugin.

= Can you ADD / REMOVE / CHANGE features of the plugin? =
Sure, I'm always open to suggestions. Let me know what you're looking for. Feel
free to open a GitHub Issue on the [plugin repository](https://github.com/jekkilekki/plugin-jkl-unit-converter)
to let me know the specific features or problems you're having.

== Screenshots ==

1. Unit Converter loaded in a Page via the shortcode
2. Unit Converter Widget

== Other Notes ==

= Support = 
[Click here to visit the forum for this plugin](https://wordpress.org/support/plugin/jkl-unit-converter)

= Acknowledgements = 
This plugin uses:

* A similar list of units as those [on the Google website](https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter) 

= License = 
This program is free software; you can redistribute it and/or modify it under the terms 
of the GNU General Public License as published by the Free Software Foundation; either 
version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this 
program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth 
Floor, Boston, MA 02110-1301 USA

== Changelog ==

= 1.0 =
* Initial release
