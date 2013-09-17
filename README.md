alfred-wordpress-shortcodes
===========================

This will paste a Wordpress shortcode into the current document/browser window.

To use, type "wp service-name" into Alfred, for example "wp sound cloud" will paste the SoundCloud shortcode.

I've included most of the "stock" short codes available with Wordpress, but you'll get the most benefit out of this if you add your own (I've tried to keep the process for doing so as simple as possible).

To add a new shortcode, edit the file "shortcodes.php" in the workflow folder and add a line such as:

$shortcodes[]=array("title"=>"My Shortcode", "description"=>"do something awesome", "code"=>'[my-shortcode parameter="123"]');

If you want to edit (or remove) any of the sample shortcodes I've included, see the file "defaults.php"

Bonus feature: I've allowed for the possibility of using an icon for specific shortcode, if you want to do this, put the icon image file inside the workflow folder and change the code like so:

$shortcodes[]=array("title"=>"My Shortcode", "description"=>"do something awesome", "code"=>'[my-shortcode parameter="123"]', "icon"=>"my icon.png");
