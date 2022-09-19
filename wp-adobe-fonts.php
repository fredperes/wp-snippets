add_action( 'wp_enqueue_scripts', 'my-theme_enqueue_scripts', 20 );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'font-name', 'ADOBE-FONT-URL' );
} );
