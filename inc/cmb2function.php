<?php
add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {



// this code for if the post type is not for gallery function will destroy

    $post_id = null;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if ( ! $post_id || get_post_format( $post_id ) != "gallery" ) {
        return;
    }




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