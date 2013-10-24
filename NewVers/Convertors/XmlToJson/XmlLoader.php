<?php
namespace Convertors\XmlToJson;

class XmlLoader implements LoaderInterface
{
    public function load($xmlData)
    {
        $xml = simplexml_load_string($xmlData);
        if ($xml == false) {
            return "Not correct XML";
        } else {
            return $xml;
        }
    }

}