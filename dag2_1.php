
<?php
  $fil = fopen("input.txt", "r");

  $posx = 0;
  $posy = 0;

  $input = fgets($fil);

  while(! feof($fil)){
    $movement = explode(" ", $input);

    if($movement[0] == "forward"){
      $posx += $movement[1];
    }
    else if($movement[0] == "up"){
      $posy -= $movement[1];
    }
    else if($movement[0] == "down"){
      $posy += $movement[1];
    }

    $input = fgets($fil);
  }

  fclose($fil);

  echo "x: ".$posx." | y: ".$posy."<br>";
  echo "Svar på oppgave 1: ".$posx*$posy;    
?>
