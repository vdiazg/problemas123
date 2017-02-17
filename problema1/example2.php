<?php
$xml = simplexml_load_file("documento.xml"); //load file as SimpleXML object
$newXml = SimpleXMLElement(); // create new SimpleXML object

foreach ($xml->gasto as $d){ // change "$xml->doc" to the path to doc in your file
    $doc = $newXml->addChild("gasto"); // add <doc></doc>
    $doc->addChild("id_tipo", (string)$d->title); //add title child within doc
}
$new = fopen("documento2.xml", "w"); // open new file
fwrite($new, $newXml->asXML()); //write XML to new file using asXML method
fclose($new); // close the new file
?>
