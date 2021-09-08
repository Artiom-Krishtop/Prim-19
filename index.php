<?php

// Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.  .

function maxDivisor($n,$m)
{
    if ($n < $m)
  {
    $num = $n;
  }else {
    $num = $m;
  }

  $maxDivisor = 1;

  for ($i=1; $i <=$num; $i++)
  {
    if (($n % $i) == 0 && ($m % $i) == 0)
    {
      if ($i > $maxDivisor)
      {
        $maxDivisor = $i;
      }
    }
  }
  return $maxDivisor;
}

$n = 84;
$m = 648;

$noc = ($n*$m)/ maxDivisor($n,$m);

echo 'наименьшее общее кратное чисел '.$n.' и '.$m.': '. $noc;
