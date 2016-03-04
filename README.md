# Beehive Forum Mods
Layout and style modifications for Beehive Forum.

In order to use these modifications, you will need to download the latest versions of <a href="https://github.com/beehiveforum/" target="_blank">Matt Beale's Beehive Forum Software</a>, then install it on your site. Once you've done this, you can download these files and upload them to replace the needed files. If you are using a default Beehive style, there are also modified versions of them available at the <a href="http://beehiveforum.us/index.php" target"_blank">Beehive Styles Forum</a>.

These files do not change Beehive's layout, but only add some functionality choices for forum system owners. You do not have to use all or any of these files to use the styles you find at the <a href="http://beehiveforum.us/index.php" target"_blank">Beehive Styles Forum</a>.

thread_list.php introduces a break to keep upper and lower borders separated by a set distance.

nav.php offer more access control by hiding some navigation tabs from people not logged into your forum or forums system. Guests will only see Start, Messages, Login, and Register. After registering and logging into the forum or forums system, all tabs become visible. It also allows for individual styling of each navigation tab.

nav_2.php hides no navigation tabs, but the navigation tabs can still be styled individually if you like. If you use this file, you will need to change it's name to nav.php.

messages.inc.php introduces two CSS classes, message_posthead and message_postbody. The introduction of these two classes solved some styling issues for the right frame message board part of the forum.

The top.php file shows the forum name in the center of the forum's header, and must be uploaded into the style's folder.

Example: home/yoursite/public_html/Beehive/styles/style_folder <- This last folder is where you want it.
