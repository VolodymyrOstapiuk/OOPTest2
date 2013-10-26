<?php
namespace Convertors\XmlToJson;

use Convertors\Base\LoaderInterface;

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