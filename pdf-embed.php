<?php
	$filepath = get_field( 'file' );
	if ( ! $filepath ) return;
?>
<object style="width:100%; height: 700px;" data="<?php echo $filepath ?>" type="application/pdf">
    <iframe src="<?php echo $filepath ?>"></iframe>
</object>