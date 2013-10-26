<?php
namespace Convertors\XmlToJson;

use Convertors\Base\AbstractConverter;

class XmlConverter extends AbstractConverter
{
    private $data;

    public function __construct($xml_Data)
    {
        $xml_loader = new XmlLoader();
        $this->data = $xml_loader->load($xml_Data);
    }

    public function convert()
    {
        $json = json_encode($this->data);
        return $json;
    }
}