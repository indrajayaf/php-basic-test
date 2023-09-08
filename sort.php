<form method="POST" action="">
  <input type="text" name="number" minlength="5" maxlength="5">
  <input type="submit" value="Submit">
</form>

<?php

if($_POST){
  $num = $_POST['number'];

  // $num =   48393; // if number is in string format, loop char by char using for loop
  $count = [];

  echo "num asli=".$num;
  echo "<br/>num%10=".$num%10;
  echo "<br/> num =". intval($num / 10);

  while($num > 0){
      if(!isset($count[$num % 10])) $count[$num % 10] = 0;
      $count[$num % 10]++;
      $num = intval($num / 10);
  }
  echo "<br/> count = "; print_r($count);

  $count2=$count;
  $new_num = 0;
  for($i = 9; $i >=0; --$i){
    if(!isset($count[$i])) continue;
    while($count[$i]-- > 0) $new_num = $new_num * 10 + $i; // you would rather concatenate here incase of string. 
  }

  echo "<br/>new_num=".$new_num;

  $new_num = 0;
  for($i = 0; $i <=9; $i++){
    if(!isset($count2[$i])) continue;
    //echo "count i= ". $count2[$i];
    while($count2[$i]-- > 0) $new_num = $new_num * 10 + $i; // you would rather concatenate here incase of string. 
  }

  echo "<br/>new_num_ASC=".$new_num;
}