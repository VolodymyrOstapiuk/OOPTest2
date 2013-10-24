<?php
use \Convertors\XmlToJson\XmlConverter as XmlConverter;

function __autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

error_reporting(5); /*  //6 possible warnings
 * <?xml version="1.0"?>    // not error
 * < xml version="1.0"?>    // many errors&warnings *
 */
/**/
$xml_data = $_POST["xml"];
$xml_converter = new XmlConverter($xml_data);
$json = $xml_converter->convert();
?>
<meta charset="utf-8">
<form action="" method="post">
    <label for="xml">Введіть XML</label>
    <textarea name="xml" id="xml" rows="10" cols="40"><?php echo $_POST["xml"] ?></textarea>
    <label for="json">JSON</label>
    <textarea name="json" id="json" rows="10" cols="40"><?php echo $json ?></textarea><br>
    <input type="submit">
</form>
