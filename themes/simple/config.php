<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$config = array(
    "name"        => "Simple",
    "features"    => array(
        "page",
        "email",
        "form"
    ),
    "slots"       => array(
        "page" => array(),
        "email" => array()
    )
);

return $config;