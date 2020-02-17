<?php



require "vendor/autoload.php";

$access_token = 'MO0zl4hl3Qo8uQyiE0bB6uwIvmFXetyr2RDu+B7CH89EgTIxfUx+Le7RNoG2x49IN+CNMK5HLHm1KzzzIFV0wmECgJSBvuF3bk2N9sJku7SFLAPvLRWAFOqa4YDWeehMLg7yNvDiBvz4F+t+7T8IGQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







