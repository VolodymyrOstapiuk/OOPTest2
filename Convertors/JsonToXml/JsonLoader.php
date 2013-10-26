<?php

namespace Convertors\JsonToXml;

use Convertors\Base\LoaderInterface;

class JsonLoader implements LoaderInterface
{
    public function load($json)
    {
        $data = json_decode($json);
        if (json_last_error() == JSON_ERROR_SYNTAX) {
            return "Not correct Json";
        } else {
            return $data;
        }
    }
}