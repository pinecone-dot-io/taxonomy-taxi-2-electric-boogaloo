<?php

namespace Taxonomy_Taxi\Two_Taxonomy_Two_Taxi;

/**
 * Called on activation hook
 */
function activate()
{
	flush_rewrite_rules(FALSE);
}

/**
 * Called on deactivation hook
 */
function deactivate()
{
	flush_rewrite_rules(FALSE);
}
