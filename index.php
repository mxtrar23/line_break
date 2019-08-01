<?php
function line_break($text,$characters){
  $output=array(); //salida
  $words = explode( ' ', $text); //separamos por espacio
  $TEMP_COUNTchars=0;//caracteres actuales por linea
  $TEMPchars='';
  foreach ($words as $key => $value) {//recorremos las palabras
    $count =strlen($value);
    if (($count+$TEMP_COUNTchars)<=$characters) {
      $TEMPchars.=$value.' ';
      $TEMP_COUNTchars+=($count+1);
    }else {
      array_push($output,$TEMPchars);
      $TEMPchars=$value;
      $TEMP_COUNTchars+$count;
    }
  }
  if (!empty($TEMPchars)) {
    array_push($output,$TEMPchars);
  }
  return $output;
}
var_dump(line_break("1234 123 12345 1234 123 12",10));
?>
