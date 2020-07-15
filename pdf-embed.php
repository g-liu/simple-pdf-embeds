<?php
	$file_id = get_field( 'file' );
	if ( ! $file_id ) return;

	$file_url = wp_get_attachment_url( $file_id );
?>
<object style="width:100%; height: 700px;" data="<?php echo $file_url ?>" type="application/pdf">
    <iframe src="<?php echo $file_url ?>"></iframe>
</object>