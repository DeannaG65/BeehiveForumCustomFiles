<?php

/*======================================================================
This is a donate page you can set up with information about how people can donate to your site.
You need to install it in your Beehive root directory.
Example: home/user/public_html/Beehive 
Example: home/user/public_html/forum
After you've installed the file in the directory you need to download a copy of the donate_nav.php file from the custom files repository. 
Rename donate_nav.php to nav.php, delete your current nav.php in your Beehive directory, then upload the new nav.php file to replace it.
Next you'll need to go to your styles folder and go to each style and edit the style.css.
You'll need to add .nav_donate to the style.css.
You'll probably want to style it the same as your other navtabs.
You'll also need to edit the donate page to say whatever you want it to say.
Scroll down for instructions on editing the donate page.
======================================================================*/

// Bootstrap
require_once 'boot.php';

// Required includes
require_once BH_INCLUDE_PATH . 'constants.inc.php';
require_once BH_INCLUDE_PATH . 'format.inc.php';
require_once BH_INCLUDE_PATH . 'forum.inc.php';
require_once BH_INCLUDE_PATH . 'header.inc.php';
require_once BH_INCLUDE_PATH . 'html.inc.php';
require_once BH_INCLUDE_PATH . 'session.inc.php';
// End Required includes

html_draw_top(
    array(
        'class' => 'window_title'
    )
);

echo "<h1>You want to help this site? Thank you!</h1>\n";

echo " <br />\n";
echo " <br />\n";
echo "<div align=\"center\">\n";
echo "  <table cellpadding=\"0\" cellspacing=\"0\" width=\"75%\">\n";
echo "    <tr>\n";
echo "      <td align=\"left\">\n";
echo "          <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"box\">\n";
echo "            <tr>\n";
echo "              <td align=\"left\">\n";
echo "                <table class=\"posthead\" width=\"100%\">\n";
echo "                  <tr>\n";
echo "                    <td valign=\"top\" align=\"left\" width=\"60%\" class=\"postbody\">Your donation message and instructions on how people can donate to your site is best placed in this area. </td>\n";

echo "                    <td valign=\"top\" align=\"left\" width=\"40%\" class=\"postbody\">Paypal now offers a link you can use on sites using software like Beehive to have payments and donations sent directly to you. This is a good spot for it.\n";

echo " <br />\n";
echo " <br />\n";

echo " <div style=\"align: left; width: 100%; height: 450px; word-wrap: normal; overflow: auto\">\n";
echo " If you belong to any affiliate programs you can display advertisers here for people to buy from to help support your site. If the list is longer than the allotted height, a scrollbar will appear allowing scrolling of the list. This keeps the donation page from becoming too high.\n";
echo " </div>\n";

echo "                   </td>\n";
echo "                  </tr>\n";
echo "                 </table>\n";
echo "                   </td>\n";
echo "                  </tr>\n";
echo "                 </table>\n";
echo "                   </td>\n";
echo "                  </tr>\n";
echo "                 </table>\n";
echo " </div>\n";

html_draw_bottom();
?>
