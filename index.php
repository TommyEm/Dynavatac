<?php

function getAvatar() {
	$files = glob('images/*.jpg');
	$random_index = array_rand($files);
	echo $files[$random_index];
}

?>

<image src="<?php getAvatar(); ?>" />
