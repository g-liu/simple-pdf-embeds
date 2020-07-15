<?php
/**
 * Plugin Name:       Simple PDF Embeds
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Stupidly simple PDF embed plugin for Wordpress that leverages the browser's PDF rendering capabilities. Requires ACF.
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Geoffrey Liu
 * Author URI:        https://g-liu.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-pdf-embeds
 * Domain Path:       /languages
 */

if ( ! function_exists('acf_register_block_type') ) { die(); }

if ( ! function_exists( 'spe_register_pdf_block' ) ) {
    function spe_register_pdf_block() {
        acf_register_block_type( array(
            'name'            => 'pdf-embed',
            'title'           => __( 'PDF' ),
            'description'     => __( 'Displays an embedded PDF using the browser\'s PDF renderer' ),
            'render_template' => 'pdf-embed.php',
            'category'        => 'embed',
            'icon'            => 'media-document',
            'keywords'        => array( 'pdf', 'document', 'embed' ),
        ) );
    }
    spe_register_pdf_block();
}