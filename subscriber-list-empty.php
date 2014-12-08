<?php

$f = @fopen("lpp_subscribers_list.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);

    echo ' Your List have been  Successfully deleted!';
}

else{
	echo "Some error occurred while emptying the file!";

	echo "Try Again!";
}


?>