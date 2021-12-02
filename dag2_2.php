<?php
  $fil = fopen("input.txt", "r");

  $posx = 0;
  $depth = 0;
  $aim = 0;

  $input = fgets($fil);

  while(! feof($fil)){
    $movement = explode(" ", $input);

    if($movement[0] == "forward"){
      $posx += $movement[1];
      $depth += $aim*$movement[1];
    }
    else if($movement[0] == "up"){
      $aim -= $movement[1];
    }
    else if($movement[0] == "down"){
      $aim += $movement[1];
    }

    $input = fgets($fil);
  }

  fclose($fil);

  echo "x: ".$posx." | depth: ".$depth."<br>";
  echo "Svar på oppgave 2: ".$posx*$depth;
?>
