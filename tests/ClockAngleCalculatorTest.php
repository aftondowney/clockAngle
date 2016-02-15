<?php

    require_once "src/ClockAngleCalculator.php";

    class ClockAngleCalculator extends PHPUnit_Framework_TestCase
    {
          function test_ClockAngleCalculator_hour()
          {
            //Arrange
            $test_ClockAngleCalculator = new ClockAngle;
            $input = 1;

            //Act
            $result = $test_ClockAngleCalculator->makeClockAngle($input);

            //Assert
            $this->assertEquals(30, $result);
          }
    }
?>
