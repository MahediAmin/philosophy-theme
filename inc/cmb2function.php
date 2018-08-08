<?php
add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {

    $prefix = '_philosophy_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'post_meta_data',
        'title'        => __( 'post-meta-data', 'philosophy' ),
        'object_types' => array( 'post' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );

    $cmb->add_field( array(
        'name' => __( 'image-gallery', 'philosophy' ),
        'id' => $prefix . 'image_gallery',
        'type' => 'file_list',
    ) );

}