<?php

function up_register_blocks() {
    // Register block
    register_block_type( UP_PLUGIN_DIR . 'build/block.json');
}