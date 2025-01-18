<?php
/**
* Display the message in the management panel
* Show messages on the dashboard
 */
add_action('admin_notices', 'liamwp_admin_notice');
function liamwp_admin_notice()
{
    global $pagenow;

    // Only show this message on the admin dashboard and if asked for
    if ('index.php' === $pagenow)
    {
        echo '<div class="updated"><p>پشتیبانی و طراحی با❤️توسط <a href="https://liamwp.com">یوسف رستمی</a></p></div>';
    }
}
