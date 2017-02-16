<?php
$users_array = [];
$Array_new = [];
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
    $id = $documento->id;
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
    $valores = array(
      'id' => $documento->id,
      'folio' => $documento->folio
    );
    array_push($users_array, ('id' => $documento->id));
  }
  var_dump($users_array);
  //

}
/*
//var_dump($users_array);
//function defination to convert array to xml
function array_to_xml($array, &$xml_user_info) {
  foreach($array as $key => $value) {
    if(is_array($value)) {
      if(!is_numeric($key)){
        $subnode = $xml_user_info->addChild("gasto");
        array_to_xml($value, $subnode);
      }else{
        $subnode = $xml_user_info->addChild("gasto");
        array_to_xml($value, $subnode);
      }
    }else {
      $xml_user_info->addChild("$key",htmlspecialchars("$value"));
    }
  }
}

//creating object of SimpleXMLElement
$xml_user_info = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><gastos></gastos>');

//function call to convert array to xml
array_to_xml($users_array,$xml_user_info);

//saving generated xml file
$xml_file = $xml_user_info->asXML('users.xml');

//success and error message based on xml creation
if($xml_file){
  echo 'XML file have been generated successfully.';
}else{
  echo 'XML file generation error.';
}
*/
