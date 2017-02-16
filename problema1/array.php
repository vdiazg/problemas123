<?php

//$stack = array('a', 'b', 'c');
//array_push($stack, array('d', 'e', 'f'));
//print_r($stack);

$stack = array();
//array_push($stack, array('d', 'e', 'f'));


if(!$xml = simplexml_load_file('documento.xml')){
  echo "No se ha podido cargar el archivo";
} else {
  foreach ($xml as $documento){
    /*------------------------------------------------------*/
    if($documento->iva != '' and $documento->neto != '' and $documento->total != ''){
      $tipo_documento = 31;
      //array_push($Array_new,['id_tipo' => '31']);
    }elseif($documento->iva == '' and $documento->neto != '' and $documento->excento != '' and $documento->total != ''){
      $tipo_documento = 32;
      //array_push($Array_new,['id_tipo' => '32']);
    }elseif($documento->iva == '' and $documento->excento == '' and $documento->otrosexcento == '' and $documento->neto != '' and $documento->retencion != '' and $documento->total != ''){
      $tipo_documento = 33;
      //array_push($Array_new,['id_tipo' => '33']);
    }

    /*------------------------------------------------------*/
    echo 'ID: '.$documento->id.'<br>';
    echo 'Folio: '.$documento->folio.'<br>';
    echo 'Fecha: '.$documento->fecha.'<br>';
    echo 'Tipo Documento: '.$tipo_documento.'<br>';
    echo 'Iva: '.$documento->iva.'<br>';
    echo 'Neto: '.$documento->neto.'<br>';
    echo 'Rut Empresa: '.$documento->rut.'<br>';
    echo 'Retención: '.$documento->retencion.'<br>';
    echo 'Excento: '.$documento->excento.'<br>';
    echo 'OtroExcento: '.$documento->otrosexcento.'<br>';
    echo 'Total: '.$documento->total.'<br>';
    echo 'Creación: '.$documento->creacion.'<br>';
    echo '--------------------------------------------- <br>';
    /*$valores = array(
    'id' => $documento->id,
    'folio' => $documento->folio
  );*/
  array_push($stack, [$documento]);

}
print_r($stack);
//

}
?>
