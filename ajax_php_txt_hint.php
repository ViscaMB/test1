<?php
$a[]  = 'mo';
$a[]  = 'jeff';
$a[]  = 'klaas';
$a[]  = 'hasan';
$a[]  = 'elyesa';
$a[]  = 'tjeerd';
$a[]  = 'oralando';
$a[]  = 'lorenzo';
$a[]  = 'furkan';
$a[]  = 'achraf';

$q = $_REQUEST["q"];

$hint = '';

if ($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if ($hint == '') {
          $hint = $name;
        }else {
          $hint = ', $name';
        }
      }
    }

}
echo $hint === '' ? 'no sugestion' : $hint;
?>
