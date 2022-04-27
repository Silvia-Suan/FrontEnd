<?php
$now = getdate();
if($now["hours"] < 7)
echo "It is not time to be awake\n";
else if($now["hours"] < 13)
echo "It is time to work\n";
else if($now["hours"] < 16)
echo "It is time to have lunch\n";
else if($now["hours"] < 20)
echo "It is time to work\n";
else if($now["hours"] < 23)
echo "It is time to have dinner\n";
else
echo "It is time to sleep\n";
?>