
<?php 
include('../../../../wp-config.php');
global $wpdb;


echo $uploadedfile = $_FILES['filee'];
// die();
if ( ! function_exists( 'wp_handle_upload' ) ) {
   require_once( ABSPATH . 'wp-admin/includes/file.php' );
}


$upload_overrides = array( 'test_form' => false );

$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
echo $img_url = $movefile[url];
if ( $movefile && !isset( $movefile['error'] ) ) {
   "File is valid, and was successfully uploaded.\n";
  echo $file_check=var_dump( $movefile);
echo $img_url = $movefile[url];
} else {
   /**
    * Error generated by _wp_handle_upload()
    * @see _wp_handle_upload() in wp-admin/includes/file.php
    */
  echo $movefile['error'];
}
?>