<?php



require "vendor/autoload.php";

$access_token = 'MO0zl4hl3Qo8uQyiE0bB6uwIvmFXetyr2RDu+B7CH89EgTIxfUx+Le7RNoG2x49IN+CNMK5HLHm1KzzzIFV0wmECgJSBvuF3bk2N9sJku7SFLAPvLRWAFOqa4YDWeehMLg7yNvDiBvz4F+t+7T8IGQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd43dc42dc53fe096a0cfba02471ba49c';

$pushID = 'Udeceabcc396d09173b50fe4c959f2809';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







