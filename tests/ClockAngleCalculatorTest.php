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

          function test_ClockAngleCalculator_overSix()
          {
            //Arrange
            $test_ClockAngleCalculator = new ClockAngle;
            $input = 8;

            //Act
            $result = $test_ClockAngleCalculator->makeClockAngle($input);

            //Assert
            $this->assertEquals(60, $result);
          }

          function test_ClockAngleCalculator_twelve()
          {
            //Arrange
            $test_ClockAngleCalculator = new ClockAngle;
            $input = 12;

            //Act
            $result = $test_ClockAngleCalculator->makeClockAngle($input);

            //Assert
            $this->assertEquals(0, $result);
          }

          function test_ClockAngleCalculatorM_minutes()
          {
            //Arrange
            $test_ClockAngleCalculatorM = new ClockAngle;
            $input = 50;

            //Act
            $result = $test_ClockAngleCalculatorM->makeClockAngleM($input);

            //Assert
            $this->assertEquals(120, $result);
          }

          function test_ClockAngleCalculatorF()
          {
            //Arrange
            $test_ClockAngleCalculatorF = new ClockAngle;
            $inputHour = 5;
            $inputMinute = 30;

            //Act
            $result = $test_ClockAngleCalculatorF->finalClockAngle();

            //Assert
            $this->assertEquals(30, $result);
          }
    }
?>
