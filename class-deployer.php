<?php

add_action( 'cli_init', 'curious' );
function curious() {
    public static $developer_plugins = [
        'yoast',
        'advanced-custom-fields', 
        'classic-editor', 
        'autoptimize',
        'duplicate-post',
        'https://github.com/elementor/elementor/archive/master.zip',
        'https://github.com/wp-premium/gravityforms/archive/master.zip',
        'user-role-editor',
        'wp-sitemap-page'
    ];


    protected function enable_dev_plugins() {
        WP_CLI::runcommand( 'wp plugin install ' . implode( ' ', self::$developer_plugins ). ' --activate --force' );
    }

    protected function enable_themes() {
        WP_CLI::runcommand( 'wp theme install generatepress --force' )
        WP_CLI::runcommand( 'wp theme install http://generatepress.com/api/themes/generatepress_child.zip --activate --force' )
    }

}
