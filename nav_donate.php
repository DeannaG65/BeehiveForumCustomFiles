<?php

/*======================================================================
This version of the nav.php includes a Donate tab and limits guest access.
Guests see Start, Messages, Login, Donate, and Register only.

Copyright Project Beehive Forum 2002

This file is part of Beehive Forum.

Beehive Forum is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

Beehive Forum is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Beehive; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
USA
======================================================================*/

// Bootstrap
require_once 'boot.php';

// Required includes
require_once BH_INCLUDE_PATH . 'ajax_chat.inc.php';
require_once BH_INCLUDE_PATH . 'cache.inc.php';
require_once BH_INCLUDE_PATH . 'constants.inc.php';
require_once BH_INCLUDE_PATH . 'forum.inc.php';
require_once BH_INCLUDE_PATH . 'forum_links.inc.php';
require_once BH_INCLUDE_PATH . 'html.inc.php';
require_once BH_INCLUDE_PATH . 'session.inc.php';
require_once BH_INCLUDE_PATH . 'user.inc.php';
// End Required includes

cache_disable();

html_draw_top(
    array(
        'class' => 'navpage',
        'js' => array(
            'js/forumlinks.js'
        )
    )
);

echo "<div class=\"navleft\">\n";

if (forum_check_webtag_available($webtag)) {

}

if (!session::logged_in()) {
    echo "&nbsp;<span class=\"nav_start\"><a href=\"start.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Start"), "</a></span>&nbsp;|&nbsp;\n";
    echo "<span class=\"nav_messages\"><a href=\"discussion.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Messages"), "</a></span>&nbsp;|&nbsp;\n";
    echo "<span class=\"nav_login\"><a href=\"index.php?webtag=$webtag&amp;final_uri=logon.php%3Fwebtag%3D$webtag\" target=\"", html_get_top_frame_name(), "\">", gettext("Login"), "</a></span>&nbsp;|&nbsp;\n";
    echo "<span class=\"nav_register\"><a href=\"register.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Register"), "</a></span>&nbsp;|&nbsp;\n";
    echo "<span class=\"nav_donate\"><a href=\"donate.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Donate"), "</a></span>&nbsp;|&nbsp;\n";

} else {


    echo "&nbsp;&nbsp;<span class=\"nav_start\"><a href=\"start.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Start"), "</a></span>&nbsp;|&nbsp;\n";
    echo "<span class=\"nav_messages\"><a href=\"discussion.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Messages"), "</a></span>&nbsp;|&nbsp;\n";

    if (forum_get_setting('ajax_chat_enabled', 'Y')) {

        if (($ajax_chat_online_user_count = ajax_chat_online_user_count())) {
            echo "<span class=\"nav_chat\"><a href=\"chat/index.php\" target=\"_blank\">", gettext("Chat"), "&nbsp;(", $ajax_chat_online_user_count, ")</a></span>&nbsp;|&nbsp;\n";
        } else {
            echo "<span class=\"nav_chat\"><a href=\"chat/index.php\" target=\"_blank\">", gettext("Chat"), "&nbsp;(0)</a></span>&nbsp;|&nbsp;\n";
        }
    }

    if (forum_get_setting('show_links', 'Y')) {
        echo "<span class=\"nav_links\"><a href=\"links.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Links"), "</a></span>&nbsp;|&nbsp;\n";
    }

if (forum_get_setting('show_pms', 'Y')) {
   echo " <span class=\"nav_inbox\"><a href=\"pm.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Inbox"), "</a></span>&nbsp;|&nbsp;\n";
               }

if (forum_check_webtag_available($webtag)) {
    echo "<span class=\"nav_mycontrols\"><a href=\"user.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("My Controls"), "</a></span>&nbsp;|&nbsp;\n";
}

if (forums_get_available_count() > 1 || !forum_get_default()) {
    echo "<span class=\"nav_myforums\"><a href=\"forums.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("My Forums"), "</a></span>&nbsp;|&nbsp;\n";
}

    echo "<span class=\"nav_donate\"><a href=\"donate.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Donate"), "</a></span>&nbsp;|&nbsp;\n";

if (session::check_perm(USER_PERM_FORUM_TOOLS, 0) || session::check_perm(USER_PERM_ADMIN_TOOLS, 0) || session::get_folders_by_perm(USER_PERM_FOLDER_MODERATE)) {
    echo "<span class=\"nav_admin\"><a href=\"admin.php?webtag=$webtag\" target=\"", html_get_frame_name('main'), "\">", gettext("Admin"), "</a></span>&nbsp;|&nbsp;\n";
}


    echo "<span class=\"nav_logout\"><a href=\"logout.php?webtag=$webtag\" target=\"", html_get_top_frame_name(), "\">", gettext("Logout"), " : ", $_SESSION['LOGON'], "</span></a>\n";
}


echo "</div>\n";
echo "<div class=\"navright\">\n";

echo forum_links_draw_dropdown('openForumLink');

echo "</div>\n";
echo "<div style=\"clear: both\"></div>\n";

html_draw_bottom();
