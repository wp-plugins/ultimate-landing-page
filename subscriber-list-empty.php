<?php

$f = @fopen("lpp_subscribers_list.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);

    echo 'Success!';
}

else{
	echo "Some error occurred while emptying the file!";
}


?>