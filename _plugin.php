<?php

/**
 * Plugin Name:	    Taxonomy Taxi: 2 Taxonomy 2 Taxi
 * Plugin URI:		
 * Description:	
 * Version:		    0.6.2
 * Author:			postpostmodern, pinecone-dot-io
 * Author URI:      https://rack.and.pinecone.website
 * Requires PHP:    7.0
 * License:         GPL-2.0+
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.txt
 */

register_activation_hook(
    __FILE__,
    @create_function("", '$ver = "7.0"; if( version_compare(phpversion(), $ver, "<") ) die( "This plugin requires PHP version $ver or greater be installed." );')
);

register_activation_hook(
    __FILE__,
    '\Taxonomy_Taxi\Two_Taxonomy_Two_Taxi\activate'
);

register_deactivation_hook(
    __FILE__,
    '\Taxonomy_Taxi\Two_Taxonomy_Two_Taxi\deactivate'
);

require __DIR__ . '/index.php';
