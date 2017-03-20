<?php
  class Queen {
    public $x;
    public $y;

    function __construct ($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }

    function canAttack ($a, $b) {

      if(($this->x != $a)&&($this->y != $b)){
        if (abs($this->x - $a) == abs($this->y - $b)){
          echo "true";
        } else {
          echo "false";
        };
      } elseif (($this->x == $a) || ($this->y == $b)) {
        echo "true";
      } else {
        echo "false";
      }
    }

  }
?>
