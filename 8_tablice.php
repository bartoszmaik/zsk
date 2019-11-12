<?php
//kolory
function showArray($tab){
  for($i=0; $i < count($tab); $i++){
    $elem = $i + 1;
    echo "Element $elem: $tab[$i]<br>";
  }
  echo '<hr>';
}
//tablice asocjacyjbne

$data = array(
  'name' => 'Janusz',
  'surname' => 'Nowak',
  'age' => 20
);

foreach($data as $value){
  echo "$value";
}


function ShowArrayAssoc($tab){
foreach($tab as $key => $value){
  echo "$key: $value<br>";
}
};

//ShowArrayAssoc($data);

$student = array(
  array('Anna', 'Nowak', 20),
  array('Tomasz'),
  array('Paweł', 'Nowak', 20, 'Poznań')
);

function tablica($tab){
  foreach($tab as $key => $value){
    echo "<br>";
    foreach($value as $key => $student){
      echo $student;
    }
  }
}

function tabfor($tab){
for($i=0; $i < count($tab); $i++){
  for($j=0; $j <count($tab[$i]); $j++){
    echo $tab[$i][$j]," ";
  }
  echo '<br>';
}
}

tabfor($student);
tablica($student);

echo '<hr>';
// Napisać funkcje wypisującą tablicę 3-wymiarową

  $tab = array(10,1,5,75,-4,1000,100);

  function tab3($tab){
    foreach($tab as $value){
      echo "$value<br>";
    }
  }

  //niemalejąco
sort($tab);
tab3($tab);

//nierosnąco
rsort($tab);
tab3($tab);

$tab2 = array("katarzyna", "anna", "Zenon", "Paweł");
echo '<hr>';
tab3($tab2);
sort($tab2);
tab3($tab2);

echo '<hr>';

//sortowanie tablicy asocjacyjnej


$tabAssoc = array(
  "surname" => "Nowak",
  "name" => "Andrzej",
  "city" => "Poznań",
  "age" => 30
);

tab3($tabAssoc);
asort($tabAssoc);
tab3($tabAssoc);
arsort($tabAssoc);
tab3($tabAssoc);

echo '<hr>';

//sortowanie tablicy wg klucza
ksort($tabAssoc);
tab3($tabAssoc);
krsort($tabAssoc);
tab3($tabAssoc);


//wyświetlanie tablicy

var_dump($tabAssoc);

print_r($tabAssoc);

echo "<pre>";
print_r($tabAssoc);
echo "</pre>";


echo "<pre>";
print_r($student);
echo "</pre>";

 ?>
