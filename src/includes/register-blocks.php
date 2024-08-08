<?php

function up_register_blocks() {
    wp_register_script(
        'udemy-plus-blocks',
        plugins_url('index.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'index.js')
    );

    register_block_type('udemy-plus/fancy-header', array(
        'editor_script' => 'udemy-plus-blocks'
    ));
}