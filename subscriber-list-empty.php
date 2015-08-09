<?php
//Deleting all data stored in subscribers list

$f = @fopen("lpp_subscribers_list.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);

    echo ' All emails has been deleted!';
}

else{
	echo " Error occurred while deleting the emails! \n";

	echo "Please Try Again!";
}


?>