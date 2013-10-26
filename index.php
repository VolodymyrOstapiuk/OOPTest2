<?php
use Convertors\XmlToJson\XmlConverter as XmlConverter;
use Symfony\Component\HttpFoundation\Request;

error_reporting(5); /*  //6 possible warnings
 * <?xml version="1.0"?>    // not error
 * < xml version="1.0"?>    // many errors&warnings *
 */
$request = Request::createFromGlobals();
$xml_data = $request->request->get('xml');
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
