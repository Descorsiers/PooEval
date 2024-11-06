<?php 
function render($path, $data = [], $templates = false)
{
	if ($templates) {
		require "templates/$path.php";
	} else {
		require "views/$path.php";
	}
}
?>