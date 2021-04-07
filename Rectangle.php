<?php

include_once 'Shape.php';
include_once 'Resizeable.php';

class Rectangle extends Shape implements Resizeable
{
  public $width;
  public $height;

  public function __construct($name, $width, $height)
  {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->height * $this->width;
  }

  public function calculatePerimeter()
  {
    return ($this->height + $this->width) * 2;
  }

  public function resize($percent)
  {
    if ($percent > 0) {
      $this->height *= $percent / 100;
      $this->width *= $percent / 100;
    }
  }
}
