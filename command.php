<?php

if ( class_exists( 'WP_CLI' ) ) {
	require_once dirname( __FILE__ ) . '/inc/class-command.php';
	require_once dirname( __FILE__ ) . '/inc/class-formatter.php';
	WP_CLI::add_command( 'profile', 'runcommand\Profile\Command' );
}
