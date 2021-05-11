<?
$xml="
<digiseller.request>
<seller><id>623178</id> </seller>
<product><id></id></product>
<reviews><type>good</type></reviews>
<pages> <num> </num> <rows> 200</rows></pages>
</digiseller.request>
    ";
function connect($address, $xml){
      $ch = curl_init($address);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_POST,1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
      $result=curl_exec($ch);
      return $result;

    }
$result = connect("http://shop.digiseller.ru/xml/shop_reviews.asp", $xml);
echo $result;

?>
