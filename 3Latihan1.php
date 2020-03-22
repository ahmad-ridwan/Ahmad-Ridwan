<?php
$ball = 'jingga';
if ($ball == 'merah') { 
 $redbox = $ball; 
} elseif ($ball == 'kuning') { 
 $yellowbox = $ball; 
} elseif ($ball == 'biru') { 
 $bluebox = $ball; 
} elseif ($ball == 'hijau') { 
 $greenbox = $ball; 
} elseif ($ball == 'jingga') { 
 $purplebox = $ball; 
} else { 
 $colorlessbox = $ball; 
{echo 'red box : $redbox <br>\n';
echo 'yellow box : $yellowbox <br>\n';
echo 'blue box : $bluebox <br>\n'; 
echo "green box : $greenbox <br>\n"; 
echo "purple box : $purplebox <br>\n"; 
echo "colorless box : $colorlessbox <br>\n";}}
?>