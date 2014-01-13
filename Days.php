<?php
    $y = (int) isset($_GET['year']) ? $_GET['year'] : NULL;
    $m = (int) isset($_GET['month']) ? $_GET['month'] : NULL; 
    
    if ($y && $m){
        $num = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        
        echo "\t<select id=\"dob_day\" name=\"dob_d\">\n";
        
        for ($i=1; $i <= $num; $i++)
            echo "\t\t<option value=\"$i\">$i</option>\n";
        echo "\t</select>";
   }   
?>