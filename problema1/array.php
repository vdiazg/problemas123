<?php
$stack = array();
if(!$xml = simplexml_load_file('documento.xml')){
  echo "No se ha podido cargar el archivo";
} else {
  foreach ($xml->gasto as $documento){
    /*------------------------------------------------------*/
    if($documento->iva != '' and $documento->neto != '' and $documento->total != ''){
      $documento->retencion = '0';
      $documento->excento = '0';
      $documento->otrosexcento = '0';
      $documento->id_tipo = '31';
    }elseif($documento->iva == '' and $documento->neto != '' and $documento->excento != '' and $documento->total != ''){
      $documento->iva = '0';
      $documento->retencion = '0';
      $documento->id_tipo = '32';
    }elseif($documento->iva == '' and $documento->excento == '' and $documento->otrosexcento == '' and $documento->neto != '' and $documento->retencion != '' and $documento->total != ''){
      $documento->iva = '0';
      $documento->excento = '0';
      $documento->otrosexcento = '0';
      $documento->id_tipo = '33';
    }
    /*------------------------------------------------------*/
    echo '<p style="font-size: 80%;">ID: '.$documento->id.'<br>';
    echo 'Folio: '.$documento->folio.'<br>';
    echo 'Fecha: '.$documento->fecha.'<br>';
    echo 'Tipo Documento: '.$documento->id_tipo.'<br>';
    echo 'Iva: '.$documento->iva.'<br>';
    echo 'Neto: '.$documento->neto.'<br>';
    echo 'Rut Empresa: '.$documento->rut.'<br>';
    echo 'Retención: '.$documento->retencion.'<br>';
    echo 'Excento: '.$documento->excento.'<br>';
    echo 'OtroExcento: '.$documento->otrosexcento.'<br>';
    echo 'Total: '.$documento->total.'<br>';
    echo 'Creación: '.$documento->creacion.'<p>';


    array_push($stack, $documento);

  }
  $xml->asXML('documento2.xml');
}
echo '---------------------------------------------';
print '<pre>'.print_r($stack, TRUE).'</pre>';
?>
