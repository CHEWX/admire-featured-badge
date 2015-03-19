<?php

    /*

        Plugin Name: Admire the Web Featured Badge
        Plugin URI: http://www.admiretheweb.com
        Description: Adds a simple featured website ribbon to the homepage of your website.
        Version: 1.0
        Author: Tom Hopcraft
        Author URI: http://www.chewx.co.uk

        License: GNU General Public License v2.0
        License URI: http://www.opensource.org/licenses/gpl-license.php

    */

    $admire_homepage = $admire_host = $_SERVER['HTTP_HOST'];
    $admire_current_page = $admire_homepage . $_SERVER['REQUEST_URI'];

    $admire_homepage = str_replace("/", "", $admire_homepage);
    $admire_current_page = str_replace("/", "", $admire_current_page);

    if($admire_homepage == $admire_current_page):

    ?>

        <a href="http://admiretheweb.com?ref=<?php echo $admire_homepage; ?>" style="position:absolute; top:80px; left:0; z-index:99;" target="_blank">
            <img src="http://<?php echo $admire_host; ?>/wp-content/plugins/admire-featured-badge/assets/img/admire-the-web-badge.png" width="125" alt="Admire the Web - The Very Best Web Design Inspiration" />
        </a>

    <?

    endif;