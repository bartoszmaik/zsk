<?php

$tekst = <<< TEKST
  zsk - Zespół
  szkół
  komunikacji
TEKST;

echo "Przed wywołaniem funkcji nl2br: <br> $tekst";
echo "Po wywołaniem funkcji nl2br: <br>";
echo nl2br($tekst),'<br><br>';

//zamiana na małe litery
echo strtolower($tekst),'<br>';

//na duze litery
echo strtoupper($tekst),'<br>';

//zamiana pierwszej litery na dużą

$tekst = 'anna AgnieSZka tomasz';
echo ucfirst($tekst),'<br>';

//zamiana wszystkich pierwszych liter na duże
echo ucwords($tekst),'<br><br>';

###########################################


$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$kolumna = wordwrap($lorem, 40, '<br>');
echo $kolumna, '<hr>';

//usuwanie bialych znaków

$name = 'Kasia';
$name1 = '  Kasia ';

ob_clean(); //czyści zawartość bufora

echo 'Długość zmiennej \$name: '; //5
echo strlen($name),'<br>';

echo 'Długość zmiennej \$name1: '; //8 znakow
echo strlen($name1),'<br>';


echo strlen(ltrim($name1)); //6
echo strlen(rtrim($name1)); //7
echo strlen(trim($name1)),'<br><br>'; //5




//przeszukiwanie ciąów znaków

$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, 'tel');
echo $search,'<hr>';

$address1 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search1 = strstr($address1, 'tel', true); //wyświetla do znalezienia tel
echo $search1,'<hr>';

$address3 = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search3 = stristr($address3, 'Tel');  //stristr duża/mala litera
echo $search3,'<hr>';


$mail = strstr('zsk@gmail.com', '@');
echo $mail,'<br>'; //@gmail.com

$mail = strstr('zsk@gmail.com', 64); //64 - @ w ascii
echo $mail,'<br>'; //@gmail.com

######################################################

$ciąg = 'a';
$ciąg2 = 'aa';

echo strcmp($ciąg, $ciąg2); //-1
echo strcmp('zzz', 'zzz'); //0
echo strcmp('zza', 'zzz'); //-1
echo strcmp('zzz', 'zza'); //1
echo strcmp('zzza', 'zzz'); //1


//pozycja

$poz = strpos('abcdefg', 'cde');
echo $poz; //2

$poz = strpos('abcdabc', 'abc');
echo $poz,'<br><br>'; //0 - pierwszy ciąg

//zad 1
$text1 = 'abcdabcd';
$text2 = 'ab';

if(strpos($text1, $text2)===false){
echo '$text2 znajduje się w $text1';
}else {echo '$text2 nie znajduje się w $text1';}
echo '<hr>';


//przetwarzanie ciągów znaków

$replace = str_replace('%name%', 'Janusz', 'Mam na imię: %name%');
echo $replace,'<hr>';

$surname = substr('Janusz Kowalski', 7,5);
echo $surname; //kowal

//zamiana polskich znaków

$login = 'bączek';
$censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
$replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

$new_login = str_replace($censore,$replace, $login);
echo $new_login,'<hr';

//Napisz aplikacje cenzurującą zdanie podane przez użytkownika, użytkownik podaje dane w formularzu


echo <<< FORM
  <form method = "post">
    <input type = "text" name = "dane" placeholder = "Wpisz zdanie"><br><br>
    <input type = "submit" name = "" value = "Zatwierdź">
</form>
FORM;

if (isset($_POST['dane'])){
  $data = $_POST['dane'];
  echo $data;
}

$niedozwolone = array('czarny', 'biały');
$zamiana = ' $$$$ ';
$poprawne = str_ireplace($niedozwolone, $zamiana, $data);
echo "<h6>Błędne dane: $data</h6>";
echo "<h3>$poprawne</h3>";




?>
