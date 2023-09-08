<form method="POST" action="">
  <input type="text" name="number" minlength="5" maxlength="5">
  <input type="submit" value="Submit">
</form>

<?php

if($_POST){
  $num = $_POST['number'];
  $count = [];

  while($num > 0){
      if(!isset($count[$num % 10])) $count[$num % 10] = 0;
      $count[$num % 10]++;
      $num = intval($num / 10);
  }

  $new_num = 0;
  for($i = 9; $i >=0; --$i){
    if(!isset($count[$i])) continue;
    while($count[$i]-- > 0) $new_num = $new_num * 10 + $i; 
  }

  echo "Urutan bilangan dari besar ke kecil = ".$new_num;
}