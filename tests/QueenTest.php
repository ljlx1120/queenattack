<?php

  require_once "src/Queen.php";

  class QueenTest extends PHPUnit_Framework_TestCase {

    function testCanAttack () {
      //Arrange
      $test_queen = new Queen(3,2);
      $a = 5;
      $b = 1;

      //Act
      $result = $test_queen->canAttack($a,$b);

      //Assert
      $this->assertEquals(false, $result);
    }

  }


?>
