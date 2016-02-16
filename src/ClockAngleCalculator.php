<?php

    class ClockAngle
    {
        function makeClockAngle($input_hour)
        {
            if ($input_hour <= 6){
              return $input_hour * 30;
            }
            elseif ($input_hour > 6 && $input_hour < 12) {
              return ($input_hour - 6) * 30;
            }
           return 0;
        }
    }
?>
