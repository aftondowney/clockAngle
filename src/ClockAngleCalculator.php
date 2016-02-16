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

        function makeClockAngleM($input_minute)
        {
            if ($input_minute <= 30){
              return $input_minute * 6;

            }
            elseif ($input_minute > 30 && $input_minute < 60) {
              return ($input_minute - 30) * 6;

            }
           return 0;
        }

        function finalClockAngle()
        {
          $hour = $this->makeClockAngle($input_hour);
          $minute = $this->makeClockAngleM($input_minute);

          if ($hour > $minute){
            return $hour - $minute;
          }
          elseif ($minute > $hour){
            return $minute - $hour;
          }
          return 0;

        }
    }
?>
