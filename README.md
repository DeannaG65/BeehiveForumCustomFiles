# Beehive Forum Mods
Layout and style modifications for Beehive Forum.

In order to use these modifications, you need to download the latest version of <a href="https://github.com/beehiveforum/" target="_blank">Matt Beale's Beehive Forum Software</a>, then install it on your site. Once you've done this, you can download these files and upload them to replace the needed files. If you're using a default Beehive style, there are also modified versions of them available at our <a href="https://github.com/DeannaG65/Beehive-Styles" target"_blank">Beehive Styles Repository</a>. Installation instructions are in the repository. The styles in the repository have the forum name in the center of the header. At this time, default Beehive Forum Software doesn't have this feature.

If you don't want to set up your own Beehive forum site, you can apply for free hosting for a Beehive forum with Beehive's version of Ajax Chat at <a href="http://beehiveforum.us/" target"_blank">BeehiveForum.US</a>. Be sure to read the Terms of Service for the site. Not all applications are approved.

The files in this repository don't change Beehive's functionality. You don't have to use any of them to use the styles in the <a href="https://github.com/DeannaG65/Beehive-Styles" target"_blank">Beehive Styles Repository</a>. These files will just allow the repository styles to show to their best.

thread_list.php introduces a break to keep thread listing sections separated by a set distance. It seems different browsers don't always interpret vertical spacing using CSS the same. The break solves this periodic issue and allows more of the frame's background to show between the sections.

nav.php hides no navigation tabs, but the tabs can be individually styled.

nav_2.php offers more access control by hiding some navigation tabs from visitors not logged into your forum or forums system, as well as allowing for individual styling of the tabs. Guests will only see Start, Messages, Login, and Register. After registering and logging into the forum or forums system, all tabs become visible. If you use this file, you will need to change it's name to nav.php before uploading into your Beehive root folder.

Example:> home/yoursite/public_html/Beehive <- This last folder is where you want thread_list.php and nav.php.

messages.inc.php introduces two CSS classes, message_posthead and message_postbody. The introduction of these two classes solved some styling issues in other parts of the system. You want to upload this file and threads.inc.php into your include folder.

Example:> home/yoursite/public_html/Beehive/include <- This last folder is where you want messages.inc.php and threads.inc.php

The top.php file shows the forum name in the center of the forum's header, and must be uploaded into the style's folder.

Example:> home/yoursite/public_html/Beehive/styles/your-style-folder <- This last folder is where you want it.

forums.php, register.php, search.php, threads.inc.php, and thread_options.php solve bordering issues caused by using the same css class for both tables and the cells within those tables, as well as tables that may be within that table's cells and their cells. When working with colors alone, this doesn't seem to cause much of an issue. However, when working with images it can cause some ugly problems. Even using table.posthead or td.posthead and a page identifier doesn't solve these styling issues in all areas.

Example:> table class=posthead > td posthead > table posthead >td posthead

By changing the classes of the inner areas, this issue has been solved. We chose to change these extra posthead areas out for postbody. The reasoning we chose postbody is simple, it's primarily used to control text and link behavior within a set interior area.

Fix Example:> table class=posthead > td class=postbody > table class=postbody > td class=postbody

forums.php, register.php, search.php, and thread_options.php need to be uploaded into your Beehive root folder. 

Example: home/yoursite/public_html/Beehive <- This last folder is where you want them.
