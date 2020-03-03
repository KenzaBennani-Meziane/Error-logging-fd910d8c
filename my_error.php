<?php
function countDown($number) {
	if ($number>10 || $number<0) {
		error_log ("Error! Something went wrong...", 3, "error.log");
	}
}

countDown(11);
?>