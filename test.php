<?php 

interface Colorful {
  public function color(): string;
}

enum Color: int implements Colorful {
  case red = 3;
  case yellow = 2;
  case blue = 1;

  public function color(): string {
    return match($this) {
      Color::red => 1,
      Color::yellow => "yellow",
      Color::blue => "blue"
    };
  }
}

function paint(Colorful $col) {
  echo $col->color() . "\n";
}


$input = "abcdefg";

echo $input[0];















