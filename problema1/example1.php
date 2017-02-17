<?php
// load the document
// the root node is <info/> so we load it into $info
if(!$gastos = simplexml_load_file('documento.xml')){
  echo "No se ha podido cargar el archivo";
} else {
  // update
  foreach($gastos->gasto as $key => $value)
  {
      //$gastos->gasto['id_tipo'] = '1234567';
      $gastos->gasto->id_tipo = '12';
  }


  // save the updated document
  $gastos->asXML('documento2.xml');
}
?>
