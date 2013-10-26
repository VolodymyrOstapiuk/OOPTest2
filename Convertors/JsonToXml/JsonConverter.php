<?php


namespace Convertors\JsonToXml;


use Convertors\Base\AbstractConverter;

class JsonConverter extends AbstractConverter
{
    private $data;

    public function __construct($json)
    {
        $json_loader = new JsonLoader();
        $this->data = $json_loader->load($json);
    }

    public function convert()
    {

    }
}