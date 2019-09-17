<?php
  //operatory

  $potega = 2**10;

  echo $potega,'<br>';


  //operatory bitowe: and &, or |, not ~, xor ^, przesunięcie bitowe w lewo >>, przesunęcie bitowe w prawo <<

  $dziesiec = 0b1010;
  echo $dziesiec,'<br>'; //10

  $dziesiec = $dziesiec >> 1; //101 (2)
  echo $dziesiec,'<br>'; //5

  $dziesiec = $dziesiec << 2; //10100 (2)
  echo $dziesiec,'<br>'; //20


  //operatory Logiczne
  // and, &&, or, ||, xor !

  //Sprawdź czy w sklepie kupisz rower lub hulajnoge
  //otwarty, pieniądze, rower lub hulajnoga

  $sklep = 'otwarty';
  $pieniadze = 1800;
  $romet = false;
  $hulajnoga = true;

  if($sklep == 'otwarty' && $pieniadze > 1500 && ($romet || $hulajnoga)){
    if ($romet) {
      echo "Kupiłeś rower";

    } else if($hulajnoga) {
      echo "Kupiłeś hulajnogę";
    }
    else echo "Nic nie kupiłeś";
  }

  echo "<hr>";

  $a = 1.0;
  $b = 1;

  if($a === $b) {
    echo "Identyczne";
  }else {
    echo "Różne";
  }

  $x = 3;
  $y = 2;
  $wynik = $x <=> $y; //lewa większa 1, równe 0, Prawa większa -1

  echo $wynik;


echo gettype($x); //integer
echo gettype($y); //doubleval


$x = 2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y = $x++;
echo $y; // 4
$y = ++$x;
echo $y; // 6
echo ++$y; // 7
?>
