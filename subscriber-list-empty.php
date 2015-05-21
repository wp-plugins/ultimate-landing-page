<?php
//Deleting all data stored in subscribers list

$f = @fopen("lpp_subscribers_list.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);

    echo ' All data has been cleared!';
}

else{
	echo " Error occurred while deleting the data! \n";

	echo "Please Try Again!";
}


?>