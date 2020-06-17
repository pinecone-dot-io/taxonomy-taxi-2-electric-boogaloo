<?php

/**
 * Plugin Name:	Taxonomy Taxi 2 : Electric Boogaloo
 * Plugin URI:		
 * Description:	
 * Version:		0.6.1
 * Author:			postpostmodern, pinecone-dot-io
 * Author URI: 
 */

register_activation_hook(
    __FILE__,
    create_function("", '$ver = "5.3"; if( version_compare(phpversion(), $ver, "<") ) die( "This plugin requires PHP version $ver or greater be installed." );')
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
