<?php
function line_break($text,$characters){
  $output=array(); //salida
  $words = explode( ' ', $text); //separamos por espacio
  $TEMP_COUNTchars=0;//caracteres actuales por linea
  $TEMPchars='';
  foreach ($words as $key => $value) {//recorremos las palabras
    $count =strlen($value);//cantidad de caracteres de la palabra
    if (($count+$TEMP_COUNTchars)<=$characters) {
      $TEMPchars.=$value.' ';
      $TEMP_COUNTchars+=($count+1);
    }else {
      array_push($output,$TEMPchars);
      $TEMPchars=$value.' ';
      $TEMP_COUNTchars=$count+1;
    }
  }
  if (!empty($TEMPchars)) {
    array_push($output,$TEMPchars);
  }
  return $output;
}

//Example
$Text="Hola buen día, este es un párrafo de texto que será dividido por este código";
$Characters=20;
echo '<b>'.$Text.'</b><br>';
foreach (line_break($Text,$Characters) as $key => $value) {
  echo '-- '.$value.'<br>';
}
?>
