function BinaryReversal($str){
  $bin = decbin($str);
  $result;
  if (strlen($bin) < 8){
      $bin = str_pad($bin, 8, "0", STR_PAD_LEFT);
      $arr_bin = str_split($bin);
      $rev_bin = implode("", array_reverse($arr_bin));
      $result = bindec($rev_bin);
      return $result;
  }
  $arr_bin = str_split($bin);
  $rev_bin = implode("", array_reverse($arr_bin));
  $result = bindec($rev_bin);
  return $result;
}

$num = 2447;
echo BinaryReversal($num);
