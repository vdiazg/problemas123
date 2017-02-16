<?php
if(!$xml = simplexml_load_file('documento.xml')){
  echo "No se ha podido cargar el archivo";
} else {
  // Seguimos con el string xml del ejemplo anterior Nuevo objeto SimpleXMLElement al que se le pasa el string xml
  //$usuarios = new SimpleXMLElement($xml);
  if($xml->gastos->gasto->id_tipo == '') {
    echo 'Vacio';
  } else {
    echo 'Con dato';
  }
//  echo htmlentities((string) $usuarios->gasto->id_tipo);
  // Podemos ver que si hacemos var_dump:
  //var_dump($usuarios->gasto->id_tipo);
}
