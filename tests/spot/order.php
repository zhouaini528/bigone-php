<?php


$jwt_header=[
    'alg'=>'HS256',
    'typ'=>'JWT',
];

$jwt_payload=[
    'type'=>'OpenAPIV2',
    'sub'=>'cee88ab0-bc69-4357-84b7-db0545e85647',
    'nonce'=>'1527665262168391000',
    "recv_window"=> '50'
];


/*$jwt_header=[
    'alg'=>'HS256',
    'typ'=>'JWT',
];
$jwt_payload=[
    'type'=>'OpenAPI',
    'sub'=>'cee88ab0bc69435784b7db0545e85647',
    "nonce"=>1527665262168391000,
];*/

//YNpae4v_-OU7h2sknRPa3XPhDcC3p-To1WxbWV4Vpro
echo $h=base64_encode(json_encode($jwt_header));
echo PHP_EOL;
echo $p=base64_encode(json_encode($jwt_payload));
echo PHP_EOL;
//echo $s=hash_hmac('sha256', $h.'.'.$p, 'testsecret ',true);
echo $s=hash_hmac('sha256', $h.'.'.$p, 'testsecret',true);
echo PHP_EOL;
echo base64_encode($s);
//wuOfj7xmBN7o_TZ9mT4kj0PdZ6qovFkkjEn4WWa7YII
die;
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Gate\BigoneSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$gate=new BigoneSpot($key,$secret);

//You can set special needs
$gate->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);


//bargaining transaction
try {
    $result=$gate->order()->post([
        //'text'=>'t-xxxxxxxxxx',//custom ID
        'currency_pair'=>'BTC_USDT',
        'type'=>'limit',
        'side'=>'buy',
        'amount'=>'0.1',
        'price'=>'4000',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//track the order
try {
    $result=$gate->order()->get([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//cancellation of order
try {
    $result=$gate->order()->delete([
        'currency_pair'=>'BTC_USDT',
        'order_id'=>'xxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


?>
