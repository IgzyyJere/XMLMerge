<?php

//NE KORSITI OVO ZA MICANJE DISCOUNT PRICE
$xml = new DOMDocument();
$xml->load('cjene.xml');
$xpathXml = new DOMXPath($xml);

$elements = $xpathXml->query('prices/price/currency/amount/type[type="discountPrice"]');

    foreach ($elements as $element) {
      $element->parentNode->removeChild($element);
    }
echo $xml->saveXML();

?>
