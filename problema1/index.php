<?php
if(!$xml = simplexml_load_file('documento.xml')){
    echo "No se ha podido cargar el archivo";
} else {
    foreach ($xml as $documento){
        echo 'Rut Empresa: '.$documento->rut.'<br>';
        echo 'Neto: '.$documento->neto.'<br>';
        echo 'Iva: '.$documento->iva.'<br>';
        echo 'Total: '.$documento->total.'<br>';
        echo 'Excento: '.$documento->excento.'<br>';
        echo 'OtroExcento: '.$documento->otrosexcento.'<br>';


        /*------------------------------------------------------*/
        /*
          if($documento->iva != '' and
          $documento->neto != '' and
          $documento->total != ''){
            echo 'Tipo Documento: Factura tipo 31 <br>';
          }elseif($documento->iva == '' and
          $documento->neto != '' and
          $documento->excento != '' and
          $documento->total != ''){
            echo 'Tipo Documento: Factura Exenta tipo 32 <br>';
          }elseif($documento->iva == '' and
          $documento->excento == '' and
          $documento->otrosexcento == '' and
          $documento->neto != '' and
          $documento->retencion != '' and
          $documento->total ){
            echo 'Tipo Documento: Boleta de Honorario tipo 33 <br>';
          }
          */
        /*------------------------------------------------------*/
        echo '---------------------------------------------<br>';
    }
}

?>
